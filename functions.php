<?php

require_once( get_template_directory() . '/inc/ComponentData.php' );
require_once( get_template_directory() . '/inc/MenuWalker.php' );

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
        'page_title'    => 'Composite',
        'menu_title'    => 'Composite ',
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
	add_theme_support('menus');
});

/* Do block registrations. */
add_action('init', function() {
	$result = register_block_type( get_template_directory() . '/blocks/offset-2x2-grid/block.json' );
	if( ! $result ) {
		var_dump( 'Block type could not regsie');
	}
});

// Register menus.
// See reference tutorial https://monsterspost.com/add-navigation-menus-wordpress-theme/.
add_action('init', function() {
	register_nav_menu('primary-menu',__( 'Primary Menu' ));
});

// Add all ACF fields defined in code.
add_action('init', function() {
	require_once( get_template_directory() . '/fields/php/all-fields.php' );
});

// Theme activation.
add_action( 'after_switch_theme', function( $old_name, $old_theme ) {

	update_field( 'company_name', 'ACME CORP','option' );
	update_field( 'logo', '<svg width="40" height="31" viewBox="0 0 40 31" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M21.1111 31L22.2222 31L37.7778 31L40 31L40 26.6794L37.7778 26.6794L23.3333 26.6794L17.3333 18.9024L16.6667 18.0383L15.5556 18.0383L2.22222 18.0383L1.13315e-06 18.0383L7.55431e-07 22.3589L2.22222 22.3589L14.4444 22.3589L20.4444 30.1359L21.1111 31ZM9.85417 11.5575L2.22222 11.5575L1.69972e-06 11.5575L1.322e-06 15.878L2.22222 15.878L37.7778 15.878L40 15.878L40 11.5575L37.7778 11.5575L15.0347 11.5575L19.0347 5.07665L37.7778 5.07665L40 5.07665L40 0.756094L37.7778 0.756093L17.7778 0.756092L16.5208 0.756092L15.875 1.80248L9.85417 11.5575Z" fill="white"/>
</svg>','option' );


}, 10, 2 );
