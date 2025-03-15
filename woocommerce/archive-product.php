<?php
defined('ABSPATH') || exit;
get_header();
get_template_part('woocommerce/header');
?>

<div class="rm-shop-page">
    <div class="container">
        <?php
        // Check if we are on a category page
        if (is_tax('product_cat')) {
            $term = get_queried_object();
            $category_id = $term->term_id;
            echo '<div class="rm-shop-category-title">' . esc_html($term->name) . '</div>';

            $products = new WP_Query(array(
                'post_type'      => 'product',
                'posts_per_page' => 4, // Show only 4 products per category
                'tax_query'      => array(
                    array(
                        'taxonomy' => 'product_cat',
                        'field'    => 'term_id',
                        'terms'    => $category_id,
                    ),
                ),
            ));

            if ($products->have_posts()) {
                echo '<div class="rm-products-grid">';
                while ($products->have_posts()) {
                    $products->the_post();
                    wc_get_template_part('content', 'product');
                }
                echo '</div>';
            } else {
                echo '<p>No products found in this category.</p>';
            }

            wp_reset_postdata();
        } else {
            // Show all categories and products (default behavior)
            $product_categories = get_terms(array(
                'taxonomy'   => 'product_cat',
                'hide_empty' => true,
            ));

            if (!empty($product_categories)) {
                foreach ($product_categories as $category) {
                    echo '<div class="rm-shop-category">';
                    echo '<div class="rm-shop-category-title">' . esc_html($category->name) . '</div>';

                    $products = new WP_Query(array(
                        'post_type'      => 'product',
                        'posts_per_page' => 4, // Show only 4 products per category
                        'tax_query'      => array(
                            array(
                                'taxonomy' => 'product_cat',
                                'field'    => 'term_id',
                                'terms'    => $category->term_id,
                            ),
                        ),
                    ));

                    if ($products->have_posts()) {
                        echo '<div class="rm-products-grid">';
                        while ($products->have_posts()) {
                            $products->the_post();
                            wc_get_template_part('content', 'product');
                        }
                        echo '</div>';
                    }
                    echo '</div>';

                    wp_reset_postdata();
                }
            }
        }
        ?>
    </div>
</div>

<?php get_footer(); ?>
