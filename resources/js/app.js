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

import 'aos/dist/aos.css';

import('preline')
import("fslightbox")

window.Alpine = Alpine

Alpine.plugin(scrollTo)
Alpine.start()

AOS.init();
jarallaxVideo();
gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

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

gsap.utils.toArray(".animCounter").forEach(box => {
    var tler = gsap.from(box, {
        textContent: "0",
        duration: 2,
        ease: "power1.inOut",
        modifiers: {
            textContent: value => formatNumber(value, 0)
        },
        scrollTrigger: {
            trigger: box,
            start: "top 90%",
            end: "bottom 50%+=100px",
        }
    });
})

// Detect if a link's href goes to the current page
function getSamePageAnchor (link) {
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
    if(elem) {
        if(e) e.preventDefault();
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
