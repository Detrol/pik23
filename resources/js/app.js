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

const hejDecoy = document.getElementsByClassName("hej-decoy");
const jagDecoy = document.getElementsByClassName("jag-decoy");
const erfarenhetDecoy = document.getElementsByClassName("erfarenhet-decoy");
const customersDecoy = document.getElementsByClassName("customers-decoy");
const timePerCharacter = 0.015;

gsap.utils.toArray(".animCounter").forEach(box => {
    let tler = gsap.from(box, {
        textContent: "0",
        duration: 2,
        delay: 8,
        ease: "power1.inOut",
        modifiers: {
            textContent: value => formatNumber(value, 0)
        },
        scrollTrigger: {
            /*trigger: textbox[0],*/
            trigger: ".hej",
            start: "top 90%",
            end: "bottom 50%+=100px",
        }
    });
})
if (hejDecoy[0]) {
    gsap.to(".hej", {
        scrollTrigger: {
            trigger: ".hej",
            toggleActions: "play",
            start: "top 100%",
            end: "bottom 50%+=100px",
        },
        text: {
            value: hejDecoy[0].innerText
        },
        duration: 0.5,
        //delay: 0.5,
        ease: "none",
    })
}

if (jagDecoy[0]) {
    gsap.to(".jag", {
        scrollTrigger: {
            trigger: ".hej",
            toggleActions: "play",
            start: "top 100%",
            end: "bottom 50%+=100px",
        },
        text: {
            value: jagDecoy[0].innerText
        },
        duration: jagDecoy[0].innerText.length * timePerCharacter,
        delay: 1,
        ease: "none",
    })
}

if (erfarenhetDecoy[0]) {
    gsap.to(".erfarenhet", {
        scrollTrigger: {
            trigger: ".hej",
            toggleActions: "play",
            start: "top 100%",
            end: "bottom 50%+=100px",
        },
        text: {
            value: erfarenhetDecoy[0].innerText
        },
        duration: erfarenhetDecoy[0].innerText.length * timePerCharacter,
        delay: 5,
        ease: "none",
    })
}

if (customersDecoy[0]) {
    gsap.to(".customers", {
        scrollTrigger: {
            trigger: ".hej",
            toggleActions: "play",
            start: "top 100%",
            end: "bottom 50%+=100px",
        },
        text: {
            value: customersDecoy[0].innerText
        },
        duration: customersDecoy[0].innerText.length * timePerCharacter,
        delay: 10,
        ease: "none",
    })
}


gsap.set(".numberbox", {
    opacity: 0
});

gsap.to(".numberbox", {
    scrollTrigger: {
        trigger: ".hej",
        toggleActions: "play",
        start: "top 100%",
        end: "bottom 50%+=100px",
        opacity: 1,
    },
    delay: 7,
    duration: 1,
    opacity: 1,
    ease: "power1.inOut",
}, 1)

gsap.set(".revealRight", {
    opacity: 0
});
gsap.set(".revealLeft", {
    opacity: 0
});
gsap.set(".revealUp", {
    opacity: 0
});

ScrollTrigger.batch(".revealRight", {
    markers: false,
    trigger: '.revealRight',
    start: "top 90%",
    end: "bottom 10%",
    once: false,
    toggleActions: "play none none reverse",
    onEnter: batch => {
        gsap.fromTo(batch, {
            x: 200,
            duration: 0.5,
            ease: "sine",
            opacity: 0,
        }, {
            x: 0,
            duration: 0.5,
            ease: "sine",
            opacity: 1,
        });
    },
    /*onLeave: batch => {
        gsap.fromTo(batch, {
            x: 0,
            duration: 0.5,
            ease: "sine",
            opacity: 1,
        }, {
            x: 200,
            duration: 0.5,
            ease: "sine",
            opacity: 0,
        });
    },
    onEnterBack: batch => {
        gsap.fromTo(batch, {
            x: 200,
            duration: 0.5,
            ease: "sine",
            opacity: 0,
        }, {
            x: 0,
            duration: 0.5,
            ease: "sine",
            opacity: 1,
        });
    },*/
    onLeaveBack: batch => {
        gsap.fromTo(batch, {
            x: 0,
            duration: 0.5,
            ease: "sine",
            opacity: 1,
        }, {
            x: 200,
            duration: 0.5,
            ease: "sine",
            opacity: 0,
        });
    },
});

