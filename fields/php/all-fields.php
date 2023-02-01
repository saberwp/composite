<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
'key' => 'group_63cfd72e8641f',
'title' => 'blocks\\offset-2x2-grid',
'fields' => array(
array(
'key' => 'field_63cfd730831ef',
'label' => 'Heading',
'name' => 'heading',
'aria-label' => '',
'type' => 'text',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'default_value' => 'Maximize your WordPress return on investment.',
'maxlength' => '',
'placeholder' => '',
'prepend' => '',
'append' => '',
),
array(
'key' => 'field_63cfd9b173737',
'label' => 'Features',
'name' => 'features',
'aria-label' => '',
'type' => 'repeater',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'layout' => 'block',
'pagination' => 0,
'min' => 4,
'max' => 4,
'collapsed' => 'field_63cfd9d573738',
'button_label' => 'Add Feature',
'rows_per_page' => 20,
'sub_fields' => array(
	array(
		'key' => 'field_63cfd9f77373a',
		'label' => 'Icon',
		'name' => 'icon',
		'aria-label' => '',
		'type' => 'image',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
		),
		'return_format' => 'array',
		'library' => 'all',
		'min_width' => '',
		'min_height' => '',
		'min_size' => '',
		'max_width' => '',
		'max_height' => '',
		'max_size' => '',
		'mime_types' => '',
		'preview_size' => 'medium',
		'parent_repeater' => 'field_63cfd9b173737',
	),
	array(
		'key' => 'field_63cfd9d573738',
		'label' => 'Heading',
		'name' => 'heading',
		'aria-label' => '',
		'type' => 'text',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
		),
		'default_value' => '',
		'maxlength' => '',
		'placeholder' => '',
		'prepend' => '',
		'append' => '',
		'parent_repeater' => 'field_63cfd9b173737',
	),
	array(
		'key' => 'field_63cfd9e573739',
		'label' => 'Body',
		'name' => 'body',
		'aria-label' => '',
		'type' => 'textarea',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
		),
		'default_value' => '',
		'maxlength' => '',
		'rows' => '',
		'placeholder' => '',
		'new_lines' => '',
		'parent_repeater' => 'field_63cfd9b173737',
	),
),
),
),
'location' => array(
array(
array(
	'param' => 'block',
	'operator' => '==',
	'value' => 'composite/offset-2x2-grid',
),
),
),
'menu_order' => 0,
'position' => 'normal',
'style' => 'default',
'label_placement' => 'top',
'instruction_placement' => 'label',
'hide_on_screen' => '',
'active' => true,
'description' => '',
'show_in_rest' => 0,
));

acf_add_local_field_group(array(
'key' => 'group_63b61926be910',
'title' => 'Blog',
'fields' => array(
array(
'key' => 'field_63b61927d0ec3',
'label' => '',
'name' => '',
'aria-label' => '',
'type' => 'text',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'default_value' => '',
'maxlength' => '',
'placeholder' => '',
'prepend' => '',
'append' => '',
),
),
'location' => array(
array(
array(
	'param' => 'post_type',
	'operator' => '==',
	'value' => 'post',
),
),
),
'menu_order' => 0,
'position' => 'normal',
'style' => 'default',
'label_placement' => 'top',
'instruction_placement' => 'label',
'hide_on_screen' => '',
'active' => true,
'description' => '',
'show_in_rest' => 0,
));

acf_add_local_field_group(array(
'key' => 'group_63b5ffa1d01d7',
'title' => 'Blog Main',
'fields' => array(
array(
'key' => 'field_63b5ffa2d06f5',
'label' => 'Heading',
'name' => 'heading',
'aria-label' => '',
'type' => 'text',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'default_value' => 'From the blog',
'maxlength' => '',
'placeholder' => '',
'prepend' => '',
'append' => '',
),
array(
'key' => 'field_63b600fa577cd',
'label' => 'Description',
'name' => 'description',
'aria-label' => '',
'type' => 'textarea',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'default_value' => '',
'maxlength' => '',
'rows' => '',
'placeholder' => '',
'new_lines' => '',
),
),
'location' => array(
array(
array(
	'param' => 'page',
	'operator' => '==',
	'value' => '59',
),
),
),
'menu_order' => 0,
'position' => 'normal',
'style' => 'default',
'label_placement' => 'top',
'instruction_placement' => 'label',
'hide_on_screen' => '',
'active' => true,
'description' => '',
'show_in_rest' => 0,
));

