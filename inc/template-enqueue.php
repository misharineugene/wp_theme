<?php
/**
 * Enqueue scripts and styles.
 * 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Theme_Name
 */

/**
 * Enqueue styles.
 */
function theme_slug_styles() {
  wp_enqueue_style( 'theme_slug-style', get_stylesheet_uri() );
  wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/app.min.css', array( 'theme_slug-style' ), null, 'all' );
}
add_action( 'wp_enqueue_scripts', 'theme_slug_styles' );

/**
 * Enqueue scripts.
 */
function theme_slug_scripts() {
  wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/app.min.js', array('jquery'), '', true );
  // wp_enqueue_script( 'search', get_template_directory_uri() . '/inc/ajax/search.js', array('jquery'), '', true );

  // wp_localize_script('search', 'search', 
  //   array(
  //     'url' => admin_url('admin-ajax.php'),
  //     'nonce' => wp_create_nonce('search-nonce'),
  //   )
  // ); 

  // if ( is_home() || is_front_page() ) {
  //   $data = "";
  //   wp_add_inline_script( 'main', $data );
  // }
  
}
add_action( 'wp_enqueue_scripts', 'theme_slug_scripts' );

