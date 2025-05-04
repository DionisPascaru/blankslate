<?php
/**
 * Template Name: Shop Home
 */

defined('ABSPATH') || exit;
get_header();
get_template_part('woocommerce/header');
?>

<div class="rm-shop-page">
    <div class="container">
        <div class="rm-page-view-info-breadcrumb">
            <?php woocommerce_breadcrumb(); ?>
        </div>

        <?php
        // Get all product categories
        $product_categories = get_terms(array(
            'taxonomy'   => 'product_cat',
            'hide_empty' => true,
            'parent'     => 0, // Only top-level categories
        ));

        var_dump($product_categories);

        if (!empty($product_categories)) :
            foreach ($product_categories as $category) :
                echo '<div class="rm-shop-category-block">';
                echo '<h2 class="rm-shop-category-title">' . esc_html($category->name) . '</h2>';

                // Query 4 products from each category
                $products = new WP_Query(array(
                    'post_type'      => 'product',
                    'posts_per_page' => 4,
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'product_cat',
                            'field'    => 'term_id',
                            'terms'    => $category->term_id,
                            'include_children' => true,
                        ),
                    ),
                ));

                if ($products->have_posts()) :
                    echo '<div class="rm-products-grid">';
                    while ($products->have_posts()) :
                        $products->the_post();
                        wc_get_template_part('content', 'product');
                    endwhile;
                    echo '</div>';
                    echo '<a class="rm-products-category-redirect" href="' . esc_url(get_term_link($category)) . '">mai multe <i class="icon-chevron-right"></i></a>';

                else :
                    echo '<p>' . __('No products found in this category.', 'textdomain') . '</p>';
                endif;

                wp_reset_postdata();

                echo '</div>';
            endforeach;
        else :
            echo '<p>' . __('No product categories found.', 'textdomain') . '</p>';
        endif;
        ?>

    </div>
</div>

<?php get_footer(); ?>