acf_add_local_field_group(array(
'key' => 'group_63b3fd74bc99d',
'title' => 'Footer Menus',
'fields' => array(
array(
'key' => 'field_63b3fd7519e71',
'label' => 'Footer Menu 1',
'name' => '',
'aria-label' => '',
'type' => 'tab',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'placement' => 'top',
'endpoint' => 0,
),
array(
'key' => 'field_63b3fd8b19e72',
'label' => 'Footer Menu 1',
'name' => 'footer_menu_1',
'aria-label' => '',
'type' => 'repeater',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'layout' => 'table',
'pagination' => 0,
'min' => 0,
'max' => 0,
'collapsed' => '',
'button_label' => 'Add Row',
'rows_per_page' => 20,
'sub_fields' => array(
	array(
		'key' => 'field_63b3fdfe14ee7',
		'label' => 'Title',
		'name' => 'title',
		'aria-label' => '',
		'type' => 'text',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
		),
		'default_value' => '',
		'maxlength' => '',
		'placeholder' => '',
		'prepend' => '',
		'append' => '',
		'parent_repeater' => 'field_63b3fd8b19e72',
	),
	array(
		'key' => 'field_63b3fe0614ee8',
		'label' => 'Slug',
		'name' => 'slug',
		'aria-label' => '',
		'type' => 'text',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
		),
		'default_value' => '',
		'maxlength' => '',
		'placeholder' => '',
		'prepend' => '',
		'append' => '',
		'parent_repeater' => 'field_63b3fd8b19e72',
	),
),
),
array(
'key' => 'field_63b4016713a0a',
'label' => 'Footer Menu 2',
'name' => '',
'aria-label' => '',
'type' => 'tab',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'placement' => 'top',
'endpoint' => 0,
),
array(
'key' => 'field_63b4016113a07',
'label' => 'Footer Menu 2',
'name' => 'footer_menu_2',
'aria-label' => '',
'type' => 'repeater',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'layout' => 'table',
'pagination' => 0,
'min' => 0,
'max' => 0,
'collapsed' => '',
'button_label' => 'Add Row',
'rows_per_page' => 20,
'sub_fields' => array(
	array(
		'key' => 'field_63b4016113a08',
		'label' => 'Title',
		'name' => 'title',
		'aria-label' => '',
		'type' => 'text',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
		),
		'default_value' => '',
		'maxlength' => '',
		'placeholder' => '',
		'prepend' => '',
		'append' => '',
		'parent_repeater' => 'field_63b4016113a07',
	),
	array(
		'key' => 'field_63b4016113a09',
		'label' => 'Slug',
		'name' => 'slug',
		'aria-label' => '',
		'type' => 'text',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
		),
		'default_value' => '',
		'maxlength' => '',
		'placeholder' => '',
		'prepend' => '',
		'append' => '',
		'parent_repeater' => 'field_63b4016113a07',
	),
),
),
array(
'key' => 'field_63b4023ebff57',
'label' => 'Footer Menu 3',
'name' => '',
'aria-label' => '',
'type' => 'tab',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'placement' => 'top',
'endpoint' => 0,
),
array(
'key' => 'field_63b40248bff58',
'label' => 'Footer Menu 3',
'name' => 'footer_menu_3',
'aria-label' => '',
'type' => 'repeater',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'layout' => '',
'pagination' => 0,
'min' => 0,
'max' => 0,
'collapsed' => '',
'button_label' => 'Add Row',
'rows_per_page' => 20,
'sub_fields' => array(
	array(
		'key' => 'field_63b40248bff59',
		'label' => 'Title',
		'name' => 'title',
		'aria-label' => '',
		'type' => 'text',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
		),
		'default_value' => '',
		'maxlength' => '',
		'placeholder' => '',
		'prepend' => '',
		'append' => '',
		'parent_repeater' => 'field_63b40248bff58',
	),
	array(
		'key' => 'field_63b40248bff5a',
		'label' => 'Slug',
		'name' => 'slug',
		'aria-label' => '',
		'type' => 'text',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
		),
		'default_value' => '',
		'maxlength' => '',
		'placeholder' => '',
		'prepend' => '',
		'append' => '',
		'parent_repeater' => 'field_63b40248bff58',
	),
),
),
array(
'key' => 'field_63b40250bff5b',
'label' => 'Footer Menu 4',
'name' => '',
'aria-label' => '',
'type' => 'tab',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'placement' => 'top',
'endpoint' => 0,
),
array(
'key' => 'field_63b40257bff5c',
'label' => 'Footer Menu 4',
'name' => 'footer_menu_4',
'aria-label' => '',
'type' => 'repeater',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'layout' => '',
'pagination' => 0,
'min' => 0,
'max' => 0,
'collapsed' => '',
'button_label' => 'Add Row',
'rows_per_page' => 20,
'sub_fields' => array(
	array(
		'key' => 'field_63b40257bff5d',
		'label' => 'Title',
		'name' => 'title',
		'aria-label' => '',
		'type' => 'text',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
		),
		'default_value' => '',
		'maxlength' => '',
		'placeholder' => '',
		'prepend' => '',
		'append' => '',
		'parent_repeater' => 'field_63b40257bff5c',
	),
	array(
		'key' => 'field_63b40257bff5e',
		'label' => 'Slug',
		'name' => 'slug',
		'aria-label' => '',
		'type' => 'text',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
		),
		'default_value' => '',
		'maxlength' => '',
		'placeholder' => '',
		'prepend' => '',
		'append' => '',
		'parent_repeater' => 'field_63b40257bff5c',
	),
),
),
),
'location' => array(
array(
array(
	'param' => 'options_page',
	'operator' => '==',
	'value' => 'acf-options-footer',
),
),
),
'menu_order' => 0,
'position' => 'normal',
'style' => 'default',
'label_placement' => 'top',
'instruction_placement' => 'label',
'hide_on_screen' => '',
'active' => true,
'description' => '',
'show_in_rest' => 0,
));

