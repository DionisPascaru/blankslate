<?php
/* Template Name: Cart Page */
get_header();
get_template_part('woocommerce/header');
?>
    <div class="rm-shop-page">
        <div class="container">
            <div class="rm-cart-view">
                <div class="rm-cart-view-title">Produsele tale</div>
                <div class="rm-cart-view-table">
                    <?php echo do_shortcode('[woocommerce_cart]'); ?>
                </div>
                <!-- Checkout Section -->
                <div class="checkout-section">
                    <?php echo do_shortcode('[woocommerce_checkout]'); ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>