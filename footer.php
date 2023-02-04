<?php

// Set default footer if none is set in option "footer_default".
$footer_default = get_field( 'footer_default', 'option' );
if ( ! $footer_default ) {
	$footer_default = 'default';
}

// Load component manifest and set data for the component.
$manifest_path = get_template_directory() . '/components/footers/' . $footer_default . '/manifest.json';
ob_start();
require $manifest_path;
$manifestJson = ob_get_contents();
ob_end_clean();
$manifest = json_decode( $manifestJson );
$data = $manifest->data;

// Company name.
$company_name = get_field('company_name', 'option');
if( $company_name ) {
	$data->company_name = $company_name;
}

// Company mission statement.
$company_mission = get_field('company_mission', 'option');
if( $company_mission ) {
	$data->company_mission = $company_mission;
}

$component_path = get_template_directory() . '/components/footers/' . $footer_default . '/component.php';
require $component_path;

?>

<?php wp_footer(); ?>
</body>
</html>
