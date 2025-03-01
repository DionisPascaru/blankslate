<?php ?>
<section>
    <div class="container">
        <div id="lottie-banner" class="rm-banner"></div>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                lottie.loadAnimation({
                    container: document.getElementById('lottie-banner'),
                    renderer: 'svg',
                    loop: true,
                    autoplay: true,
                    path: '<?php echo get_template_directory_uri(); ?>/assets/lottie/banner.json'
                });
            })
        </script>
    </div>
</section>