acf_add_local_field_group(array(
'key' => 'group_63b4e28dbc8c9',
'title' => 'Homepage',
'fields' => array(
),
'location' => array(
array(
array(
	'param' => 'options_page',
	'operator' => '==',
	'value' => 'acf-options-homepage',
),
),
),
'menu_order' => 0,
'position' => 'normal',
'style' => 'default',
'label_placement' => 'top',
'instruction_placement' => 'label',
'hide_on_screen' => '',
'active' => true,
'description' => '',
'show_in_rest' => 0,
));

acf_add_local_field_group(array(
'key' => 'group_63d4a91b32be2',
'title' => 'Menu Items',
'fields' => array(
array(
'key' => 'field_63d4a91cff87a',
'label' => 'Description',
'name' => 'description',
'aria-label' => '',
'type' => 'textarea',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'default_value' => '',
'maxlength' => '',
'rows' => '',
'placeholder' => '',
'new_lines' => '',
),
array(
'key' => 'field_63d4aa31e9e39',
'label' => 'Icon',
'name' => 'icon',
'aria-label' => '',
'type' => 'image',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'return_format' => 'array',
'library' => 'all',
'min_width' => '',
'min_height' => '',
'min_size' => '',
'max_width' => '',
'max_height' => '',
'max_size' => '',
'mime_types' => '',
'preview_size' => 'medium',
),
),
'location' => array(
array(
array(
	'param' => 'nav_menu_item',
	'operator' => '==',
	'value' => 'all',
),
),
),
'menu_order' => 0,
'position' => 'normal',
'style' => 'default',
'label_placement' => 'top',
'instruction_placement' => 'label',
'hide_on_screen' => '',
'active' => true,
'description' => '',
'show_in_rest' => 0,
));

