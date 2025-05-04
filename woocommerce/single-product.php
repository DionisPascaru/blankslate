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

							<div id="rmProductViewGallery" class="rm-product-view-gallery">
								<?php
								global $product;
								$main_image_id = $product->get_image_id();
								$attachment_ids = $product->get_gallery_image_ids();

								$gallery_ids = array_filter(array_merge([$main_image_id], $attachment_ids));

								foreach ($gallery_ids as $gallery_id) {
									echo '<div class="rm-product-view-gallery-slider">';
									echo wp_get_attachment_image($gallery_id, 'large');
									echo '</div>';
								}

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
                            <?php woocommerce_template_single_add_to_cart(); ?>
                        </div>
						<div class="rm-product-view-info-description">
							<?php woocommerce_template_single_excerpt(); ?>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
</div>
<?php get_footer(); ?>
