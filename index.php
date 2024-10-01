<?php
/**
 * Front to the cohesion application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells cohesion to load the theme.
 *
 * @package cohesion
 */

/**
 * Tells cohesion to load the cohesion theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the cohesion Environment and Template */
require __DIR__ . '/wp-blog-header.php';
