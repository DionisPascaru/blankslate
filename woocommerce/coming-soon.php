<?php
/**
 * Template Name: Coming Soon Page
 */
get_header(); ?>

<div class="coming-soon-page-bg">
    <div class="container">
        <div class="coming-soon-page">
            <div class="coming-soon-page-text">ÎN CURÂND</div>
            <div class="coming-soon-page-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logo-realmen.svg" alt="barbershop">
            </div>
            <div class="coming-soon-page-text">ONLINE - SHOP</div>
            <div class="rm-page-not-found-button">
                <a href="<?php echo home_url(); ?>" type="button" class="rm-btn">
                    Pagina principala
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
