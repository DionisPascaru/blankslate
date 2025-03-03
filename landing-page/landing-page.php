<?php
    /* Template Name: Landing Page */
    get_header();
?>

<?php get_template_part('landing-page/section/banner'); ?>
<?php get_template_part('landing-page/section/page-slider'); ?>
<?php get_template_part('landing-page/section/services'); ?>
<?php get_template_part('landing-page/section/subsidiaries'); ?>
<?php get_template_part('landing-page/section/timeline'); ?>
<?php get_template_part('landing-page/section/franchise'); ?>
<?php get_template_part('landing-page/section/career'); ?>
<?php get_template_part('landing-page/section/contacts'); ?>
<?php get_template_part('landing-page/section/reviews'); ?>
<?php get_template_part('landing-page/section/review-form'); ?>
<?php get_template_part('landing-page/section/fixed-buttons'); ?>

<!--libraries scripts-->
<script src="<?php echo get_template_directory_uri(); ?>/node_modules/bootstrap/dist/js/bootstrap.min.js'"></script>
<script src="<?php echo get_template_directory_uri(); ?>/node_modules//lottie-web/build/player/lottie.min.js'"></script>
<script src="<?php echo get_template_directory_uri(); ?>/node_modules/jquery/dist/jquery.min.js'"></script>
<script src="<?php echo get_template_directory_uri(); ?>/node_modules/slick-carousel/slick/slick.min.js'"></script>

<!--custom scripts-->
<script src="<?php echo get_template_directory_uri(); ?>/js/timeline/rm-timeline.js'"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/reviews/rm-reviews.js'"></script>
<?php get_footer(); ?>
