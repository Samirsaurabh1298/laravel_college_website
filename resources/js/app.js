import './bootstrap';

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();


// Mobile Menu Toggle (Pure JavaScript)
document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');

    // Toggle mobile menu visibility when hamburger icon is clicked
    hamburger.addEventListener('click', function () {
        mobileMenu.classList.toggle('hidden');
    });
});

// Import Owl Carousel CSS (Only necessary if you're using NPM)
import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel';

// After the page has loaded, initialize Owl Carousel
document.addEventListener('DOMContentLoaded', function () {
    $('.owl-carousel').owlCarousel({
        loop: true,               // Enable infinite scrolling
        margin: 10,               // Set margin between items
        nav: true,                // Enable navigation buttons (prev/next)
        responsive: {
            0: {
                items: 1,         // For small screens, show 1 item
            },
            600: {
                items: 3,         // For medium screens, show 3 items
            },
            1000: {
                items: 5,         // For large screens, show 5 items
            }
        }
    });
});

