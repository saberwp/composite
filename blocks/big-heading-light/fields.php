<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
'key' => 'group_640b7c04441a9',
'title' => 'Composite > Block Types > Big Heading Light',
'fields' => array(
array(
'key' => 'field_640b7c043b482',
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
),
),
'location' => array(
array(
array(
	'param' => 'block',
	'operator' => '==',
	'value' => 'composite/big-heading-light',
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
