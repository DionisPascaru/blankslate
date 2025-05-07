<?php
add_action('after_setup_theme', 'blankslate_setup');
function blankslate_setup()
{
    load_theme_textdomain('blankslate', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('search-form', 'navigation-widgets'));
    add_theme_support('appearance-tools');
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
    global $content_width;
    if (!isset($content_width)) {
        $content_width = 1920;
    }
    register_nav_menus(array('left-menu' => esc_html__('Left Menu', 'blankslate')));
    register_nav_menus(array('right-menu' => esc_html__('Right Menu', 'blankslate')));
    register_nav_menus(array('languages-menu' => esc_html__('Languages Menu', 'blankslate')));
    register_nav_menus(array('mobile-menu' => esc_html__('Mobile Menu', 'blankslate')));
    register_nav_menus(array('shop-menu' => esc_html__('Shop Menu', 'blankslate')));
}

add_action('admin_notices', 'blankslate_notice');
function blankslate_notice()
{
    $user_id = get_current_user_id();
    $admin_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $param = (count($_GET)) ? '&' : '?';
    if (!get_user_meta($user_id, 'blankslate_notice_dismissed_11') && current_user_can('manage_options'))
        echo '<div class="notice notice-info"><p><a href="' . esc_url($admin_url), esc_html($param) . 'dismiss" class="alignright" style="text-decoration:none"><big>' . esc_html__('Ⓧ', 'blankslate') . '</big></a>' . wp_kses_post(__('<big><strong>🏆 Thank you for using BlankSlate!</strong></big>', 'blankslate')) . '<p>' . esc_html__('Powering over 10k websites! Buy me a sandwich! 🥪', 'blankslate') . '</p><a href="https://github.com/bhadaway/blankslate/issues/57" class="button-primary" target="_blank"><strong>' . esc_html__('How do you use BlankSlate?', 'blankslate') . '</strong></a> <a href="https://opencollective.com/blankslate" class="button-primary" style="background-color:green;border-color:green" target="_blank"><strong>' . esc_html__('Donate', 'blankslate') . '</strong></a> <a href="https://wordpress.org/support/theme/blankslate/reviews/#new-post" class="button-primary" style="background-color:purple;border-color:purple" target="_blank"><strong>' . esc_html__('Review', 'blankslate') . '</strong></a> <a href="https://github.com/bhadaway/blankslate/issues" class="button-primary" style="background-color:orange;border-color:orange" target="_blank"><strong>' . esc_html__('Support', 'blankslate') . '</strong></a></p></div>';
}

add_action('admin_init', 'blankslate_notice_dismissed');
function blankslate_notice_dismissed()
{
    $user_id = get_current_user_id();
    if (isset($_GET['dismiss']))
        add_user_meta($user_id, 'blankslate_notice_dismissed_11', 'true', true);
}

function blankslate_enqueue()
{
    $theme_version = '1.0';

    wp_enqueue_style('blankslate-style', get_template_directory_uri() . '/scss/main.css');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/libraries/bootstrap/dist/js/bootstrap.bundle.min.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('lottie-web-master', get_template_directory_uri() . '/libraries/lottie-web/build/player/lottie.min.js', array('jquery'), $theme_version, true);
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/libraries/slick-carousel/slick/slick.min.js', array('jquery'), $theme_version, true);

    wp_enqueue_script('rm-sliders', get_template_directory_uri() . '/js/sliders/rm-sliders.js', array('jquery'), $theme_version, true);
}
add_action('wp_enqueue_scripts', 'blankslate_enqueue');

function blankslate_footer()
{
    ?>
    <script>
        jQuery(document).ready(function ($) {
            var deviceAgent = navigator.userAgent.toLowerCase();
            if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
                $("html").addClass("ios");
                $("html").addClass("mobile");
            }
            if (deviceAgent.match(/(Android)/)) {
                $("html").addClass("android");
                $("html").addClass("mobile");
            }
            if (navigator.userAgent.search("MSIE") >= 0) {
                $("html").addClass("ie");
            } else if (navigator.userAgent.search("Chrome") >= 0) {
                $("html").addClass("chrome");
            } else if (navigator.userAgent.search("Firefox") >= 0) {
                $("html").addClass("firefox");
            } else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
                $("html").addClass("safari");
            } else if (navigator.userAgent.search("Opera") >= 0) {
                $("html").addClass("opera");
            }
        });
    </script>
    <?php
}
add_action('wp_footer', 'blankslate_footer');


function blankslate_document_title_separator($sep)
{
    $sep = esc_html('|');
    return $sep;
}
add_filter('document_title_separator', 'blankslate_document_title_separator');

function blankslate_title($title)
{
    if ($title == '') {
        return esc_html('...');
    } else {
        return wp_kses_post($title);
    }
}
add_filter('the_title', 'blankslate_title');

function blankslate_schema_type()
{
    $schema = 'https://schema.org/';
    if (is_single()) {
        $type = "Article";
    } elseif (is_author()) {
        $type = 'ProfilePage';
    } elseif (is_search()) {
        $type = 'SearchResultsPage';
    } else {
        $type = 'WebPage';
    }
    echo 'itemscope itemtype="' . esc_url($schema) . esc_attr($type) . '"';
}

add_filter('nav_menu_link_attributes', 'blankslate_schema_url', 10);
function blankslate_schema_url($atts)
{
    $atts['itemprop'] = 'url';
    return $atts;
}

