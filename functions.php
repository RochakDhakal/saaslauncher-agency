<?php
/*
 * Disallow direct access
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Forbidden.' );
}
/*
* Enqueue parent style.
*/
function saaslauncher_agency_scripts() {
	wp_enqueue_style( 'saaslauncher-agency-parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'saaslauncher_agency_scripts' );

/**
 * Registers pattern categories.
 *
 * @since agencylauncher 1.0.0
 *
 * @return void
 */
function saaslauncher_agency_register_pattern_category() {

	$patterns = array();

	$block_pattern_categories = array(
		'saaslauncher-agency-patterns' => array( 'label' => __( 'SaasLauncher Agency Patterns', 'agencylauncher' ) ),
	);

	$block_pattern_categories = apply_filters( 'saaslauncher_agency_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'saaslauncher_agency_register_pattern_category', 9 );
