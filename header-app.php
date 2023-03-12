<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Min height screen fix. -->
<div class="min-h-screen flex flex-col justify-between">

<?php

$header_path = get_template_directory() . '/components/headers/app/component.php';
require_once( $header_path );

?>
