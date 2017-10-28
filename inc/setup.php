<?php
/**
 * Bootswatch setup.
 *
 * @package Bootswatch
 */

add_action( 'after_setup_theme', function() {

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'customize-selective-refresh-widgets' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( [
		'primary' => esc_html__( 'Primary Menu', 'bootswatch' ),
	] );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', [
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	] );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', [
		'aside',
		'image',
		'video',
		'quote',
		'link',
	] );
} );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
add_action( 'after_setup_theme', function() {
	$GLOBALS['content_width'] = ! is_active_sidebar( 'sidebar' )
		? 1140
		: 750
	;
}, 0 );
