<?php ?>
<section class="rm-pt-none">
<!--    <div class="rm-banners">-->
<!--        <div class="rm-banner rm-banner-tablet">-->
<!--            <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/banner-tablet.png" alt="barbershop">-->
<!--        </div>-->
<!--        <div class="rm-banner rm-banner-mobile">-->
<!--            <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/banner-mobile.png" alt="barbershop">-->
<!--        </div>-->
<!--    </div>-->
    <div class="container">
        <div id="lottie-banner" class="rm-banner"></div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        lottie.loadAnimation({
            container: document.getElementById('lottie-banner'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: '<?php echo get_template_directory_uri(); ?>/js/lottie/banner.json'
        });
    })
</script>