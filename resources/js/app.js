import.meta.glob([
    '../images/**',
    '../fonts/**',
]);

import './bootstrap';
import Alpine from 'alpinejs'
import {jarallax, jarallaxVideo} from "jarallax";
import AOS from 'aos'
import {gsap} from "gsap";
import {ScrollTrigger} from "gsap/ScrollTrigger";
import {ScrollToPlugin} from "gsap/ScrollToPlugin";
import {TextPlugin} from "gsap/TextPlugin";
import Scrollbar from 'smooth-scrollbar';
import Ukiyo from "ukiyojs";

import 'aos/dist/aos.css';

//import "../assets/js/pagescroll.js"

import('preline')
import("fslightbox")

window.Alpine = Alpine

Alpine.plugin(scrollTo)
Alpine.start()

AOS.init();
jarallaxVideo();
gsap.registerPlugin(ScrollTrigger, ScrollToPlugin, TextPlugin);

const images = document.querySelectorAll(".ukiyo")
new Ukiyo(images)

jarallax(document.querySelectorAll('.jarallax'), {
    speed: 0.2,
    //disableParallax: /iPad|iPhone|iPod|Android/,
});

/**************** INTRO TEXT ****************/

const decoys = {
    "text1": "text1-decoy",
    "text2": "text2-decoy",
    "text3": "text3-decoy",
    "text4": "text4-decoy",
    "text5": "text5-decoy",
    "text6": "text6-decoy",
};

const timePerCharacter = 0.010;

for (const [className, decoyClassName] of Object.entries(decoys)) {
    const decoy = document.querySelector(`.${decoyClassName}`);
    if (decoy) {
        gsap.to(`.${className}`, {
            scrollTrigger: {
                trigger: ".textbox",
                toggleActions: "play",
                start: "top 100%",
                end: "bottom 50%+=100px",
            },
            text: {
                value: decoy.innerText
            },
            duration: decoy.innerText.length * timePerCharacter,
            delay: {
                "text1": 0.5,
                "text2": 1,
                "text3": 4,
                "text4": 5,
                "text5": 8,
                "text6": 14,
            }[className],
            ease: "none",
        });
    }
}

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

gsap.set(".numberbox", {opacity: 0});

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
}, 1);

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
function getSamePageAnchor(link) {
    if (
        link.protocol !== window.location.protocol ||
        link.host !== window.location.host ||
        link.pathname !== window.location.pathname ||
        link.search !== window.location.search
    ) {
        return false;
    }

    return link.hash;
}

// Scroll to a given hash, preventing the event given if there is one
function scrollToHash(hash, e) {
    const elem = hash ? document.querySelector(hash) : false;
    if (elem) {
        if (e) e.preventDefault();
        gsap.to(window, {scrollTo: elem});
    }
}

// If a link's href is within the current page, scroll to it instead
document.querySelectorAll('a[href]').forEach(a => {
    a.addEventListener('click', e => {
        scrollToHash(getSamePageAnchor(a), e);
    });
});

// Scroll to the element in the URL's hash on load
scrollToHash(window.location.hash);

/**************** TOAST ****************/

document.addEventListener("alpine:init", () => {
    Alpine.store("toasts", {
        counter: 0,
        list: [],
        createToast(message, type = "info") {
            const index = this.list.length
            let totalVisible =
                this.list.filter((toast) => {
                    return toast.visible
                }).length + 1
            this.list.push({
                id: this.counter++,
                message,
                type,
                visible: true,
            })
            setTimeout(() => {
                this.destroyToast(index)
            }, 2000 * totalVisible)
        },
        destroyToast(index) {
            this.list[index].visible = false
        },
    })
})
