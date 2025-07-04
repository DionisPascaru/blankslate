<?php ?>
<header id="header">
    <style>
        section {
            padding: 50px 0;
        }
    </style>
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
                                <a href="https://www.facebook.com/realmen.md"><i class="icon-facebook"></i></a>
                            </div>
                            <div class="rm-social-media-item">
                                <a href="https://www.instagram.com/realmen.md/"><i class="icon-instagram"></i></a>
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
<!-- Meta Pixel Code -->
<script>
    !function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2663597090505137');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2663597090505137&ev=PageView&noscript=1"/></noscript>
<!-- End Meta Pixel Code -->
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