acf_add_local_field_group(array(
'key' => 'group_63b8acdc504e5',
'title' => 'Pages > Agency',
'fields' => array(
array(
'key' => 'field_63b8acdc5a23f',
'label' => 'Testimonial',
'name' => 'testimonial',
'aria-label' => '',
'type' => 'textarea',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'default_value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas culpa sapiente alias molestiae. Numquam corrupti in laborum sed rerum et corporis.',
'maxlength' => '',
'rows' => '',
'placeholder' => '',
'new_lines' => '',
),
),
'location' => array(
array(
array(
	'param' => 'page',
	'operator' => '==',
	'value' => '91',
),
),
),
'menu_order' => 0,
'position' => 'normal',
'style' => 'default',
'label_placement' => 'top',
'instruction_placement' => 'label',
'hide_on_screen' => '',
'active' => true,
'description' => '',
'show_in_rest' => 0,
));

acf_add_local_field_group(array(
'key' => 'group_63b8a5591cb1d',
'title' => 'Pages > Pricing',
'fields' => array(
array(
'key' => 'field_63b8a8812dc40',
'label' => 'Subheading',
'name' => 'subheading',
'aria-label' => '',
'type' => 'text',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'default_value' => 'Deploy faster',
'maxlength' => '',
'placeholder' => '',
'prepend' => '',
'append' => '',
),
array(
'key' => 'field_63b8a55a0d4fa',
'label' => 'Heading',
'name' => 'heading',
'aria-label' => '',
'type' => 'text',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'default_value' => 'Everything you need to deploy your app',
'maxlength' => '',
'placeholder' => '',
'prepend' => '',
'append' => '',
),
array(
'key' => 'field_63c7341001d2f',
'label' => 'Intro',
'name' => 'intro',
'aria-label' => '',
'type' => 'textarea',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'default_value' => 'Phasellus lorem quam molestie id quisque diam aenean nulla in. Accumsan in quis quis nunc, ullamcorper malesuada. Eleifend condimentum id viverra nulla.',
'maxlength' => '',
'rows' => '',
'placeholder' => '',
'new_lines' => '',
),
array(
'key' => 'field_63c734fcb5e82',
'label' => 'Feature 1 Heading',
'name' => 'feature_1_heading',
'aria-label' => '',
'type' => 'text',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'default_value' => 'Push to Deploy',
'maxlength' => '',
'placeholder' => '',
'prepend' => '',
'append' => '',
),
array(
'key' => 'field_63c73585677b0',
'label' => 'Feature 1 Body',
'name' => 'feature_1_body',
'aria-label' => '',
'type' => 'textarea',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'default_value' => 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.',
'maxlength' => '',
'rows' => '',
'placeholder' => '',
'new_lines' => '',
),
array(
'key' => 'field_63c739cb17a5f',
'label' => 'Feature 2 Heading',
'name' => 'feature_2_heading',
'aria-label' => '',
'type' => 'text',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'default_value' => 'SSL Certificates',
'maxlength' => '',
'placeholder' => '',
'prepend' => '',
'append' => '',
),
array(
'key' => 'field_63c73b2d17a60',
'label' => 'Feature 2 Body',
'name' => 'feature_2_body',
'aria-label' => '',
'type' => 'textarea',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'default_value' => 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.',
'maxlength' => '',
'rows' => '',
'placeholder' => '',
'new_lines' => '',
),
array(
'key' => 'field_63c73c9aa2bbe',
'label' => 'Feature 3 Heading',
'name' => 'feature_3_heading',
'aria-label' => '',
'type' => 'text',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'default_value' => 'Simple Queues',
'maxlength' => '',
'placeholder' => '',
'prepend' => '',
'append' => '',
),
array(
'key' => 'field_63c73c8ba2bbd',
'label' => 'Feature 3 Body',
'name' => 'feature_3_body',
'aria-label' => '',
'type' => 'textarea',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'default_value' => 'Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.',
'maxlength' => '',
'rows' => '',
'placeholder' => '',
'new_lines' => '',
),
),
'location' => array(
array(
array(
	'param' => 'page',
	'operator' => '==',
	'value' => '82',
),
),
),
'menu_order' => 0,
'position' => 'normal',
'style' => 'default',
'label_placement' => 'top',
'instruction_placement' => 'label',
'hide_on_screen' => '',
'active' => true,
'description' => '',
'show_in_rest' => 0,
));

