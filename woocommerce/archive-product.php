<?php
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
        if (is_tax('product_cat')) :
            $term = get_queried_object();
            $category_id = $term->term_id;

            echo '<div class="rm-shop-category-title">' . esc_html($term->name) . '</div>';

            // Get subcategories of current category
            $subcategories = get_terms(array(
                'taxonomy'   => 'product_cat',
                'hide_empty' => false,
                'parent'     => $category_id,
            ));

            if (!empty($subcategories)) :
                ?>

                <div class="rm-product-actions">
                    <button class="rm-shop-primary-btn"
                            type="button"
                            data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                        <i class="icon-sliders"></i>Filter
                    </button>
                </div>

                <div class="rm-offcanvas offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Products filter:</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <form method="GET" class="rm-filter-form">
                            <div class="rm-filters">
                                <?php foreach ($subcategories as $subcategory) : ?>
                                    <label class="rm-filter-option">
                                        <input type="checkbox" name="subcats[]" value="<?php echo esc_attr($subcategory->term_id); ?>"
                                            <?php if (!empty($_GET['subcats']) && in_array($subcategory->term_id, (array) $_GET['subcats'])) echo 'checked'; ?>>
                                        <?php echo esc_html($subcategory->name); ?>
                                    </label>
                                <?php endforeach; ?>

                                <div class="rm-filters-actions">
                                    <a href="<?php echo esc_url( strtok($_SERVER["REQUEST_URI"], '?') ); ?>" class="rm-shop-secondary-btn">
                                        <?php esc_html_e('Reset', 'textdomain'); ?>
                                    </a>
                                    <button type="submit" class="rm-shop-primary-btn"><?php esc_html_e('apply', 'textdomain'); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <?php
            endif;

            // Set up query arguments
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
                'posts_per_page' => -1, // Show all products
                'tax_query'      => $tax_query,
            );

            $products = new WP_Query($args);

            if ($products->have_posts()) :
                echo '<div class="rm-products-grid">';
                while ($products->have_posts()) :
                    $products->the_post();
                    wc_get_template_part('content', 'product');
                endwhile;
                echo '</div>';
            else :
                echo '<p>' . __('No products found.', 'textdomain') . '</p>';
            endif;

            wp_reset_postdata();
        else :
            echo '<p>' . __('No category selected.', 'textdomain') . '</p>';
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>
