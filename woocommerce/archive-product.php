<?php
defined('ABSPATH') || exit;
get_header();
get_template_part('woocommerce/header');
?>

<div class="rm-shop-page">
    <div class="container">
        <?php if (is_shop()) : ?>
            <?php
            // === START: Shop Home layout ===
            $product_categories = get_terms(array(
                'taxonomy'   => 'product_cat',
                'hide_empty' => true,
                'parent'     => 0,
            ));

            if (!empty($product_categories)) :
                foreach ($product_categories as $category) :
                    echo '<div class="rm-shop-category-block">';
                    echo '<h2 class="rm-shop-category-title">' . esc_html($category->name) . '</h2>';

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

                    $gridCategoryClass = 'rm-shop-products-grid-' . $category->slug;

                    if ($products->have_posts()) :
                        echo '<div class="rm-products-grid ' . $gridCategoryClass . '">';
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

        <?php elseif (is_product_category()) : ?>
            <div class="rm-page-view-info-breadcrumb">
                <?php woocommerce_breadcrumb(); ?>
            </div>

            <?php
            $term = get_queried_object();
            $category_id = $term->term_id;

            echo '<div class="rm-shop-category-title">' . esc_html($term->name) . '</div>';

            $subcategories = get_terms(array(
                'taxonomy'   => 'product_cat',
                'hide_empty' => false,
                'parent'     => $category_id,
            ));

            // Layout container
            echo '<div class="rm-shop-category-layout">';

            // Sidebar filter
            echo '<aside class="rm-products-filter">';
            if (!empty($subcategories)) : ?>
                <div class="rm-products-filter-title">
                    <i class="icon-sliders"></i>
                    Filtru
                </div>
                <form method="GET" class="rm-filter-form">
                    <div class="rm-filters">
                        <div class="rm-filter-options">
                            <?php foreach ($subcategories as $subcategory) : ?>
                                <label class="rm-filter-option">
                                    <input type="checkbox" name="subcats[]" value="<?php echo esc_attr($subcategory->term_id); ?>"
                                        <?php if (!empty($_GET['subcats']) && in_array($subcategory->term_id, (array) $_GET['subcats'])) echo 'checked'; ?>>
                                    <?php echo esc_html($subcategory->name); ?>
                                </label>
                            <?php endforeach; ?>
                        </div>

                        <div class="rm-filters-actions">
                            <a href="<?php echo esc_url(strtok($_SERVER["REQUEST_URI"], '?')); ?>" class="rm-shop-secondary-btn">
                                <?php esc_html_e('Resetează', 'textdomain'); ?>
                            </a>
                            <button type="submit" class="rm-shop-primary-btn"><?php esc_html_e('Aplică', 'textdomain'); ?></button>
                        </div>
                    </div>
                </form>
            <?php
            endif;
            echo '</aside>';

            $gridCategoryClass = 'rm-products-grid-' . $term->slug;

            // Product grid
            echo '<div class="rm-products-grid ' . $gridCategoryClass . '">';

            $tax_query = array(
                array(
                    'taxonomy' => 'product_cat',
                    'field'    => 'term_id',
                    'terms'    => !empty($_GET['subcats']) ? array_map('intval', $_GET['subcats']) : array($category_id),
                    'include_children' => true,
                ),
            );

            $args = array(
                'post_type'      => 'product',
                'posts_per_page' => -1,
                'tax_query'      => $tax_query,
            );

            $products = new WP_Query($args);

            if ($products->have_posts()) :
                while ($products->have_posts()) :
                    $products->the_post();
                    wc_get_template_part('content', 'product');
                endwhile;
            else :
                echo '<p>' . __('No products found.', 'textdomain') . '</p>';
            endif;

            wp_reset_postdata();

            echo '</div>'; // end .rm-products-grid
            echo '</div>'; // end .rm-shop-category-layout
            ?>

        <?php else : ?>
            <p><?php esc_html_e('No category selected.', 'textdomain'); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
