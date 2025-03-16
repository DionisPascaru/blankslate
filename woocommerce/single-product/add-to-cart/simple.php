<?php
defined('ABSPATH') || exit;

global $product;

if (!$product->is_purchasable()) {
    return;
}

?>

<form class="cart custom-add-to-cart" method="post" enctype='multipart/form-data'>
    <?php do_action('woocommerce_before_add_to_cart_button'); ?>

    <input type="hidden" name="add-to-cart" value="<?php echo absint($product->get_id()); ?>" />
    <button type="submit" name="add-to-cart" class="button custom-button">
        <?php echo esc_html($product->single_add_to_cart_text()); ?>
    </button>

    <?php do_action('woocommerce_after_add_to_cart_button'); ?>
</form>
