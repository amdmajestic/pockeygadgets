import "./bootstrap";
import "@iconify/iconify";

// Making jQuery availible globally
import $ from "jquery";
window.$ = window.jQuery = $;

import AOS from "aos";
import "aos/dist/aos.css";
// Set (aos) defaults globally:
AOS.init({
    duration: 1200,
    easing: "ease-in-out",
    delay: 125,
    once: true,
});
