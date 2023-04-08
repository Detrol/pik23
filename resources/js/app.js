import.meta.glob([
    '../images/**',
    '../fonts/**',
]);

import './bootstrap';
import Alpine from 'alpinejs'
import AOS from 'aos'
import {gsap} from "gsap";
import {ScrollTrigger} from "gsap/ScrollTrigger";
import {ScrollToPlugin} from "gsap/ScrollToPlugin";
import {TextPlugin} from "gsap/TextPlugin";
import Ukiyo from "ukiyojs";

import 'aos/dist/aos.css';

import('preline')
import("fslightbox")

window.Alpine = Alpine

Alpine.plugin(scrollTo)
Alpine.start()

AOS.init();
gsap.registerPlugin(ScrollTrigger, ScrollToPlugin, TextPlugin);

const images = document.querySelectorAll(".ukiyo")
new Ukiyo(images)

/**************** INTRO TEXT ****************/

/*const decoys = new Map([
    ["text1", { delay: 0.5, content: "text1-decoy" }],
    ["text2", { delay: 1, content: "text2-decoy" }],
    ["text3", { delay: 4, content: "text3-decoy" }],
    ["text4", { delay: 5, content: "text4-decoy" }],
    ["text5", { delay: 8, content: "text5-decoy" }],
    ["text6", { delay: 14, content: "text6-decoy" }],
]);

const timePerCharacter = 0.010;
const textBox = document.querySelector(".textbox");

for (const [className, { delay, content }] of decoys) {
    const decoy = document.querySelector(`.${content}`);
    if (decoy) {
        const duration = decoy.innerText.length * timePerCharacter;
        gsap.to(`.${className}`, {
            scrollTrigger: {
                trigger: textBox,
                toggleActions: "play",
                start: "top 100%",
                end: "bottom 50%+=100px",
            },
            text: { value: decoy.innerText },
            duration,
            delay,
            ease: "none",
        });
    }
}*/


/**************** NUMBER COUNTER ****************/

gsap.from('.animCounter', {
    textContent: '0',
    duration: 2,
    delay: 1,
    ease: 'power1.inOut',
    modifiers: {
        textContent: value => formatNumber(value, 0)
    },
    scrollTrigger: {
        trigger: '.numbers',
        start: 'top 90%',
        end: 'bottom 50%+=100px'
    }
});

/*gsap.set(".numberbox", {opacity: 0});

gsap.to(".numberbox", {
    scrollTrigger: {
        trigger: ".hej",
        toggleActions: "play",
        start: "top 100%",
        end: "bottom 50%+=100px"
    },
    delay: 9,
    duration: 1,
    opacity: 1,
    ease: "power1.inOut"
}, 1);*/

/**************** PULSE ICONS ****************/

const animationOptions = {
    scale: 1.30,
    duration: 0.5,
    delay: 1,
    repeat: 1,
    yoyo: true
};

ScrollTrigger.batch(".pulse", {
    markers: false,
    trigger: '.pulse',
    start: "top 100%",
    end: "bottom 10%",
    once: false,
    toggleActions: "play none none reverse",
    onEnter: batch => gsap.to(batch, animationOptions),
    onLeaveBack: batch => gsap.to(batch, animationOptions),
});

/**************** REVEALS ****************/

const revealEls = ['.revealRight', '.revealLeft', '.revealUp'];

revealEls.forEach(el => {
    gsap.set(el, { opacity: 0 });

    ScrollTrigger.batch(el, {
        markers: false,
        trigger: el,
        start: 'top 90%',
        end: 'bottom 10%',
        once: false,
        toggleActions: 'play none none reverse',
        onEnter: batch => {
            gsap.fromTo(
                batch,
                { opacity: 0, x: el.includes('Right') ? 200 : el.includes('Left') ? -200 : 0, y: el.includes('Up') ? 50 : 0 },
                { opacity: 1, x: 0, y: 0, duration: 0.5, ease: 'sine' }
            );
        },
        onLeaveBack: batch => {
            gsap.to(batch, { opacity: 0, x: el.includes('Right') ? 200 : el.includes('Left') ? -200 : 0, y: el.includes('Up') ? 50 : 0, duration: 0.5, ease: 'sine' });
        }
    });
});

