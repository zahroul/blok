<?php
/**
 * The theme functions
 *
 * @package blok
 */

// Add document title tag to HTML <head>.
add_theme_support( 'title-tag' );

// Add RSS feed links to HTML <head>.
add_theme_support( 'automatic-feed-links' );

/**
 * Enqueue the theme styles
 */
function blok_enqueue_styles() {
	wp_enqueue_style( 'blok-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'blok_enqueue_styles' );
