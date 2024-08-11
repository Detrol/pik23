class AIChatWidget {
    constructor(apiUrl, containerSelector) {
        this.apiUrl = apiUrl;
        this.container = document.querySelector(containerSelector);
        this.sessionId = this.getOrCreateSessionId();
        this.setupUI();
        this.setupEventListeners();
        this.loadChatHistory();
        setTimeout(() => this.showChatPrompt(), 5000);
    }

    getOrCreateSessionId() {
        let sessionId = localStorage.getItem('chat_session_id');
        if (!sessionId) {
            sessionId = 'session_' + Math.random().toString(36).substr(2, 9);
            localStorage.setItem('chat_session_id', sessionId);
        }
        return sessionId;
    }

    setupUI() {
        console.log('Setting up UI');
        const styles = `
            .message-content ul, .message-content ol {
                padding-left: 25px;
                margin: 10px 0;
                list-style-position: outside;
            }
            .message-content ul {
                list-style-type: disc;
            }
            .message-content ol {
                list-style-type: decimal;
            }
            .message-content li {
                margin-bottom: 5px;
                display: list-item;
            }
            .message-content li::marker {
                color: inherit;
            }
            .message-content p {
                margin-bottom: 10px;
            }
            .message.ai .message-content {
                background-color: #e9ecef;
                color: #333;
                border-radius: 15px;
                padding: 10px 15px;
            }
            .message.user .message-content {
                background-color: #4fc3e0;
                color: white;
                border-radius: 15px;
                padding: 10px 15px;
            }
            .chat-container {
                position: fixed;
                bottom: 24px;
                right: 90px;
                display: flex;
                align-items: center;
                z-index: 1000;
            }
            .chat-prompt {
                background-color: white;
                color: #333;
                border-radius: 18px;
                padding: 10px 15px;
                box-shadow: 0 2px 10px rgba(79, 195, 224, 0.2);
                border: 2px solid #4fc3e0;
                display: flex;
                align-items: center;
                opacity: 0;
                margin-right: 15px;
                position: relative;
                transform-origin: right center;
                will-change: transform, opacity;
            }
            .chat-prompt-content {
                display: flex;
                align-items: center;
            }
            .chat-prompt::after {
                content: '';
                position: absolute;
                right: -12px;
                top: 50%;
                transform: translateY(-50%);
                border-left: 12px solid #4fc3e0;
                border-top: 8px solid transparent;
                border-bottom: 8px solid transparent;
            }
            .chat-prompt::before {
                content: '';
                position: absolute;
                right: -9px;
                top: 50%;
                transform: translateY(-50%);
                border-left: 9px solid white;
                border-top: 6px solid transparent;
                border-bottom: 6px solid transparent;
                z-index: 1;
            }
            .chat-prompt.show {
                opacity: 1;
                transform: translateX(0);
            }
            .chat-prompt-avatar {
                width: 30px;
                height: 30px;
                border-radius: 50%;
                margin-right: 10px;
                border: 1px solid rgba(255, 255, 255, 0.5);
            }
            .chat-prompt-text {
                font-size: 14px;
                color: #333;
                white-space: nowrap;
            }
            .chat-bubble {
                position: fixed;
                bottom: 20px;
                right: 20px;
                width: 60px;
                height: 60px;
                background-color: #4fc3e0;
                border-radius: 50%;
                display: flex !important;
                justify-content: center;
                align-items: center;
                cursor: pointer;
                box-shadow: 0 4px 12px rgba(79, 195, 224, 0.3);
                z-index: 1000;
                transition: all 0.3s ease;
            }
            .chat-bubble:hover {
                transform: scale(1.1);
                box-shadow: 0 6px 16px rgba(79, 195, 224, 0.4);
            }
            .chat-bubble i {
                color: white;
                font-size: 24px;
            }
            #chatModal {
                position: fixed;
                bottom: 100px;
                right: 20px;
                width: 350px;
                height: 500px;
                background-color: white;
                border-radius: 15px;
                overflow: hidden;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                display: none;
                flex-direction: column;
                z-index: 1001;
                transition: opacity 0.3s, visibility 0.3s;
                opacity: 0;
                visibility: hidden;
            }
            #chatModal.visible {
                opacity: 1;
                visibility: visible;
                display: flex;
            }
            .modal-header {
                background-color: #4fc3e0;
                color: white;
                padding: 15px 20px;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            .modal-header .header-content {
                display: flex;
                align-items: center;
            }
            .modal-body {
                flex: 1;
                overflow-y: auto;
                padding: 20px;
                background-color: #f8f9fa;
                display: flex;
                flex-direction: column;
            }
            .modal-footer {
                padding: 15px 20px;
                background-color: #f8f9fa;
            }
            .chat-messages {
                display: flex;
                flex-direction: column;
            }
            .message {
                display: flex;
                margin-bottom: 15px;
                align-items: flex-start;
            }
            .message.ai {
                flex-direction: row;
            }
            .message.user {
                flex-direction: row-reverse;
            }
            .message-content {
                max-width: 80%;
                padding: 10px 15px;
                border-radius: 18px;
                font-size: 14px;
                line-height: 1.4;
            }
            .message.ai .message-content {
                background-color: #e9ecef;
                color: #333;
                border-top-left-radius: 4px;
                margin-left: 10px;
            }
            .message.user .message-content {
                background-color: #4fc3e0;
                color: white;
                border-top-right-radius: 4px;
                margin-right: 10px;
            }
            .modal-header .ai-avatar {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                margin-right: 10px;
                border: 2px solid white;
                overflow: hidden;
            }
            .modal-header .ai-avatar img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            .modal-header .modal-title {
                font-weight: 600;
                margin: 0;
            }
            .input-group {
                display: flex;
                background-color: #ffffff;
                border-radius: 25px;
                overflow: hidden;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }
            #chatInput {
                flex: 1;
                border: none;
                padding: 12px 20px;
                font-size: 14px;
            }
            #chatInput:focus {
                outline: none;
                box-shadow: none;
            }
            #sendChatButton {
                background-color: #4fc3e0;
                color: white;
                border: none;
                padding: 12px 20px;
                font-size: 14px;
                cursor: pointer;
                transition: background-color 0.3s;
            }
            #sendChatButton:hover {
                background-color: #3da8c0;
            }
            .close-btn {
                color: white;
                font-size: 24px;
                cursor: pointer;
                background: none;
                border: none;
                padding: 0;
            }
            .typing-indicator {
                display: flex;
                padding: 10px;
                background: #e0e0e0;
                border-radius: 20px;
                width: 60px;
                justify-content: center;
                align-items: center;
                margin: 10px 0;
            }
            .typing-indicator span {
                height: 8px;
                width: 8px;
                background: #333;
                border-radius: 50%;
                display: inline-block;
                margin: 0 2px;
                animation: bounce 1.3s ease infinite;
            }
            .typing-indicator span:nth-child(2) {
                animation-delay: -1.1s;
            }
            .typing-indicator span:nth-child(3) {
                animation-delay: -0.9s;
            }
            @keyframes bounce {
                0%, 60%, 100% { transform: translateY(0); }
                30% { transform: translateY(-4px); }
            }
            .error {
                background-color: #ffe6e6;
                color: #cc0000;
                padding: 10px;
                border-radius: 8px;
                margin-bottom: 15px;
            }
            @media (max-width: 767px) {
                #chatModal {
                    bottom: 80px;
                    right: 10px;
                    width: calc(100% - 20px);
                    height: calc(100% - 100px);
                }
                .chat-container {
                    right: 70px;
                }
            }
           .typing-indicator {
                display: flex;
                padding: 10px;
                background: #e0e0e0;
                border-radius: 20px;
                width: 60px;
                justify-content: center;
                align-items: center;
                margin: 10px 0;
            }

            .typing-indicator span {
                height: 8px;
                width: 8px;
                background: #333;
                border-radius: 50%;
                display: inline-block;
                margin: 0 2px;
                animation: bounce 1.3s ease infinite;
            }

            .typing-indicator span:nth-child(2) {
                animation-delay: -1.1s;
            }

            .typing-indicator span:nth-child(3) {
                animation-delay: -0.9s;
            }

            @keyframes bounce {
                0%, 60%, 100% { transform: translateY(0); }
                30% { transform: translateY(-4px); }
            }
        `;

        this.container.innerHTML = `
            <style>${styles}</style>
            <div class="chat-container">
                <div id="chat-prompt" class="chat-prompt">
                    <div class="chat-prompt-content">
                        <img src="/assets/images/chatbot.png" alt="AI Avatar" class="chat-prompt-avatar">
                        <span class="chat-prompt-text">Vill du ha prisuppgifter?</span>
                    </div>
                </div>
                <div id="chat-bubble" class="chat-bubble">
                    <i class="fas fa-comments"></i>
                </div>
            </div>
            <div id="chatModal">
                <div class="modal-header">
                    <div class="header-content">
                        <div class="ai-avatar">
                            <img src="/assets/images/chatbot.png" alt="PutsAssistenten">
                        </div>
                        <h5 class="modal-title" id="chatModalLabel">PutsAssistenten</h5>
                    </div>
                    <button type="button" class="close-btn" aria-label="Stäng">&times;</button>
                </div>
                <div class="modal-body" id="chatMessages">
                    <!-- Chat messages will be appended here -->
                </div>
                <div class="modal-footer">
                    <div class="input-group">
                        <input type="text" id="chatInput" class="form-control" placeholder="Ställ en fråga...">
                        <button id="sendChatButton" class="btn btn-primary">Skicka</button>
                    </div>
                </div>
            </div>
        `;

        this.chatPrompt = this.container.querySelector('#chat-prompt');
        this.chatBubble = this.container.querySelector('.chat-bubble');
        this.chatModal = this.container.querySelector('#chatModal');
        this.closeBtn = this.container.querySelector('.close-btn');
        this.messagesContainer = this.container.querySelector('#chatMessages');
        this.input = this.container.querySelector('#chatInput');
        this.sendButton = this.container.querySelector('#sendChatButton');

        console.log('UI setup complete');
    }

    setupEventListeners() {
        this.chatBubble.addEventListener('click', () => this.toggleModal());
        this.closeBtn.addEventListener('click', () => this.toggleModal());
        this.sendButton.addEventListener('click', () => this.sendMessage());
        this.input.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault();
                this.sendMessage();
            }
        });

        // Lägg till en MutationObserver för att hantera scrollning
        const chatMessagesObserver = new MutationObserver(() => {
            this.scrollToBottom();
        });
        chatMessagesObserver.observe(this.messagesContainer, { childList: true, subtree: true });
    }

    toggleModal() {
        this.chatModal.classList.toggle('visible');
        if (this.chatModal.classList.contains('visible')) {
            this.input.focus();
            this.scrollToBottom();
        }
    }

    showChatPrompt() {
        if (this.chatPromptShown) return;
        this.chatPromptShown = true;

        gsap.set(this.chatPrompt, {
            scale: 0.5,
            opacity: 0,
            x: this.chatBubble.offsetWidth / 2,
            transformOrigin: 'right center'
        });

        const tl = gsap.timeline({onComplete: () => this.hideChatPrompt()});

        tl.to(this.chatPrompt, {
            duration: 0.5,
            scale: 1,
            opacity: 1,
            x: 0,
            ease: "power2.out"
        });
    }

    hideChatPrompt() {
        setTimeout(() => {
            gsap.to(this.chatPrompt, {
                duration: 0.5,
                scale: 0.5,
                opacity: 0,
                x: this.chatBubble.offsetWidth / 2,
                ease: "power2.in",
                onComplete: () => {
                    gsap.set(this.chatPrompt, {clearProps: "all"});
                    this.chatPromptShown = false;
                }
            });
        }, 3000);
    }

    async sendMessage() {
        const message = this.input.value.trim();
        if (message === '') return;

        const originalQuestion = message;
        this.appendMessage(message, 'user');
        this.input.value = '';
        this.showTypingIndicator();

        try {
            const response = await fetch(`${this.apiUrl}/chat`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    message: message,
                    session_id: this.sessionId
                })
            });

            if (!response.ok) {
                throw new Error('Network response was not ok');
            }

            const data = await response.json();

            if (data.status === 'processing') {
                await this.checkAIResponse(data.job_id, originalQuestion);
            } else {
                throw new Error('Unexpected response');
            }
        } catch (error) {
            console.error('Error:', error);
            this.hideTypingIndicator();
            this.appendMessage('Ett fel uppstod. Vänligen försök igen.', 'error');
            this.input.value = originalQuestion;
        }
    }

    async checkAIResponse(jobId, originalQuestion) {
        const maxAttempts = 30;
        const delay = 1000;

        for (let i = 0; i < maxAttempts; i++) {
            try {
                const response = await fetch(`${this.apiUrl}/chat-response?job_id=${jobId}`);
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                const data = await response.json();

                if (data.response) {
                    this.hideTypingIndicator();
                    if (typeof data.response === 'string' && data.response.includes("Tyvärr kunde jag inte besvara din fråga")) {
                        this.appendMessage(data.response, 'error');
                        this.input.value = originalQuestion;
                    } else if (typeof data.response === 'string') {
                        this.appendMessage(data.response, 'ai');
                    } else if (typeof data.response === 'object' && data.response.error) {
                        this.appendMessage(data.response.error, 'error');
                        this.input.value = originalQuestion;
                    } else {
                        this.appendMessage('Ett oväntat svar mottogs från servern.', 'error');
                        this.input.value = originalQuestion;
                    }
                    return;
                } else if (data.status !== 'processing') {
                    throw new Error('Unexpected response');
                }
            } catch (error) {
                console.error('Error checking AI response:', error);
            }

            await new Promise(resolve => setTimeout(resolve, delay));
        }

        this.hideTypingIndicator();
        this.appendMessage('Timeout: Kunde inte hämta svar från AI. Vänligen försök igen.', 'error');
        this.input.value = originalQuestion;
    }

    appendMessage(message, sender) {
        const messageWrapper = document.createElement('div');
        messageWrapper.className = `message ${sender}`;

        if (sender === 'ai') {
            const avatar = document.createElement('div');
            avatar.className = 'ai-avatar';
            const img = document.createElement('img');
            img.src = '/assets/images/chatbot.png';
            img.alt = 'AI Avatar';
            avatar.appendChild(img);
            messageWrapper.appendChild(avatar);
        }

        const messageContent = document.createElement('div');
        messageContent.className = 'message-content';

        if (sender === 'ai' || sender === 'error') {
            messageContent.innerHTML = DOMPurify.sanitize(message, {
                ALLOWED_TAGS: ['b', 'i', 'em', 'strong', 'a', 'p', 'br', 'ul', 'ol', 'li'],
                ALLOWED_ATTR: ['href', 'target']
            });
        } else {
            messageContent.textContent = message;
        }

        messageWrapper.appendChild(messageContent);
        this.messagesContainer.appendChild(messageWrapper);

        gsap.from(messageWrapper, {
            duration: 0.5,
            opacity: 0,
            y: 20,
            ease: "power2.out"
        });

        if (sender === 'user') {
            this.scrollToBottom();
        } else if (sender === 'ai') {
            this.scrollToBottom();
            setTimeout(() => {
                this.scrollToElement(messageWrapper, true);
            }, 100);
        }
    }

    convertHtmlListToText(html) {
        const tempDiv = document.createElement('div');
        tempDiv.innerHTML = DOMPurify.sanitize(html);

        const listItems = tempDiv.querySelectorAll('li');
        if (listItems.length > 0) {
            let textContent = tempDiv.textContent || tempDiv.innerText || '';
            listItems.forEach((item, index) => {
                const bulletPoint = '• ';
                const itemText = item.textContent || item.innerText || '';
                textContent = textContent.replace(itemText, `\n${bulletPoint}${itemText}`);
            });
            return textContent.trim();
        }

        return tempDiv.textContent || tempDiv.innerText || '';
    }

    showTypingIndicator() {
        const typingIndicator = document.createElement('div');
        typingIndicator.className = 'typing-indicator';
        typingIndicator.innerHTML = '<span></span><span></span><span></span>';
        this.messagesContainer.appendChild(typingIndicator);
        this.scrollToBottom();
    }

    hideTypingIndicator() {
        const typingIndicator = this.messagesContainer.querySelector('.typing-indicator');
        if (typingIndicator) {
            typingIndicator.remove();
        }
    }

    scrollToBottom(smooth = false) {
        gsap.to(this.messagesContainer, {
            duration: smooth ? 0.5 : 0,
            scrollTop: this.messagesContainer.scrollHeight,
            ease: "power2.out"
        });
    }
    scrollToElement(element, smooth = false) {
        const elementPosition = element.offsetTop - this.messagesContainer.offsetTop;
        gsap.to(this.messagesContainer, {
            duration: smooth ? 0.5 : 0,
            scrollTop: elementPosition,
            ease: "power2.out"
        });
    }

    async loadChatHistory() {
        try {
            if (!this.sessionId) {
                console.log('No session ID found, initializing new chat');
                this.showWelcomeMessage();
                return;
            }

            const response = await fetch(`${this.apiUrl}/chat-history?session_id=${this.sessionId}`);
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            const history = await response.json();
            console.log('Received chat history:', history);

            this.messagesContainer.innerHTML = '';

            // Visa alltid välkomstmeddelandet först
            this.showWelcomeMessage();

            if (Array.isArray(history) && history.length > 0) {
                history.forEach(item => {
                    if (item.question) {
                        this.appendMessage(item.question, 'user');
                    }
                    if (item.answer) {
                        this.appendMessage(item.answer, 'ai');
                    }
                });
            }

            this.scrollToBottom();
        } catch (error) {
            console.error('Error loading chat history:', error);
            this.showWelcomeMessage();
        }
    }

    showWelcomeMessage() {
        const welcomeMessage = "Hej och välkommen! Jag är PutsAssistenten, din AI-assistent för fönsterputsning. Jag kan hjälpa dig med information om våra tjänster, ge prisuppskattningar och svara på allmänna frågor om verksamheten och fönsterputsning. Vad skulle du vilja ha hjälp med?";
        this.appendMessage(welcomeMessage, 'ai');
    }
}