acf_add_local_field_group(array(
'key' => 'group_63b8c7317eaad',
'title' => 'Pages > Privacy',
'fields' => array(
array(
'key' => 'field_63b8c7320e8e7',
'label' => 'Summary',
'name' => 'summary',
'aria-label' => '',
'type' => 'text',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'default_value' => '',
'maxlength' => '',
'placeholder' => '',
'prepend' => '',
'append' => '',
),
),
'location' => array(
array(
array(
	'param' => 'page',
	'operator' => '==',
	'value' => '102',
),
),
),
'menu_order' => 0,
'position' => 'normal',
'style' => 'default',
'label_placement' => 'top',
'instruction_placement' => 'label',
'hide_on_screen' => '',
'active' => true,
'description' => '',
'show_in_rest' => 0,
));

acf_add_local_field_group(array(
'key' => 'group_63b4f0d554275',
'title' => 'Pages > Solutions',
'fields' => array(
array(
'key' => 'field_63b4f0d514112',
'label' => 'Section 1 Heading',
'name' => 'section_1_heading',
'aria-label' => '',
'type' => 'text',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'default_value' => '',
'maxlength' => '',
'placeholder' => '',
'prepend' => '',
'append' => '',
),
array(
'key' => 'field_63b4f1686dfe4',
'label' => 'Section 1 Subheading',
'name' => 'section_1_subheading',
'aria-label' => '',
'type' => 'text',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'default_value' => '',
'maxlength' => '',
'placeholder' => '',
'prepend' => '',
'append' => '',
),
array(
'key' => 'field_63b4f1d213c52',
'label' => 'Section 1 Body',
'name' => 'section_1_body',
'aria-label' => '',
'type' => 'textarea',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'default_value' => '',
'maxlength' => '',
'rows' => '',
'placeholder' => '',
'new_lines' => '',
),
array(
'key' => 'field_63b4f2e404e2e',
'label' => 'Section 2 Heading',
'name' => 'section_2_heading',
'aria-label' => '',
'type' => 'text',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'default_value' => '',
'maxlength' => '',
'placeholder' => '',
'prepend' => '',
'append' => '',
),
array(
'key' => 'field_63b4f34056ff9',
'label' => 'Section 2 Body',
'name' => 'section_2_body',
'aria-label' => '',
'type' => 'textarea',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'default_value' => '',
'maxlength' => '',
'rows' => '',
'placeholder' => '',
'new_lines' => '',
),
),
'location' => array(
array(
array(
	'param' => 'page',
	'operator' => '==',
	'value' => '45',
),
),
),
'menu_order' => 0,
'position' => 'normal',
'style' => 'default',
'label_placement' => 'top',
'instruction_placement' => 'label',
'hide_on_screen' => '',
'active' => true,
'description' => '',
'show_in_rest' => 0,
));

