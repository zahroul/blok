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

/**
 * Modify the excerpt more's string
 *
 * @return string An ellipsis.
 */
function blok_excerpt_more() {
	return ' &hellip; ';
}
add_filter( 'excerpt_more', 'blok_excerpt_more' );

/**
 * Print HTML with the current post meta's publication time and author
 */
function blok_post_meta() {
	printf(
		'<div class="entry-meta">Posted on %1$s by %2$s</div>',
		sprintf(
			'<time datetime="%1$s">%2$s</time>',
			esc_attr( get_the_date( 'c' ) ),
			esc_attr( get_the_date() )
		),
		esc_attr( get_the_author() )
	);
}

/**
 * Print HTML with the site copyright notice
 */
function blok_copyright_notice() {
	printf(
		'<p>&copy; %1$s %2$s</p>',
		esc_attr( get_the_date( 'Y' ) ),
		esc_attr( get_bloginfo( 'name' ) )
	);
}
