<?php
/**
 * Theme_Name functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Theme_Name
 */

/**
 * Helpers.
 */
require get_template_directory() . '/inc/helpers.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/template-enqueue.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
// require get_template_directory() . '/inc/template-classes.php';
// require get_template_directory() . '/inc/ajax/search.php';
// require get_template_directory() . '/inc/ajax/register.php';
// require get_template_directory() . '/inc/template-custom.php';
// require get_template_directory() . '/inc/template-includes.php';
// require get_template_directory() . '/inc/template-widgets.php';

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/woocommerce/woocommerce.php';
	require get_template_directory() . '/woocommerce/wc-template-functions.php';
	require get_template_directory() . '/woocommerce/wc-template-hooks.php';
	require get_template_directory() . '/woocommerce/wc-template-classes.php';
}

/**
 * Customizer.
 */
// require get_template_directory() . '/inc/customizer/customizer.php';