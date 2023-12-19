<?php

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function blockscape_register_block_styles(){
	register_block_style(
		'core/button',
		array(
			'name'  => 'bs-button-1',
			'label' => esc_html__('Button BG Primary', 'blockscape'),
		)
	);
	register_block_style(
		'core/button',
		array(
			'name'  => 'bs-button-2',
			'label' => esc_html__('Button BG White', 'blockscape'),
		)
	);
	register_block_style(
		'core/button',
		array(
			'name'  => 'bs-button-3',
			'label' => esc_html__('Button Outline', 'blockscape'),
		)
	);
	register_block_style(
		'core/button',
		array(
			'name'  => 'blockscape-button-icon-after',
			'label' => esc_html__('Button Style Icon After', 'blockscape'),
		)
	);

	register_block_style(
		'core/post-author',
		array(
			'name'  => 'img-small',
			'label' => __('Small Image', 'blockscape'),
		)
	);
	register_block_style(
		'core/post-author',
		array(
			'name'  => 'small-font',
			'label' => __('Small Font', 'blockscape'),
		)
	);
	register_block_style(
		'core/post-author',
		array(
			'name'  => 'large-font',
			'label' => __('Large Font', 'blockscape'),
		)
	);
	register_block_style(
		'core/post-excerpt',
		array(
			'name'  => 'show-two-lines',
			'label' => __('Show two lines', 'blockscape'),
		)
	);
	register_block_style(
		'core/post-excerpt',
		array(
			'name'  => 'show-three-lines',
			'label' => __('Show three lines', 'blockscape'),
		)
	);
	register_block_style(
		'core/group',
		array(
			'name'  => 'services-bg-hover',
			'label' => __('Services Background Hover', 'blockscape'),
		)
	);

	register_block_style(
		'core/group',
		array(
			'name'  => 'box-shadow-one',
			'label' => __('Box Shadow One', 'blockscape'),
		)
	);
	register_block_style(
		'core/group',
		array(
			'name'  => 'hover-animation',
			'label' => __('Hover Animation', 'blockscape'),
		)
	);
	register_block_style(
		'core/post-template',
		array(
			'name'  => 'hover-animation',
			'label' => __('Hover Animation', 'blockscape'),
		)
	);
	register_block_style(
		'core/columns',
		array(
			'name'  => 'box-shadow-two',
			'label' => __('Box Shadow Two', 'blockscape'),
		)
	);

	register_block_style(
		'core/columns',
		array(
			'name'  => 'mob-2-cols',
			'label' => __('Mob 2 Col', 'blockscape'),
		)
	);

	register_block_style(
		'core/columns',
		array(
			'name'  => 'mob-3-cols',
			'label' => __('Mob 3 Col', 'blockscape'),
		)
	);
	register_block_style(
		'core/column',
		array(
			'name'  => 'justify-right',
			'label' => __('Mobile Justify Right', 'blockscape'),
		)
	);
	register_block_style(
		'core/column',
		array(
			'name'  => 'justify-left',
			'label' => __('Mobile Justify Left', 'blockscape'),
		)
	);
	register_block_style(
		'core/column',
		array(
			'name'  => 'hide-mb',
			'label' => __('Hide in Mobile', 'blockscape'),
		)
	);
	register_block_style(
		'core/buttons',
		array(
			'name'  => 'justify-right',
			'label' => __('Mobile Justify Right', 'blockscape'),
		)
	);
	register_block_style(
		'core/buttons',
		array(
			'name'  => 'justify-left',
			'label' => __('Mobile Justify Left', 'blockscape'),
		)
	);
	register_block_style(
		'core/navigation',
		array(
			'name'  => 'justify-right',
			'label' => __('Mobile Justify Right', 'blockscape'),
		)
	);
	register_block_style(
		'core/navigation',
		array(
			'name'  => 'justify-left',
			'label' => __('Mobile Justify Left', 'blockscape'),
		)
	);

	register_block_style(
		'core/list',
		array(
			'name'  => 'nounderline',
			'label' => __('Unstyled view', 'blockscape'),
		)
	);

	register_block_style(
		'core/social-links',
		array(
			'name'  => 'social-square',
			'label' => __('Square Shape', 'blockscape'),
		)
	);

	register_block_style(
		'core/post-terms',
		array(
			'name'  => 'bg-color-terms',
			'label' => __('With Background Color', 'blockscape'),
		)
	);

	register_block_style(
		'core/spacer',
		array(
			'name'  => 'has-mb-20',
			'label' => __('Mob Gap-20px', 'blockscape'),
		)
	);

	register_block_style(
		'core/spacer',
		array(
			'name'  => 'has-mb-30',
			'label' => __('Mob Gap-30px', 'blockscape'),
		)
	);

	register_block_style(
		'core/spacer',
		array(
			'name'  => 'has-mb-40',
			'label' => __('Mob Gap-40px', 'blockscape'),
		)
	);

	register_block_style(
		'core/spacer',
		array(
			'name'  => 'has-mb-50',
			'label' => __('Mob Gap-50px', 'blockscape'),
		)
	);

	register_block_style(
		'core/media-text',
		array(
			'name'  => 'no-padding',
			'label' => __('Remove padding', 'blockscape'),
		)
	);

	/**
	 * Pattern Category Type Register.
	 */
	if ( function_exists( 'register_block_pattern_category_type' ) ) {
		register_block_pattern_category_type( 'blockscape', array( 'label' => __( 'Blockscape', 'blockscape' ) ) );
	}

	/**
	 * Add Block Pattern Category.
	 */
	$pattern_categories = array(
		'blockscape-banner'  => array(
			'label'         => __( 'Blockscape Banner', 'blockscape' ),
			'categoryTypes' => array( 'blockscape' ),
		),
		'blockscape-clients' => array(
			'label'         => __( 'Blockscape Clients', 'blockscape' ),
			'categoryTypes' => array( 'blockscape' ),
		),
		'blockscape-service' => array(
			'label'         => __( 'Blockscape Services', 'blockscape' ),
			'categoryTypes' => array( 'blockscape' ),
		),
		'blockscape-about' => array(
			'label'         => __( 'Blockscape About', 'blockscape' ),
			'categoryTypes' => array( 'blockscape' ),
		),
		'blockscape-cta' => array(
			'label'         => __( 'Blockscape CTA', 'blockscape' ),
			'categoryTypes' => array( 'blockscape' ),
		),
		'blockscape-counter' => array(
			'label'         => __( 'Blockscape Counter', 'blockscape' ),
			'categoryTypes' => array( 'blockscape' ),
		),
		'blockscape-team' => array(
			'label'         => __( 'Blockscape Team', 'blockscape' ),
			'categoryTypes' => array( 'blockscape' ),
		),
		'blockscape-blog' => array(
			'label'         => __( 'Blockscape Blog', 'blockscape' ),
			'categoryTypes' => array( 'blockscape' ),
		),
		'blockscape-contact' => array(
			'label'         => __( 'Blockscape Contact', 'blockscape' ),
			'categoryTypes' => array( 'blockscape' ),
		),
		'blockscape-404' => array(
			'label'         => __( 'Blockscape Error', 'blockscape' ),
			'categoryTypes' => array( 'blockscape' ),
		)
	);
	
	foreach ( $pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}
add_action( 'init', 'blockscape_register_block_styles' );

/**
 * Include conditional assets
 * 
 * @since 1.0.0
 */
function blockscape_theme_conditional_assets( $html, $block ){
	$block_style = '';

	if (!is_admin()) { //prevent loading conditional assets in admin
		//We use checking by class name until WordPress will have proper inline style registration for block styles
		if (isset($block['blockName'])) {
			if (!empty($block['attrs']['className'])) {
				if ($block['blockName'] == 'core/list') {
					if (str_contains($block['attrs']['className'], 'is-style-nounderline') !== false) {
						$block_style .= 'ul.is-style-nounderline {margin:0; padding:0;list-style:none}ul.is-style-nounderline a{text-decoration:none}ul.is-style-nounderline li{list-style:none}';
					}
				} else if ($block['blockName'] == 'core/post-excerpt') {
					if (str_contains($block['attrs']['className'], 'is-style-show-two-lines') !== false) {
						$block_style .= '.is-style-show-two-lines>p{display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;  overflow: hidden; margin:0} .wp-block-post-excerpt.is-style-show-two-lines .wp-block-post-excerpt__more-text{ margin-top: 24px;}';
					} else if (str_contains($block['attrs']['className'], 'is-style-show-three-lines') !== false) {
						$block_style .= '.is-style-show-three-lines>p{display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;  overflow: hidden; margin:0} .wp-block-post-excerpt.is-style-show-three-lines .wp-block-post-excerpt__more-text{ margin-top: 24px;}';
					}
				}
			}
		}

		if ($block_style) {
			$html =  $html . '<style scoped>' . $block_style . '</style>';
		}
	}
	return $html;
}
add_filter( 'render_block', 'blockscape_theme_conditional_assets', 10, 2 );

/**
 * Enqueue the block styles
 *
 * @since 1.0.0
 */
function blockscape_register_editor_styles(){
	$suffix   = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	wp_register_style(
		'blockscape-block-style',
		get_theme_file_uri( 'assets/css/style' . $suffix . '.css' ),
		array(),
		BLOCKSCAPE_VERSION
	);
	wp_enqueue_style( 'blockscape-block-style' );

	if ( blockscape_is_woocommerce_activated() )
		wp_enqueue_style('blockscape-woocommerce', get_template_directory_uri() . '/assets/css/woocommerce' . $suffix . '.css', array(), BLOCKSCAPE_VERSION);

	wp_register_script(
		'blockscape-custom-scripts',
		get_theme_file_uri( 'assets/js/init' . $suffix . '.js' ),
		array(),
		BLOCKSCAPE_VERSION,
		true
	);
	wp_enqueue_script( 'blockscape-custom-scripts' );
}
add_action( 'wp_enqueue_scripts', 'blockscape_register_editor_styles' );
