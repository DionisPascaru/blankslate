(function ($) {
    $(document).ready(function () {
        /**
         * Timeline slider.
         */
        $('.rm-timeline-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            asNavFor: '.rm-timeline-nav',
            arrows: false,
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
            arrows: true,
            infinite: false,
            draggable: false,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                        centerMode: true,
                        centerPadding: '0',
                        arrows: true,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        infinite: false,
                        draggable: false,
                        arrows: true,
                        centerMode: true,
                        centerPadding: '0',
                        slidesToShow: 1
                    }
                }
            ]
        });

        /**
         * Reviews slider.
         */
        $('.rm-reviews-items').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            infinite: true,
            draggable: false,
            dots: true,
            prevArrow: '<button type="button" class="slick-prev"><i class="icon-chevron-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="icon-chevron-right"></i></button>',
        });

        /**
         * Single product slider.
         */
        $('.rm-product-view-gallery-nav').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            draggable: false,
            fade: true,
            asNavFor: '.rm-product-view-gallery-for'
        });
        $('.rm-product-view-gallery-for').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            centerMode: false,
            focusOnSelect: true,
            variableWidth: true,
            arrows: true,
            prevArrow: '<button type="button" class="slick-prev"><i class="icon-chevron-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="icon-chevron-right"></i></button>',
            asNavFor: '.rm-product-view-gallery-nav',
        });
    });
})(jQuery);
