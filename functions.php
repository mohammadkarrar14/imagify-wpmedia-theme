<?php

define( 'THEME_NAME', 'imagify-wpmedia' );

if ( ! function_exists( 'imagify_wpmedia_theme_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since My theme name 1.0
	 *
	 * @return void
	 */
	function imagify_wpmedia_theme_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;
add_action( 'after_setup_theme', 'imagify_wpmedia_theme_support' );


/*-----------------------------------------------------------
Enqueue Styles
------------------------------------------------------------*/

if ( ! function_exists( 'imagify_wpmedia_styles' ) ) :

  function imagify_wpmedia_styles() {
    // Register Stylesheet
    wp_enqueue_style( THEME_NAME . '-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
  }

endif;

add_action( 'wp_enqueue_scripts', 'imagify_wpmedia_styles' );