if (!function_exists('blankslate_wp_body_open')) {
    function blankslate_wp_body_open()
    {
        do_action('wp_body_open');
    }
}
add_action('wp_body_open', 'blankslate_skip_link', 5);
function blankslate_skip_link()
{
    echo '<a href="#content" class="skip-link screen-reader-text">' . esc_html__('Skip to the content', 'blankslate') . '</a>';
}

add_filter('the_content_more_link', 'blankslate_read_more_link');
function blankslate_read_more_link()
{
    if (!is_admin()) {
        return ' <a href="' . esc_url(get_permalink()) . '" class="more-link">' . sprintf(__('...%s', 'blankslate'), '<span class="screen-reader-text">  ' . esc_html(get_the_title()) . '</span>') . '</a>';
    }
}

add_filter('excerpt_more', 'blankslate_excerpt_read_more_link');
function blankslate_excerpt_read_more_link($more)
{
    if (!is_admin()) {
        global $post;
        return ' <a href="' . esc_url(get_permalink($post->ID)) . '" class="more-link">' . sprintf(__('...%s', 'blankslate'), '<span class="screen-reader-text">  ' . esc_html(get_the_title()) . '</span>') . '</a>';
    }
}

add_filter('big_image_size_threshold', '__return_false');
add_filter('intermediate_image_sizes_advanced', 'blankslate_image_insert_override');
function blankslate_image_insert_override($sizes)
{
    unset($sizes['medium_large']);
    unset($sizes['1536x1536']);
    unset($sizes['2048x2048']);
    return $sizes;
}

add_action('widgets_init', 'blankslate_widgets_init');
function blankslate_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar Widget Area', 'blankslate'),
        'id' => 'primary-widget-area',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

add_action('wp_head', 'blankslate_pingback_header');
function blankslate_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">' . "\n", esc_url(get_bloginfo('pingback_url')));
    }
}

add_action('comment_form_before', 'blankslate_enqueue_comment_reply_script');
function blankslate_enqueue_comment_reply_script()
{
    if (get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

function blankslate_custom_pings($comment)
{
    ?>
    <li <?php comment_class(); ?>
            id="li-comment-<?php comment_ID(); ?>"><?php echo esc_url(comment_author_link()); ?></li>
    <?php
}

add_filter('get_comments_number', 'blankslate_comment_count', 0);
function blankslate_comment_count($count)
{
    if (!is_admin()) {
        global $id;
        $get_comments = get_comments('status=approve&post_id=' . $id);
        $comments_by_type = separate_comments($get_comments);
        return count($comments_by_type['comment']);
    } else {
        return $count;
    }
}

function theme_custom_logo_setup()
{
    add_theme_support('custom-logo', array(
        'height' => 200,
        'width' => 30,
        'flex-height' => true,
        'flex-width' => true,
    ));
}
add_action('after_setup_theme', 'theme_custom_logo_setup');

/**
 * Restrict staff-members URLS, if the plugin not used anymore, the method are redundant.
 */
function restrict_plugin_access() {
    if (strpos($_SERVER['REQUEST_URI'], '/staff-members/') !== false) {
        if (!is_user_logged_in() || !current_user_can('manage_options')) {
            global $wp_query;
            $wp_query->set_404();
            status_header(404);
            get_template_part(404); // Load the theme's 404.php template
            exit;
        }
    }
}
add_action('init', 'restrict_plugin_access');

/**
 * Fluent form filters for fields validation.
 *
 * - fluentform/validate_input_item_input_text
 * - fluentform/validate_input_item_phone
 * - fluentform/validate_input_item_textarea
 */
add_filter('fluentform/validate_input_item_input_text', function ($errorMessage, $field, $formData, $fields, $form) {
    $fieldName = $field['name'];

    if (isset($formData['names']) && is_array($formData['names'])) {
        if ($fieldName === 'names[first_name]') {
            $value = trim($formData['names']['first_name'] ?? '');
            if (strlen($value) < 5) {
                return 'First name must be at least 5 characters long.';
            }
        }

        if ($fieldName === 'names[last_name]') {
            $value = trim($formData['names']['last_name'] ?? '');
            if (strlen($value) < 5) {
                return 'Last name must be at least 5 characters long.';
            }
        }
    }

    return $errorMessage;
}, 10, 5);

add_filter('fluentform/validate_input_item_phone', function ($errorMessage, $field, $formData, $fields, $form) {
    $fieldName = $field['name'];

    if ($fieldName === 'phone') {
        $value = trim($formData['phone'] ?? '');
        if (!preg_match('/^\d{9,}$/', $value)) {
            return 'The phone number must have at least 10 digits.';
        }
    }

    return $errorMessage;
}, 10, 5);

add_filter('fluentform/validate_input_item_textarea', function ($errorMessage, $field, $formData, $fields, $form) {
    $fieldName = $field['name'];

    if ($fieldName === 'description') {
        $value = trim($formData['description'] ?? '');
        if (str_word_count($value) < 10) {
            return 'Please enter at least 10 words about yourself.';
        }
    }

    return $errorMessage;
}, 10, 5);

add_filter( 'woocommerce_variable_price_html', 'custom_variable_price_html', 10, 2 );
function custom_variable_price_html( $price, $product ) {
    $available_variations = $product->get_available_variations();

    if ( ! empty( $available_variations ) ) {
        $min_price_variation = min( array_column( $available_variations, 'display_price' ) );
        $formatted_price = wc_price( $min_price_variation );

        return $formatted_price;
    }

    return $price;
}
