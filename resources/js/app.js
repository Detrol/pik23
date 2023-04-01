import './bootstrap';
import Alpine from 'alpinejs'
import scrollTo from 'alpinejs-scroll-to'
import { jarallax, jarallaxVideo } from "jarallax";
import AOS from 'aos'

import 'aos/dist/aos.css';

import('preline')
import("fslightbox")

window.Alpine = Alpine

Alpine.plugin(scrollTo)
Alpine.start()

import.meta.glob([
    '../images/**',
    '../fonts/**',
]);

AOS.init();
jarallaxVideo();

jarallax(document.querySelectorAll('.jarallax'), {
    speed: 0.5,
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
