<?php
/**
 * Loads the cohesion environment and template.
 *
 * @package cohesion
 */

if ( ! isset( $wp_did_header ) ) {

	$wp_did_header = true;

	// Load the cohesion library.
	require_once __DIR__ . '/wp-load.php';

	// Set up the cohesion query.
	wp();

	// Load the theme template.
	require_once ABSPATH . WPINC . '/template-loader.php';

}
