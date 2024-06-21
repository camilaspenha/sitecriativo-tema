<?php
/**
 * Register pattern categories
 */

 if ( ! function_exists( 'sitecriativo_pattern_categories' ) ) : 
	function sitecriativo_pattern_categories() {
		register_block_pattern_category(
			'sitecriativo_page',
			array(
				'label'       => _x( 'Pages', 'Block pattern category', 'setos' ),
				'description' => __( 'A collection of full page layouts.', 'setos' ),
			)
		);
	}
endif;

add_action( 'init', 'sitecriativo_pattern_categories' );