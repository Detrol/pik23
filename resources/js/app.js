import './bootstrap';
import Alpine from 'alpinejs'
import scrollTo from 'alpinejs-scroll-to'
import { jarallax, jarallaxVideo } from "jarallax";
import AOS from 'aos'

import 'aos/dist/aos.css';

import('preline')

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

