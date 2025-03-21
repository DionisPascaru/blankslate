<?php
/* Template Name: Cart Page */
get_header();
get_template_part('woocommerce/header');
?>
    <div class="rm-shop-page">
        <div class="container">
            <div class="rm-page-view-info-breadcrumb">
                <?php woocommerce_breadcrumb(); ?>
            </div>
            <div class="rm-cart-view">
                <div class="rm-cart-view-title">Produsele tale</div>
                <div class="rm-cart-view-table">
                    <?php echo do_shortcode('[woocommerce_cart]'); ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>