document.addEventListener('DOMContentLoaded', () => {
    $('.rm-timeline-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.rm-timeline-nav',
        arrows: true,
        fade: true,
        infinite: false,
        draggable: false
    });
    $('.rm-timeline-nav').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.rm-timeline-for',
        focusOnSelect: true,
        centerMode: true,
        centerPadding: '0',
        infinite: false,
        draggable: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    centerMode: true,
                    centerPadding: '0',
                }
            },
            {
                breakpoint: 480,
                settings: {
                    infinite: false,
                    draggable: false,
                    arrows: false,
                    centerMode: true,
                    centerPadding: '0',
                    slidesToShow: 1
                }
            }
        ]
    });
})