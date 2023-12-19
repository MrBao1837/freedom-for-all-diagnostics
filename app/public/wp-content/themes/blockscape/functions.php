<?php

if ( ! defined( 'BLOCKSCAPE_VERSION' ) ) {
	define( 'BLOCKSCAPE_VERSION', wp_get_theme()->get( 'Version' ) );
}

if ( ! function_exists( 'blockscape_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Blockscape 1.0
	 *
	 * @return void
	 */
	function blockscape_support() {

		$suffix   = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

        add_theme_support( 'align-wide' );
		//responsive iframes
		add_theme_support( 'responsive-embeds' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles and fonts.
		add_editor_style(
			array(
				'./assets/css/editor-style' . $suffix . '.css'
			)
		);

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );
	}
endif;
add_action( 'after_setup_theme', 'blockscape_support' );

/**
 * Extras
*/
require get_template_directory() . '/inc/extras.php';

/**
 * Extras
*/
require get_template_directory() . '/inc/custom-functions.php';