/**************** IMAGE SLIDESHOW ****************/

const motivElements = gsap.utils.toArray(".motiv");
const transitionTime = 5;
const fadeDuration = 1.5;
gsap.set(motivElements[0], { autoAlpha: 1 });
const crossfade = () => {
    if (motivElements.length >= 2) {
        gsap.timeline()
            .to(motivElements[0], { autoAlpha: 0, duration: fadeDuration })
            .to(motivElements[1], { autoAlpha: 1, duration: fadeDuration }, 0);
        motivElements.push(motivElements.shift());
        gsap.delayedCall(transitionTime, crossfade);
    } else console.error("There are not enough .motiv elements on the page.");
};
gsap.delayedCall(transitionTime, crossfade);


/**************** LOGO FADE IN ****************/

function animateText(selector, duration = 0.3, delay = 0.05) {
    const text = document.querySelector(selector);
    const chars = [...text.textContent].map(char => `<span>${char}</span>`);
    text.innerHTML = chars.join("");
    gsap.set(`${selector} span`, {opacity: 0});
    gsap.timeline().to(`${selector} span`, {opacity: 1, duration, ease: "power1.in", stagger: delay});
}

// Example usage:
animateText(".logofadein", 0.3, 0.05);


/**************** TYPEWRITER ****************/

/*const typewriters = document.querySelectorAll(".typewriter");

const duration = 0.5;
let delay = 0;

typewriters.forEach(typewriter => {
    const originalText = typewriter.querySelector(".original-text");
    const typedText = typewriter.querySelector(".typed-text");
    const text = originalText.textContent.trim(); // get the text content and remove whitespace

    originalText.style.visibility = "hidden"; // hide the original text

    const tl2 = gsap.timeline({
        scrollTrigger: {
            trigger: typewriter,
            start: "top 80%",
            end: "bottom 80%",
            toggleActions: "play none none none"
        }
    });

    tl2.from(typewriter, { opacity: 0, delay })
        .to(typedText, {
            text: {
                value: text,
                delimiter: ""
            },
            duration: text.length * duration,
            ease: "none",
            onComplete: () => {
                typedText.classList.add("cursor-hidden");
            }
        });

    delay += 0.5; // add a delay of 0.5 seconds between each typewriter
});*/

/**************** SCROLL TO ONPAGE HREF ****************/

// Detect if a link's href goes to the current page
// Debounce function
/*function debounce(func, delay) {
    let timeout;
    return function (...args) {
        clearTimeout(timeout);
        timeout = setTimeout(() => func.apply(this, args), delay);
    };
}

// Find the anchor element with the same URL as the current page
function getSamePageAnchor(link) {
    return (
        link.hash &&
        link.origin === window.location.origin &&
        link.pathname === window.location.pathname &&
        link.search === window.location.search
    ) ? link.hash : false;
}

// Scroll to a given hash, preventing the event given if there is one
function scrollToHash(hash, e) {
    const elem = hash && document.getElementById(hash.slice(1));
    if (elem) {
        e.preventDefault();
        gsap.to(window, {scrollTo: elem});
    }
}

// Attach click event listener to document for event delegation
document.addEventListener('click', debounce((e) => {
    const hash = getSamePageAnchor(e.target);
    if (hash) scrollToHash(hash, e);
}), 100);

// Scroll to the element in the URL's hash on load
window.addEventListener('load', () => {
    scrollToHash(window.location.hash);
});*/

/**************** TOAST ****************/

document.addEventListener("alpine:init", () => {
    Alpine.store("toasts", {
        counter: 0,
        list: [],
        createToast(message, type = "info") {
            const index = this.list.length;
            let totalVisible = this.list.filter(toast => toast.visible).length + 1;
            this.list.push({ id: this.counter++, message, type, visible: true });
            setTimeout(() => this.destroyToast(index), 5000);
        },
        destroyToast(index) {
            this.list[index].visible = false;
        },
    })
})

