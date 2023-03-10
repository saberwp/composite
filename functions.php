<?php

spl_autoload_register( function ( $class_name ) {

    $prefix = 'Composite\\';
    $base_dir = get_template_directory() . '/inc/';

    // Does the class use the namespace prefix?
    $len = strlen( $prefix );
    if ( strncmp( $prefix, $class_name, $len ) !== 0 ) {
        return;
    }

    // Get the relative class name
    $relative_class = substr( $class_name, $len );

    // Replace the namespace separators with directory separators in the relative class name, append with .php
    $file = $base_dir . str_replace( '\\', '/', $relative_class ) . '.php';

    // If the file exists, require it
    if ( file_exists( $file ) ) {
        require $file;
    }
} );

// Require Component Classes.
require_once( get_template_directory() . '/components/gamify/stats/simple/ComponentStatSimple.php' );

/**
 * Initialize the Login class and run its init() method
 */
use Composite\Login;

$login = new Login();
$login->init();

// Init Headers class.
$headers = new \Composite\Headers;
$headers->init();

// Init Footers class.
$footers = new \Composite\Footers;
$footers->init();

// Init Social Accounts.
$socialAccounts = new \Composite\SocialAccounts;
$socialAccounts->init();

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

	wp_enqueue_script(
		'composite-animate',
		get_template_directory_uri() . '/js/animate.js',
		array('backbone'),
		time(),
		1
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
      'page_title'    => 'Header',
      'menu_title'    => 'Header',
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
	add_theme_support( 'post-templates' );
	add_theme_support('woocommerce');
});

/* Do block registrations. */
add_action('init', function() {
	register_block_type( get_template_directory() . '/blocks/offset-2x2-grid/block.json' );
	register_block_type( get_template_directory() . '/blocks/section/block.json' );
	register_block_type( get_template_directory() . '/blocks/section2/block.json' );
	register_block_type( get_template_directory() . '/blocks/big-heading-light/block.json' );
	register_block_type( get_template_directory() . '/blocks/stat/block.json' );
	register_block_type( get_template_directory() . '/blocks/timeline/block.json' );
	register_block_type( get_template_directory() . '/blocks/cta/murphy/block.json' );
	register_block_type( get_template_directory() . '/blocks/text/paragraph/block.json' );
	register_block_type( get_template_directory() . '/blocks/sections/split2/block.json' );
	register_block_type( get_template_directory() . '/blocks/sections/center-icon/block.json' );
});

// Register menus.
// See reference tutorial https://monsterspost.com/add-navigation-menus-wordpress-theme/.
add_action('init', function() {
	register_nav_menu('primary-menu',__( 'Primary Menu' ));
	register_nav_menu('footer_1',( 'Footer 1' ));
	register_nav_menu('footer_2',( 'Footer 2' ));
	register_nav_menu('footer_3',( 'Footer 3' ));
	register_nav_menu('footer_4',( 'Footer 4' ));
});

// Add all ACF fields defined in code.
add_action('init', function() {
	require_once( get_template_directory() . '/fields/php/all-fields.php' );
});

// Theme activation.
add_action( 'after_switch_theme', function( $old_name, $old_theme ) {

	update_field( 'company_name', 'ACME CORP', 'option' );
	update_field( 'logo', '<svg width="40" height="31" viewBox="0 0 40 31" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M21.1111 31L22.2222 31L37.7778 31L40 31L40 26.6794L37.7778 26.6794L23.3333 26.6794L17.3333 18.9024L16.6667 18.0383L15.5556 18.0383L2.22222 18.0383L1.13315e-06 18.0383L7.55431e-07 22.3589L2.22222 22.3589L14.4444 22.3589L20.4444 30.1359L21.1111 31ZM9.85417 11.5575L2.22222 11.5575L1.69972e-06 11.5575L1.322e-06 15.878L2.22222 15.878L37.7778 15.878L40 15.878L40 11.5575L37.7778 11.5575L15.0347 11.5575L19.0347 5.07665L37.7778 5.07665L40 5.07665L40 0.756094L37.7778 0.756093L17.7778 0.756092L16.5208 0.756092L15.875 1.80248L9.85417 11.5575Z" fill="white"/>
</svg>', 'option' );

// Social accounts repeater.
$social_accounts = array(
	array(
		'service' => 'twitter',
		'url'     => 'https://twitter.com/acme',
		'icon'		=> '<svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
  <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
</svg>',
	)
);
update_field( 'social_accounts', $social_accounts, 'option' );

// Header menu repeater.
$header_menu = array(
	array(
		'title' => 'About',
		'slug'  => 'about',
	),
	array(
		'title' => 'Contact',
		'slug'  => 'contact',
	),
);
update_field( 'header_menu', $header_menu, 'option' );

}, 10, 2 );

/**
 * Enqueue the login_process.js script on the login page in the Composite theme.
 *
 * This function conditionally loads the `/js/login_process.js` script only on the page with the login slug.
 *
 * @package Composite
 * @since 1.0.0
 */
function enqueue_login_process_script() {

  if ( is_page( 'login' ) ) {
    wp_enqueue_script( 'login-process', get_template_directory_uri() . '/js/login_process.js', array(), '1.0.0', true );
  }

	/**
	 * Enqueues the 'register-process' script.
	 *
	 * The script is located in the 'js' folder of the current theme directory and is named 'register_process.js'.
	 * The script is not dependent on any other scripts and is loaded in the footer (true).
	 *
	 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
	 */
	if (is_page('register')) {
    wp_enqueue_script('register-process', get_template_directory_uri() . '/js/register_process.js', array(), false, true);
  }

	/**
	 * Enqueues the 'menu' script.
	 *
	 * The script is located in the 'js' folder of the current theme directory and is named 'menu.js'.
	 * The script is not dependent on any other scripts and is loaded in the footer (true).
	 *
	 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_script/
	 */
	wp_enqueue_script('menu', get_template_directory_uri() . '/js/menu.js', array(), false, true);

}
add_action( 'wp_enqueue_scripts', 'enqueue_login_process_script' );

/**
 * Find and require all PHP files under the 'wp/taxonomies' directory.
 *
 * The glob() function is used to search for all PHP files in the 'wp/taxonomies' directory.
 * The resulting array of file paths is then looped over, and each file is required using the require statement.
 */
$taxonomy_files = glob( get_template_directory() . '/wp/taxonomies/*.php' );
foreach ( $taxonomy_files as $file ) {
  // require $file;
}
