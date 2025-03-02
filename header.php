<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/node_modules/bootstrap/dist/css/bootstrap.min.css'" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/node_modules/bootstrap-icons/font/bootstrap-icons.min.css'" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/node_modules/slick-carousel/slick/slick.css'" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/node_modules/slick-carousel/slick/slick-theme.css'" />
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
    <header id="header">
        <!-- desktop menu -->
        <nav id="menu" class="rm-navbar rm-desktop-menu rm-menu-gradient">
            <div class="rm-desktop-menu-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-1 rm-nav-column">
                            <?php wp_nav_menu(array('theme_location' => 'languages-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>')); ?>
                        </div>
                        <div class="col-3 rm-nav-column">
                            <?php wp_nav_menu(array('theme_location' => 'left-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>')); ?>
                        </div>
                        <div class="col-4 rm-nav-column">
                            <?php the_custom_logo(); ?>
                        </div>
                        <div class="col-3 rm-nav-column">
                            <?php wp_nav_menu(array('theme_location' => 'right-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>')); ?>
                        </div>
                        <!-- social media-->
                        <div class="col-1 rm-nav-column">
                            <div class="rm-social-media">
                                <div class="rm-social-media-item">
                                    <i class="icon-facebook"></i>
                                </div>
                                <div class="rm-social-media-item">
                                    <i class="icon-instagram"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- mobile menu -->
        <nav class="rm-navbar rm-mobile-menu rm-menu-gradient">
            <div class="rm-mobile-menu-bar">
                <div>
                    <?php the_custom_logo(); ?>
                </div>
                <div class="rm-navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent"
                     aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list"></i>
                </div>
            </div>
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="rm-nav-collapse">
                    <div class="rm-nav-mobile-row">
                        <?php wp_nav_menu(array('theme_location' => 'languages-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>')); ?>
                    </div>
                    <div class="rm-nav-mobile-column">
                        <?php wp_nav_menu(array('theme_location' => 'mobile-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>')); ?>
                    </div>
                    <!-- social media-->
                    <div class="rm-nav-mobile-row">
                        <div class="rm-social-media">
                            <div class="rm-social-media-item">
                                <i class="bi bi-facebook"></i>
                            </div>
                            <div class="rm-social-media-item">
                                <i class="bi bi-instagram"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div id="container">
        <main id="content" role="main">