acf_add_local_field_group(array(
'key' => 'group_63b3f012cbbe3',
'title' => 'Theme Settings > Main',
'fields' => array(
array(
'key' => 'field_63b3f0136da61',
'label' => 'Company Name',
'name' => 'company_name',
'aria-label' => '',
'type' => 'text',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'default_value' => '',
'maxlength' => '',
'placeholder' => '',
'prepend' => '',
'append' => '',
),
array(
'key' => 'field_63b3f9a8e0573',
'label' => 'Logo',
'name' => 'logo',
'aria-label' => '',
'type' => 'acf_code_field',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'default_value' => '',
'placeholder' => '',
'mode' => 'htmlmixed',
'theme' => 'monokai',
),
array(
'key' => 'field_63b3f1a26472b',
'label' => 'Social Accounts',
'name' => 'social_accounts',
'aria-label' => '',
'type' => 'repeater',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'layout' => 'table',
'pagination' => 0,
'min' => 0,
'max' => 0,
'collapsed' => '',
'button_label' => 'Add Row',
'rows_per_page' => 20,
'sub_fields' => array(
	array(
		'key' => 'field_63b3f1b56472c',
		'label' => 'Service',
		'name' => 'service',
		'aria-label' => '',
		'type' => 'select',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
		),
		'choices' => array(
			'facebook' => 'Facebook',
			'twitter' => 'Twitter',
			'github' => 'Github',
		),
		'default_value' => false,
		'return_format' => 'value',
		'multiple' => 0,
		'allow_null' => 0,
		'ui' => 0,
		'ajax' => 0,
		'placeholder' => '',
		'parent_repeater' => 'field_63b3f1a26472b',
	),
	array(
		'key' => 'field_63b3f1e074a0e',
		'label' => 'URL',
		'name' => 'url',
		'aria-label' => '',
		'type' => 'url',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
		),
		'default_value' => '',
		'placeholder' => '',
		'parent_repeater' => 'field_63b3f1a26472b',
	),
	array(
		'key' => 'field_63b3f541ae333',
		'label' => 'Icon',
		'name' => 'icon',
		'aria-label' => '',
		'type' => 'acf_code_field',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
		),
		'default_value' => '',
		'placeholder' => '',
		'mode' => 'htmlmixed',
		'theme' => 'monokai',
		'parent_repeater' => 'field_63b3f1a26472b',
	),
),
),
array(
'key' => 'field_63b3fbd77ae5f',
'label' => 'Header Menu',
'name' => 'header_menu',
'aria-label' => '',
'type' => 'repeater',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'layout' => 'table',
'pagination' => 0,
'min' => 0,
'max' => 0,
'collapsed' => '',
'button_label' => 'Add Row',
'rows_per_page' => 20,
'sub_fields' => array(
	array(
		'key' => 'field_63b3fbed7ae60',
		'label' => 'Title',
		'name' => 'title',
		'aria-label' => '',
		'type' => 'text',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
		),
		'default_value' => '',
		'maxlength' => '',
		'placeholder' => '',
		'prepend' => '',
		'append' => '',
		'parent_repeater' => 'field_63b3fbd77ae5f',
	),
	array(
		'key' => 'field_63b3fbf87ae61',
		'label' => 'Slug',
		'name' => 'slug',
		'aria-label' => '',
		'type' => 'text',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
		),
		'default_value' => '',
		'maxlength' => '',
		'placeholder' => '',
		'prepend' => '',
		'append' => '',
		'parent_repeater' => 'field_63b3fbd77ae5f',
	),
),
),
),
'location' => array(
array(
array(
	'param' => 'options_page',
	'operator' => '==',
	'value' => 'theme-general-settings',
),
),
),
'menu_order' => 0,
'position' => 'normal',
'style' => 'default',
'label_placement' => 'top',
'instruction_placement' => 'label',
'hide_on_screen' => '',
'active' => true,
'description' => '',
'show_in_rest' => 0,
));

acf_add_local_field_group(array(
'key' => 'group_63bc886a1d10b',
'title' => 'Users > Profile',
'fields' => array(
array(
'key' => 'field_63bc886b7cab3',
'label' => 'Author Image',
'name' => 'author_image',
'aria-label' => '',
'type' => 'image',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'return_format' => 'array',
'library' => 'all',
'min_width' => '',
'min_height' => '',
'min_size' => '',
'max_width' => '',
'max_height' => '',
'max_size' => '',
'mime_types' => '',
'preview_size' => 'medium',
),
array(
'key' => 'field_63bca8b273798',
'label' => 'Job Title',
'name' => 'job_title',
'aria-label' => '',
'type' => 'text',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'default_value' => '',
'maxlength' => '',
'placeholder' => '',
'prepend' => '',
'append' => '',
),
array(
'key' => 'field_63bca9bce15b4',
'label' => 'Twitter',
'name' => 'twitter',
'aria-label' => '',
'type' => 'url',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'default_value' => '',
'placeholder' => '',
),
array(
'key' => 'field_63bca9ee6ce07',
'label' => 'LinkedIn',
'name' => 'linkedin',
'aria-label' => '',
'type' => 'url',
'instructions' => '',
'required' => 0,
'conditional_logic' => 0,
'wrapper' => array(
	'width' => '',
	'class' => '',
	'id' => '',
),
'default_value' => '',
'placeholder' => '',
),
),
'location' => array(
array(
array(
	'param' => 'user_form',
	'operator' => '==',
	'value' => 'edit',
),
),
),
'menu_order' => 0,
'position' => 'normal',
'style' => 'default',
'label_placement' => 'top',
'instruction_placement' => 'label',
'hide_on_screen' => '',
'active' => true,
'description' => '',
'show_in_rest' => 0,
));

endif;
