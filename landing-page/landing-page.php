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

<!--libraries scripts-->
<script src="<?php echo get_template_directory_uri(); ?>/node_modules/bootstrap/dist/js/bootstrap.min.js'"></script>
<script src="<?php echo get_template_directory_uri(); ?>/node_modules//lottie-web/build/player/lottie.min.js'"></script>
<script src="<?php echo get_template_directory_uri(); ?>/node_modules/jquery/dist/jquery.min.js'"></script>
<script src="<?php echo get_template_directory_uri(); ?>/node_modules/slick-carousel/slick/slick.min.js'"></script>

<!--custom scripts-->
<script src="<?php echo get_template_directory_uri(); ?>/js/timeline/rm-timeline.js'"></script>
<?php get_footer(); ?>
