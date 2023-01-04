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
        'page_title'    => 'Composite Settings',
        'menu_title'    => 'Composite Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

		acf_add_options_sub_page(array(
      'page_title'    => 'Homepage',
      'menu_title'    => 'Homepage',
      'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
      'page_title'    => 'Footer',
      'menu_title'    => 'Footer',
      'parent_slug'   => 'theme-general-settings',
    ));

}

// Enable SVG uploads to media.
add_filter( 'upload_mimes', function ( $types ) {
	$types['svg']  = 'image/svg+xml';
	$types['json'] = 'text/plain';
	return $types;
});

/* Add theme supports */
add_action('after_setup_theme', function() {
	add_theme_support('post-thumbnails');
});
