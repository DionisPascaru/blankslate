<?php
/* Template Name: Checkout Page */
get_header();
get_template_part('woocommerce/header');
?>
    <div class="rm-shop-page">
        <div class="container">
            <div class="rm-checkout-view">
                <div class="rm-checkout-view-title">Checkout</div>
                <div class="checkout-section">
                    <?php echo do_shortcode('[woocommerce_checkout]'); ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>