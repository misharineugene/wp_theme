<?php
/**
 * Theme_Name Ajax
 *
 * @package Theme_Name
 */

// Seach
add_action( 'wp_ajax_search', 'theme_slug_search' );
add_action( 'wp_ajax_nopriv_search', 'theme_slug_search' );
function theme_slug_search() {
	if ( ! wp_verify_nonce( $_POST['nonce'], 'search-nonce' ) ) {
		wp_die( 'Что надо?!' );
	}

	$text = isset($_POST['text']) ? $_POST['text'] : '';

	ob_start();

	echo 'Что-то';

	$data['search'] = ob_get_clean();

	wp_send_json( $data );
	wp_die();
}