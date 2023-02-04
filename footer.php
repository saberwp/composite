<?php

$footer_default = get_field( 'footer_default', 'option' );
if ( ! $footer_default ) {
	$footer_default = 'default';
}
$component_path = get_template_directory() . '/components/footers/' . $footer_default . '/component.php';
require $component_path;

?>

<?php wp_footer(); ?>
</body>
</html>
