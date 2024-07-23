document.addEventListener('DOMContentLoaded', function () {

    var swiper = new Swiper('.swiper-proyectos', {
        grabCursor: true,
        speed: 600,
        slidesPerView: 2, // Número de slides visibles
        spaceBetween: 30, // Espacio entre los slides
        loop: true,
        autoplay: true,
        navigation: {
            nextEl: '.swiper-button-next-proyectos',
            prevEl: '.swiper-button-prev-proyectos',
        },
        breakpoints: {
            // when window width is >= 100px
            100: {
                slidesPerView: 2, // Muestra solo un slide a la vez
                spaceBetween: 10,
                effect: 'coverflow',
                coverflowEffect: {
                    rotate: 30,
                    slideShadows: false,
                },
            },
        },
        on: {
                init: function() {
                    ajustarTamanio();
                },
                resize: function() {
                    ajustarTamanio();
                }
            }
    });

});

function ajustarTamanio() {
    var swiperSlides = document.querySelectorAll('.swiper-contenido-proyectos .swiper-slide');
    var maxHeight = 0;

    swiperSlides.forEach(function(slide) {
        var slideHeight = slide.offsetHeight;
        if (slideHeight > maxHeight) {
            maxHeight = slideHeight;
        }
    });

    swiperSlides.forEach(function(slide) {
        slide.style.height = maxHeight + 'px';
    });

}