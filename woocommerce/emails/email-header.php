<?php
/**
 * Email Header
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-header.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 9.6.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?php echo get_bloginfo('name', 'display'); ?></title>
    <style>
        .rm-email-template-header-image {
            background-color: #000;
            color: #fff;
            padding-top: 36px;
        }
        .rm-email-template-container {
            background-color: #000;
            border: none!important;
        }
        .rm-email-template-container-title h1 {
            color: #fff!important;
            text-align: center;
            font-size: 24px;
            font-weight: 600;
        }

        h1, h2, h3, p, a {
            font-family: 'Montserrat', Arial, Helvetica, sans-serif;
        }

        thead {
            background-color: #000;
        }
        thead th {
            color: #fff!important;
        }

        h2, h3 {
            color: #C80000!important;
        }

        p {
            color: #000000;
        }

        .footer {
            color: #B3B3B3;
            font-size: 12px;
        }

        a {
            color: #004DFF!important;
        }

        .button {
            background-color: #C80000 !important;
            color: #fff !important;
            padding: 12px 24px;
            border-radius: 5px;
            display: inline-block;
        }
    </style>
</head>
<body <?php echo is_rtl() ? 'rightmargin' : 'leftmargin'; ?>="0" marginwidth="0" topmargin="0" marginheight="0" offset="
0" class="rm-email-template">
<table width="100%" id="outer_wrapper">
    <tr>
        <td><!-- Deliberately empty to support consistent sizing and layout across multiple email clients. --></td>
        <td width="600">
            <div id="wrapper" dir="<?php echo is_rtl() ? 'rtl' : 'ltr'; ?>">
                <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
                    <tr>
                        <td align="center" valign="top">
                            <div id="template_header_image" class="rm-email-template-header-image">
                                <?php
                                $img = get_option('woocommerce_email_header_image');
                                /**
                                 * This filter is documented in templates/emails/email-styles.php
                                 *
                                 * @since 9.6.0
                                 */
                                if (apply_filters('woocommerce_is_email_preview', false)) {
                                    $img_transient = get_transient('woocommerce_email_header_image');
                                    $img = false !== $img_transient ? $img_transient : $img;
                                }

                                if ($img) {
                                    echo '<img src="' . esc_url($img) . '" alt="' . esc_attr(get_bloginfo('name', 'display')) . '" />';
                                }
                                ?>
                            </div>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" id="template_container" class="rm-email-template-container">
                                <tr>
                                    <td align="center" valign="top">
                                        <!-- Header -->
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                               id="template_header" class="rm-email-template-container-title">
                                            <tr>
                                                <td id="header_wrapper">
                                                    <h1><?php echo esc_html($email_heading); ?></h1>
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- End Header -->
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" valign="top">
                                        <!-- Body -->
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                               id="template_body">
                                            <tr>
                                                <td valign="top" id="body_content">
                                                    <!-- Content -->
                                                    <table border="0" cellpadding="20" cellspacing="0" width="100%">
                                                        <tr>
                                                            <td valign="top">
                                                                <div id="body_content_inner">
