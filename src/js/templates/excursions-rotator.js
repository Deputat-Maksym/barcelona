$(document).ready(function () {
    $('.js-slider-excur').slick({
        // centerMode: true,
        arrows: true,
        // centerPadding: '0px',
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1120,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 845,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 580,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
});