ScrollTrigger.batch(".revealLeft", {
    markers: false,
    trigger: '.revealLeft',
    start: "top 90%",
    end: "bottom 10%",
    once: false,
    toggleActions: "play none none reverse",
    onEnter: batch => {
        gsap.fromTo(batch, {
            x: -200,
            duration: 0.5,
            ease: "sine",
            opacity: 0,
        }, {
            x: 0,
            duration: 0.5,
            ease: "sine",
            opacity: 1,
        });
    },
    /*onLeave: batch => {
        gsap.fromTo(batch, {
            x: 0,
            duration: 0.5,
            ease: "sine",
            opacity: 1,
        }, {
            x: -200,
            duration: 0.5,
            ease: "sine",
            opacity: 0,
        });
    },
    onEnterBack: batch => {
        gsap.fromTo(batch, {
            x: -200,
            duration: 0.5,
            ease: "sine",
            opacity: 0,
        }, {
            x: 0,
            duration: 0.5,
            ease: "sine",
            opacity: 1,
        });
    },*/
    onLeaveBack: batch => {
        gsap.fromTo(batch, {
            x: 0,
            duration: 0.5,
            ease: "sine",
            opacity: 1,
        }, {
            x: -200,
            duration: 0.5,
            ease: "sine",
            opacity: 0,
        });
    },
});

ScrollTrigger.batch(".revealUp", {
    markers: false,
    trigger: '.revealUp',
    start: "top 90%",
    end: "bottom 10%",
    once: false,
    toggleActions: "play none none reverse",
    onEnter: batch => {
        gsap.fromTo(batch, {
            y: 50,
            duration: 0.5,
            ease: "sine",
            opacity: 0,
        }, {
            y: 0,
            duration: 0.5,
            ease: "sine",
            opacity: 1,
        });
    },
    /*onLeave: batch => {
        gsap.fromTo(batch, {
            y: 0,
            duration: 0.5,
            ease: "sine",
            opacity: 1,
        }, {
            y: 50,
            duration: 0.5,
            ease: "sine",
            opacity: 0,
        });
    },
    onEnterBack: batch => {
        gsap.fromTo(batch, {
            y: 50,
            duration: 0.5,
            ease: "sine",
            opacity: 0,
        }, {
            y: 0,
            duration: 0.5,
            ease: "sine",
            opacity: 1,
        });
    },*/
    onLeaveBack: batch => {
        gsap.fromTo(batch, {
            y: 0,
            duration: 0.5,
            ease: "sine",
            opacity: 1,
        }, {
            y: 50,
            duration: 0.5,
            ease: "sine",
            opacity: 0,
        });
    },
});

// Setup
/*const scroller = document.querySelector('.scrollbar-container');

const bodyScrollBar = Scrollbar.init(scroller, {
    damping: 0.05,
    delegateTo: document,
    thumbMinSize: 15
});

ScrollTrigger.scrollerProxy(".scrollbar-container", {
    scrollTop(value) {
        if (arguments.length) {
            bodyScrollBar.scrollTop = value;
        }
        return bodyScrollBar.scrollTop;
    }
});

bodyScrollBar.addListener(ScrollTrigger.update);

ScrollTrigger.defaults({
    scroller: scroller
});*/

gsap.set('.motiv img',{xPercent:-50, yPercent:-50})

const imgs = gsap.utils.toArray(".motiv");
const next = 5; // time to change
const fade = 1.5; // fade time



//only for the first
gsap.set(imgs[0], {autoAlpha:1})

// ====================
function crossfade(){

    const action = gsap.timeline()
        .to(imgs[0], {autoAlpha:0, duration:fade})
        .to(imgs[1], {autoAlpha:1, duration:fade},0)


    imgs.push( imgs.shift() );
    // start endless run
    gsap.delayedCall(next, crossfade);
}

// start the crossfade after next = 3 sec
gsap.delayedCall(next, crossfade);
