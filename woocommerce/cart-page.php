<?php
/* Template Name: Cart Page */
get_header();
get_template_part('woocommerce/header');
?>
    <div class="rm-shop-page">
        <div class="container">
            <!-- Display WooCommerce Notices and Clear Them -->
            <?php wc_print_notices(); wc_clear_notices(); ?>
            <div class="rm-cart-view">
                <div class="rm-cart-view-title">Produsele tale</div>
                <div class="rm-cart-view-table">
                    <?php echo do_shortcode('[woocommerce_cart]'); ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>