<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Mystery Website
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function mystery_website_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'mystery_website_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function mystery_website_jetpack_setup
add_action( 'after_setup_theme', 'mystery_website_jetpack_setup' );

function mystery_website_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function mystery_website_infinite_scroll_render