<?php
/**
 * Shop breadcrumb
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! empty( $breadcrumb ) ) {

	echo $wrap_before;

    // Remove home page from breadcrumb
    array_shift( $breadcrumb );

	foreach ( $breadcrumb as $key => $crumb ) {

		echo $before;

		if ( ! empty( $crumb[1] ) && sizeof( $breadcrumb ) !== $key + 1 ) {
			echo '<a href="' . esc_url( $crumb[1] ) . '">' . esc_html( $crumb[0] ) . '</a>';
		} else {
			echo '<span>' . esc_html( $crumb[0] ) . '</span>';
		}

		echo $after;
	}

	echo $wrap_after;

}
