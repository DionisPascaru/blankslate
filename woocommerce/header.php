<?php ?>
<header id="header">
    <!-- shop desktop menu -->
    <nav id="menu" class="rm-shop-navbar rm-shop-desktop-menu">
        <div class="rm-shop-desktop-menu-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-2 rm-shop-nav-column">
                        <?php the_custom_logo(); ?>
                    </div>
                    <div class="col-8 rm-shop-nav-column">
                        <?php wp_nav_menu(array('theme_location' => 'shop-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>')); ?>
                    </div>
                    <div class="col-2 rm-shop-nav-column">
                        <?php wp_nav_menu(array('theme_location' => 'languages-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>')); ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- shop mobile menu -->
    <nav id="rmShopMobileMenu" class="rm-shop-navbar rm-shop-mobile-menu">
        <div class="rm-shop-navbar-fixed">
            <div class="rm-shop-mobile-menu-bar">
                <div>
                    <?php the_custom_logo(); ?>
                </div>
                <div class="rm-navbar-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#shopNavbarToggle"
                     aria-controls="shopNavbarToggle" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="collapse" id="shopNavbarToggle">
                <div class="rm-shop-nav-collapse">
                    <div class="rm-shop-nav-mobile-row">
                        <?php wp_nav_menu(array('theme_location' => 'languages-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>')); ?>
                    </div>
                    <div class="rm-shop-nav-mobile-column">
                        <?php wp_nav_menu(array('theme_location' => 'shop-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>')); ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<div class="rm-fixed-buttons">
    <div class="container">
        <div class="rm-fixed-buttons-items">
            <div class="rm-fixed-button rm-fixed-button-left">
                <a href="<?php echo home_url(); ?>" type="button" class="rm-fixed-btn">
                    <i class="icon-home"></i>
                </a>
            </div>
            <div class="rm-fixed-button rm-fixed-button-right">
                <a href="<?php echo wc_get_cart_url(); ?>" type="button" class="rm-fixed-btn">
                    <i class="icon-shopping-bag"></i>
                    <div class="rm-fixed-button-badge"><?php echo WC()->cart->get_cart_contents_count(); ?></div>
                </a>
            </div>
        </div>
    </div>
</div>

