<?php


// Register field group and fields - subtitle and image


function register_custom_acf_fields() {
	if ( function_exists( 'acf_add_local_field_group' ) ) {
		acf_add_local_field_group( array(
			'key'                   => 'group_real_estates_details',
			'title'                 => 'Real Estates Details',
			'location'              => array(
				array(
					array(
						'param'    => 'post_type',
						'operator' => '==',
						'value'    => 'real_estates',
					),
				),
			),
			'menu_order'            => 0,
			'position'              => 'normal',
			'style'                 => 'default',
			'label_placement'       => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen'        => '',
		) );

		// subtitle
		acf_add_local_field( array(
			'key'          => 'subtitle',
			'label'        => 'subtitle',
			'name'         => 'subtitle',
			'type'         => 'text',
			'parent'       => 'group_real_estates_details',
			'instructions' => '',
			'required'     => 1,
		) );

		// image
		acf_add_local_field( array(
			'key'           => 'image',
			'label'         => 'image',
			'name'          => 'image',
			'type'          => 'image',
			'parent'        => 'group_real_estates_details',
			'instructions'  => '',
			'return_format' => 'url',
			'preview_size'  => 'Medium',
			'library'       => 'all',
			// 'min_width'     => 0,
			// 'min_height'    => 0,
			// 'max_width'     => 0,
			// 'max_height'    => 0,
		) );
	}
}

add_action( 'init', 'register_custom_acf_fields' );
