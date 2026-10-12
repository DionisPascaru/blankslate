<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">

    <meta property="og:title" content="REALMEN – Barbershop Chișinău"/>
    <meta property="og:description" content="Barbershop Chișinău — Creat de bărbați adevărați, pentru bărbați adevărați. Din 2017 rămânem fideli miusiunii noastre!"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://realmen.md/"/>
    <meta property="og:site_name" content="REALMEN Barbershop"/>
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/opengraph-logo.jpg"/>
    <meta property="og:image:width" content="768"/>
    <meta property="og:image:height" content="512"/>
    <meta property="og:image:alt" content="REALMEN LOGO"/>
    <meta property="og:locale" content="ro_RO"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="REALMEN – Barbershop Chișinău"/>
    <meta name="twitter:description" content="Barbershop Chișinău — Creat de bărbați adevărați, pentru bărbați adevărați. Din 2017 rămânem fideli miusiunii noastre!"/>
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/opengraph-logo.jpg"/>

    <?php if (is_front_page()) : ?>
        <meta name="description" content="Barbershop Chișinău — Creat de bărbați adevărați, pentru bărbați adevărați. Din 2017 rămânem fideli miusiunii noastre!">
    <?php endif; ?>

    <?php wp_head(); ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MFWJZCN8');</script>
    <!-- End Google Tag Manager -->
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MFWJZCN8"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="wrapper" class="hfeed">
    <div id="container">
        <main id="content" role="main">