<?php

add_action('wp_enqueue_scripts', function() {

	wp_enqueue_style(
		'composite-inter',
		'https://rsms.me/inter/inter.css',
		array(),
		time(),
		'all'
	);

	wp_enqueue_style(
		'composite-tw',
		get_template_directory_uri() . '/dist/output.css',
		array(),
		time(),
		'all'
	);

});


if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));

}

// Enable JSON uploads to media.
add_filter( 'upload_mimes', function ( $types ) {
	$types['svg']  = 'image/svg+xml';
	$types['json'] = 'text/plain';
	return $types;
});
