<?php
/**
 * @package Make Child
 */

/**
 * The theme version.
 */
define( 'TTFMAKE_CHILD_VERSION', '1.1.0' );

/**
 * Turn off the parent theme styles.
 *
 * If you would like to use this child theme to style Make from scratch, rather
 * than simply overriding specific style rules, simply remove the '//' from the
 * 'add_filter' line below. This will tell the theme not to enqueue the parent
 * stylesheet along with the child one.
 */
//add_filter( 'make_enqueue_parent_stylesheet', '__return_false' );

/**
 * Add your custom theme functions here.
 */


function wpb_adding_styles() {
	wp_enqueue_style( 'wmcr_bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
	wp_enqueue_style( 'wmcr_bootstrap_css_theme', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css' );
	wp_enqueue_script( 'wmcr_bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array( 'jquery' ) );
}
 
add_action( 'wp_enqueue_scripts', 'wpb_adding_styles' );

// Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');
