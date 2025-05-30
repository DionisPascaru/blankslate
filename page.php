<?php
get_header();
get_template_part('woocommerce/header');
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="rm-entry-content container entry-content rm-entry-content" itemprop="mainContentOfPage">
            <?php if (has_post_thumbnail()) {
                the_post_thumbnail('full', array('itemprop' => 'image'));
            } ?>
            <?php the_content(); ?>
            <div class="entry-links"><?php wp_link_pages(); ?></div>
        </div>
    </article>
    <?php if (comments_open() && !post_password_required()) {
        comments_template('', true);
    } ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>