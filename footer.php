<?php

// Set default footer if none is set in option "footer_default".
$footer_default = get_field( 'footer_default', 'option' );
if ( ! $footer_default ) {
	$footer_default = '4-column-with-newsletter-dark';
}

// Load component manifest and set data for the component.
$manifest_path = get_template_directory() . '/components/footers/' . $footer_default . '/manifest.json';
ob_start();
require $manifest_path;
$manifestJson = ob_get_contents();
ob_end_clean();
$manifest = json_decode( $manifestJson );

// Do data setting only if manifest has data property.
if( isset( $manifest->data ) ) {
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

	// Social accounts.
	$social_accounts = get_field('social_accounts', 'option');
	if( ! empty( $social_accounts )) {

		$data->social_accounts = array(); // Reset social accounts array.
		foreach( $social_accounts as $social_account ) {
			$data->social_accounts[] = $social_account;
		}

		$sa = new \Composite\SocialAccounts();
		$services = $sa->getServices();

		$social_services = array();
		foreach ($data->social_accounts as $datum) {
		  $service = $datum["service"];
		  $url = $datum["url"];

		  foreach ($services as $social_service) {
		    if ($social_service->key === $service) {
		      $social_service->setUrl($url);
		      $social_services[] = $social_service;
		      break;
		    }
		  }
		}

	}

}

$component_path = get_template_directory() . '/components/footers/' . $footer_default . '/component.php';
require $component_path;

?>

</div><!-- Flex to create min-h-screen -->

<?php wp_footer(); ?>
</body>
</html>
