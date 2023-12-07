var swiper = new Swiper(".mySwiper", {
    cssMode: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
    },
    mousewheel: true,
    keyboard: true,
    breakpoints: {
        300: {
            slidesPerView: 1,
            spaceBetween: 40,
        },
        500: {
            slidesPerView: 1,
            spaceBetween: 40,
        },
        640: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 50,
        },
        1300: {
            slidesPerView: 4,
            spaceBetween: 50,
        },
    },
});

AOS.init();
