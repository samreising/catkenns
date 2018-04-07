<?php
/**
 * Enqueue Styles
 */

function my_theme_enqueue_styles() {

    $parent_style = 'twentyseventeen-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/**
 * Add excerpt field to pages
 */
add_post_type_support( 'page', 'excerpt' );

/**
 * Enqueue Fonts
 */
function wpb_add_google_fonts() {

	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Raleway', false ); 
	}

	add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );