<?php
get_header();
get_template_part('woocommerce/header');
?>

<div class="rm-product-view">
    <div class="rm-product-view-bg">
        <div class="rm-product-view-bg-red"></div>
        <div class="rm-product-view-bg-white"></div>
    </div>
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <div class="row rm-sticky-container">
                <div class="col-lg-6">

                    <div class="rm-sticky-block">
                        <div class="rm-sticky-block-vertical-center">

                            <div class="rm-product-view-gallery-block">
                                <?php
                                global $product;
                                $main_image_id = $product->get_image_id();
                                $attachment_ids = $product->get_gallery_image_ids();

                                $gallery_ids = array_filter(array_merge([$main_image_id], $attachment_ids));

                                echo '<div id="rmProductViewGalleryNav" class="rm-product-view-gallery rm-product-view-gallery-nav">';
                                foreach ($gallery_ids as $gallery_id) {
                                    echo '<div class="rm-product-view-gallery-slider">';
                                    echo wp_get_attachment_image($gallery_id, 'large');
                                    echo '</div>';
                                }
                                echo '</div>';
                                echo '<div id="rmProductViewGalleryFor" class="rm-product-view-gallery-thumbnail rm-product-view-gallery-for">';
                                foreach ($gallery_ids as $gallery_id) {
                                    echo '<div class="rm-product-view-gallery-slider-thumbnail">';
                                    echo wp_get_attachment_image($gallery_id, 'large');
                                    echo '</div>';
                                }
                                echo '</div>';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rm-product-view-info">
                        <div class="rm-page-view-info-breadcrumb">
                            <?php woocommerce_breadcrumb(); ?>
                        </div>

                        <?php
                        wc_print_notices();
                        ?>

                        <div class="rm-product-view-info-title">
                            <?php woocommerce_template_single_title(); ?>
                            <?php
                            $product_tags = wp_get_post_terms(get_the_ID(), 'product_tag');

                            if (!empty($product_tags) && !is_wp_error($product_tags)) {
                                echo '<div class="rm-product-view-info-tags">';
                                foreach ($product_tags as $tag) {
                                    echo '<span class="rm-product-view-info-tag">#' . esc_html($tag->name) . '</span> ';
                                }
                                echo '</div>';
                            }
                            ?>
                        </div>

                        <div class="rm-product-view-info-add-to-cart">
                            <?php if ( $product->is_type( 'simple' ) ) : ?>
                                <?php if ( !$product->is_in_stock() ) : ?>
                                    <div class="rm-out-of-stock">Out of stock</div>
                                <?php else: ?>
                                    <form class="custom-simple-form" method="post" action="<?php echo esc_url( $product->add_to_cart_url() ); ?>">
                                        <div class="custom-qty-price">
                                            <!-- Price -->
                                            <div class="price-wrapper">
                                                <label class="rm-product-view-label">Preţ</label>
                                                <div class="variation-price"><?php echo $product->get_price_html(); ?></div>
                                            </div>
                                        </div>

                                        <!-- Buttons -->
                                        <div class="custom-add-buttons">
                                            <input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" />
                                            <button type="submit" class="add-to-cart">Add To Cart</button>
                                        </div>
                                    </form>
                                <?php endif; ?>
                            <?php endif; ?>

                            <?php if ( $product->is_type( 'variable' ) ) :
                                $available_variations = $product->get_available_variations();
                                $attributes = $product->get_variation_attributes();
                                $default_attributes = $product->get_default_attributes();
                                $product_id = $product->get_id();
                                ?>

                                <form class="variations_form custom-variations" method="post"
                                      action="<?php echo esc_url( $product->get_permalink() ); ?>"
                                      data-product_id="<?php echo esc_attr( $product_id ); ?>"
                                      data-product_variations='<?php echo wp_json_encode( $available_variations ); ?>'>

                                    <!-- Loop through each attribute dynamically -->
                                    <?php foreach ( $attributes as $attribute_name => $options ) : ?>
                                        <div class="custom-variation-group">
                                            <label class="rm-product-view-label"><?php echo wc_attribute_label( $attribute_name ); ?></label>
                                            <div class="rm-custom-variation-options" data-attribute-name="<?php echo esc_attr( $attribute_name ); ?>">
                                                <?php foreach ( $options as $option ) :
                                                    $term = get_term_by( 'slug', $option, $attribute_name );
                                                    $term_name = $term ? $term->name : $option;
                                                    ?>
                                                    <button type="button"
                                                            class="rm-variation-option"
                                                            data-attribute="<?php echo esc_attr( $attribute_name ); ?>"
                                                            data-value="<?php echo esc_attr( $option ); ?>">
                                                        <?php echo esc_html( $term_name ); ?>
                                                    </button>
                                                <?php endforeach; ?>
                                                <input type="hidden"
                                                       name="attribute_<?php echo esc_attr( $attribute_name ); ?>"
                                                       id="selected_variation_input" />
                                            </div>
                                        </div>
                                    <?php endforeach; ?>

                                    <!-- Quantity -->
                                    <div class="custom-qty-price">
                                        <div class="qty-wrapper">
                                            <label class="rm-product-view-label">Cantitate</label>
                                            <div class="qty-controls">
                                                <button type="button" class="qty-count qty-minus">－</button>
                                                <input type="number" name="quantity" value="1" min="1" class="qty-input" />
                                                <button type="button" class="qty-count qty-plus">＋</button>
                                            </div>
                                        </div>

                                        <!-- Price -->
                                        <div class="price-wrapper">
                                            <label class="rm-product-view-label">Preţ</label>
                                            <div class="variation-price"><?php echo $product->get_price_html(); ?></div>
                                        </div>
                                    </div>

                                    <!-- Buttons -->
                                    <div class="custom-add-buttons">
                                        <input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" />
                                        <input type="hidden" name="variation_id" class="variation_id" value="0" />
                                        <button type="submit" class="add-to-cart" disabled>Adaugă in coş</button>
                                        <div class="rm-out-of-stock-message" style="display:none;">Nu este in stoc</div>
                                    </div>
                                </form>

                            <?php endif; ?>

                        </div>

                        <div class="rm-product-view-info-description">
                            <?php
                            global $TRP_LANGUAGE;

                            if ($TRP_LANGUAGE) {
                                $lang = isset($TRP_LANGUAGE) ? substr($TRP_LANGUAGE, 0, 2) : 'ro'; // Normalize to 'ru', 'ro', etc.
                                $desc = '';

                                if ($lang === 'ro') {
                                    // Ro language state
                                    woocommerce_template_single_excerpt();
                                } elseif ($lang === 'ru') {
                                    // Ru language state
                                    $desc = get_field('product_short_description_ru');
                                    if ($desc) {
                                        echo wp_kses_post($desc);
                                    }
                                }
                            }
                            ?>
                        </div>


                        <?php
                        $upsells = $product->get_upsell_ids();

                        if (!empty($upsells)) {
                            echo '<div class="rm-product-linked-section">';
                            echo '<h3>Produse similare</h3>';
                            echo '<div class="rm-upsell-products">';

                            foreach ($upsells as $upsell_id) {
                                $upsell = wc_get_product($upsell_id);
                                if (!$upsell || !$upsell->is_visible()) continue;

                                $link = get_permalink($upsell_id);
                                $image = $upsell->get_image(); // uses WooCommerce image size
                                $title = $upsell->get_name();
                                $price = $upsell->get_price_html();

                                echo '<div class="rm-upsell-product">';
                                echo '<div class="rm-upsell-image">';
                                echo '<a href="' . esc_url($link) . '">' . $image . '</a>';
                                echo '</div>';
                                echo '<div class="rm-upsell-info">';
                                echo '<a href="' . esc_url($link) . '">' . esc_html($title) . '</a>';
                                echo '<div class="rm-upsell-price">' . $price . '</div>';
                                echo '</div>';
                                echo '</div>';
                            }

                            echo '</div></div>';
                        }
                        ?>

                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.querySelector('.variations_form');
            if (!form) return;

            const variations = JSON.parse(form.dataset.product_variations);
            const attributeInputs = form.querySelectorAll('[name^="attribute_"]');
            const variationIdInput = form.querySelector('.variation_id');
            const priceDisplay = form.querySelector('.variation-price');

            function getSelectedAttributes() {
                const attrs = {};
                attributeInputs.forEach(input => {
                    const name = input.name.replace('attribute_', '');
                    const value = input.value;
                    if (value) {
                        attrs[name] = value;
                    }
                });
                return attrs;
            }

            function findMatchingVariation(selectedAttrs) {
                return variations.find(v => {
                    return Object.entries(selectedAttrs).every(([key, val]) => {
                        return v.attributes[`attribute_${key}`] === val;
                    });
                });
            }

            function updateVariation() {
                const selectedAttrs = getSelectedAttributes();
                const match = findMatchingVariation(selectedAttrs);

                const addToCartBtn = form.querySelector('.add-to-cart');
                const outOfStockMsg = form.querySelector('.rm-out-of-stock-message');

                if (match) {
                    variationIdInput.value = match.variation_id;

                    if (match.price_html && priceDisplay) {
                        priceDisplay.innerHTML = match.price_html;
                    }

                    if (match.is_in_stock) {
                        addToCartBtn.disabled = false;
                        outOfStockMsg.style.display = 'none';
                    } else {
                        addToCartBtn.disabled = true;
                        outOfStockMsg.style.display = 'block';
                    }

                } else {
                    variationIdInput.value = '0';
                    addToCartBtn.disabled = true;
                    outOfStockMsg.style.display = 'none';
                }
            }


            // Handle option button clicks
            form.querySelectorAll('.rm-variation-option').forEach(btn => {
                btn.addEventListener('click', function () {
                    const attr = this.dataset.attribute;
                    const value = this.dataset.value;

                    // Visually mark selected
                    const group = this.closest('.rm-custom-variation-options');
                    group.querySelectorAll('.rm-variation-option').forEach(b => b.classList.remove('selected'));
                    this.classList.add('selected');

                    // Set hidden input
                    const input = form.querySelector(`[name="attribute_${attr}"]`);
                    if (input) {
                        input.value = value;
                    }

                    updateVariation();
                });
            });

            document.querySelectorAll('.qty-minus').forEach(btn => {
                btn.addEventListener('click', function () {
                    const input = this.nextElementSibling;
                    const value = parseInt(input.value, 10);
                    if (value > 1) input.value = value - 1;
                });
            });

            document.querySelectorAll('.qty-plus').forEach(btn => {
                btn.addEventListener('click', function () {
                    const input = this.previousElementSibling;
                    const value = parseInt(input.value, 10);
                    input.value = value + 1;
                });
            });

        });

    </script>

</div>
<?php get_footer(); ?>
