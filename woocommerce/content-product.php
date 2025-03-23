<?php
defined('ABSPATH') || exit;
global $product;
?>
<div class="rm-product-card">
    <div class="rm-product-card-content">
        <a href="<?php the_permalink(); ?>" class="product-link">
            <div class="rm-product-thumbnail">
                <?php echo woocommerce_get_product_thumbnail(); ?>
            </div>
            <div class="rm-product-price"><?php echo $product->get_price_html(); ?></div>
            <div class="rm-product-title">
                <?php
                $title = get_the_title();
                echo strlen($title) > 15 ? substr($title, 0, 15) . '...' : $title;
                ?>
            </div>
        </a>

        <div class="rm-product-buttons">
            <a href="<?php echo esc_url($product->add_to_cart_url()); ?>" class="add-to-cart-button">
                <?php echo esc_html($product->add_to_cart_text()); ?>
            </a>
        </div>
    </div>
</div>
