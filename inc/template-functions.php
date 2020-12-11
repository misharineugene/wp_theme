<?php
/**
 * Theme_Name functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Theme_Name
 */

if ( ! function_exists( 'theme_slug_setup' ) ) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   */
  function theme_slug_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array() );
  }
endif;
add_action( 'after_setup_theme', 'theme_slug_setup' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function theme_slug_pingback_header() {
  if ( is_singular() && pings_open() ) {
    printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
  }
}
add_action( 'wp_head', 'theme_slug_pingback_header' );

// REMOVE EMOJI ICONS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

function theme_slug_remove_admin_login_header() {
  remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'theme_slug_remove_admin_login_header');

//Disable gutenberg style in Front
// function theme_slug_wp_deregister_styles() {
//   wp_dequeue_style( 'wp-block-library' );
//   wp_dequeue_style( 'wc-block-style' );
// }
// add_action( 'wp_print_styles', 'theme_slug_wp_deregister_styles', 100 );

// function theme_slug_menus() {

//   $locations = array(
//     'header'  => ( 'Меню в шапке' ),
//     'header-mobile'  => ( 'Меню в шапке (mobile)' ),
//     // 
//     'footer-company'  => ( 'Меню в подвале (Компания)' ),
//     'footer-information'  => ( 'Меню в подвале (Информация)' ),
//     'footer-help'  => ( 'Меню в подвале (Помощь)' ),
//   );

//   register_nav_menus( $locations );
// }

// add_action( 'init', 'theme_slug_menus' );

// /**
//  * Theme settings.
//  */
// if ( function_exists('acf_add_options_page') ) {
//   acf_add_options_page(array(
//     'page_title' 	=> 'Основные настройки сайта',
//     'menu_title'	=> 'Настройки сайта',
//     'menu_slug' 	=> 'theme-general-settings',
//     'capability'	=> 'manage_options',
//     'redirect'		=> false
//   ));
// }

// add_action('admin_menu', 'theme_slug_register_submenu_page');
// function theme_slug_register_submenu_page() {
// 	add_submenu_page( 
//     'edit.php?post_type=product',
//     'Страница подготовки импорта',
// 		'Подготовка импорта',
//     'manage_options',
// 		'admin.php?import=csv',
// 	);

// 	add_submenu_page( 
//     'edit.php?post_type=product',
//     'Страница импорта товаров',
// 		'Импорт товаров',
//     'manage_options',
// 		'edit.php?post_type=product&page=product_importer',
// 	);
// }