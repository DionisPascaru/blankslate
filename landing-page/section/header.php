<?php ?>
<header id="header">
    <!-- desktop menu -->
    <nav id="menu" class="rm-navbar rm-desktop-menu rm-menu-gradient">
        <div class="rm-desktop-menu-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-1 rm-nav-column">
                        <?php wp_nav_menu(array('theme_location' => 'languages-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>')); ?>
                    </div>
                    <div class="col-4 rm-nav-column rm-nav-column-left">
                        <?php wp_nav_menu(array('theme_location' => 'left-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>')); ?>
                    </div>
                    <div class="col-2 rm-nav-column">
                        <?php the_custom_logo(); ?>
                    </div>
                    <div class="col-4 rm-nav-column rm-nav-column-right">
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
    <nav id="rmMobileMenu" class="rm-navbar rm-mobile-menu">
        <div class="rm-mobile-menu-fixed rm-menu-gradient">
            <div class="rm-mobile-menu-bar">
                <div>
                    <?php the_custom_logo(); ?>
                </div>
                <div class="rm-navbar-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent"
                     aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
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
</header>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let navbarItems = document.querySelectorAll(".menu-mobilemenu-container .menu .menu-item");
        let bsCollapse = document.querySelector(".rm-mobile-menu .collapse");

        navbarItems.forEach(function (item) {
            item.addEventListener("click", function () {
                if (bsCollapse.classList.contains("show")) {
                    let bsCollapseInstance = new bootstrap.Collapse(bsCollapse, { toggle: true });
                    bsCollapseInstance.hide();
                }
            });
        });
    });
</script>
