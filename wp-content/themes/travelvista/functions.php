<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package travelvista
 * @since 1.0.0
 */

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */

if (! function_exists('travelvista_support')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */

	function travelvista_support()
	{

		add_editor_style(get_template_directory_uri() . '/assets/css/editor.css');

		load_theme_textdomain('travelvista', get_template_directory() . '/languages');

		// Add support for block styles.
		add_theme_support('wp-block-styles');

		// Add support for post thumbnails
		add_theme_support('post-thumbnails');
	}

endif;
add_action('after_setup_theme', 'travelvista_support');

function travelvista_styles()
{
	wp_enqueue_style(
		'travelvista-style',
		get_stylesheet_uri(),
		[],
		wp_get_theme()->get('Version')
	);

	wp_enqueue_style(
		'travelvista-font-awesome',
		get_template_directory_uri() . '/assets/css/font-awesome/css/all.css',
		[],
		wp_get_theme()->get('Version')
	);

	wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'travelvista_styles');

// admin style
function travelvista_admin_styles()
{
	wp_enqueue_style(
		'travelvista-admin-style',
		get_template_directory_uri() . '/assets/css/theme-info.css',
		[],
		wp_get_theme()->get('Version')
	);
}
add_action('admin_enqueue_scripts', 'travelvista_admin_styles');

// enqueue dashicons
add_action('enqueue_block_assets', function (): void {
	wp_enqueue_style('dashicons');
});

function travelvista_excerpt_length($length)
{

	$excerpt_length = 20;
	if (is_admin()) return $length;
	return $excerpt_length;
}
add_filter('excerpt_length', 'travelvista_excerpt_length');


// add block patterns
require get_template_directory() . '/inc/block-patterns.php';


// admin Info
require get_template_directory() . '/class/admin-info.php';

/**
 * Register block styles.
 */

if (! function_exists('travelvista_block_styles')) :
	/**
	 * Register custom block styles
	 *
	 * @since travelvistae
	 * @return void
	 */
	function travelvista_block_styles()
	{

		register_block_style(
			'core/paragraph',
			array(
				'name'         => 'admin-icon',
				'label'        => __('Admin Icon', 'travelvista'),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-admin-icon:before {
					content: "\f110";
					font-family: "dashicons";
				}
				.is-style-admin-icon span{
					display: none;
				}',
			)
		);
	}
endif;

add_action('init', 'travelvista_block_styles');
