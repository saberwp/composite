<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php

// require_once(get_template_directory() . '/components/headers/centered-bottom-border.php');
// require_once(get_template_directory() . '/components/headers/branded-stacked-links.php');
require_once(get_template_directory() . '/components/headers/full-width-flyouts.php');
//require_once(get_template_directory() . '/components/headers/simple-links-centered.php');
//require_once(get_template_directory() . '/components/headers/simple-links-left.php');

?>
