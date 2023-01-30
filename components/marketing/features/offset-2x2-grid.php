<?php

// @TODO provide a template that is full-width for posts and pages.

$data = new ComponentData;
$data->heading = get_field('heading'); // get_field('homepage_offset_2x2_grid_heading', 'option');
$data->section_1_body = get_field('homepage_offset_2x2_grid_section_1_body', 'option');
$data->features = get_field('features');

foreach( $data->features as $index => $feature ) {
	if( is_array( $feature['icon'] ) && $feature['icon']['mime_type'] === 'image/svg+xml' ) {
		$filepath = get_attached_file( $feature['icon']['id'] );
		ob_start();
		require( $filepath );
		$svg = ob_get_contents();
		ob_end_clean();
		$data->features[$index]['icon']['svg'] = $svg;
	}
}

?>

<div class="overflow-hidden bg-white">
  <div class="relative mx-auto max-w-7xl py-24 px-6 sm:py-32 lg:px-8 lg:py-40">
    <svg class="absolute top-0 left-full -translate-x-1/2 -translate-y-3/4 transform lg:left-auto lg:right-full lg:translate-x-2/3 lg:translate-y-1/4" width="404" height="784" fill="none" viewBox="0 0 404 784" aria-hidden="true">
      <defs>
        <pattern id="8b1b5f72-e944-4457-af67-0c6d15a99f38" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
          <rect x="0" y="0" width="4" height="4" class="text-gray-100" fill="currentColor" />
        </pattern>
      </defs>
      <rect width="404" height="784" fill="url(#8b1b5f72-e944-4457-af67-0c6d15a99f38)" />
    </svg>

    <div class="relative lg:grid lg:grid-cols-3 lg:gap-x-12 xl:gap-x-16">
      <div class="lg:col-span-1">
        <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-4xl">
					<?php echo $data->heading; ?>
				</h2>
      </div>
      <dl class="mt-20 grid grid-cols-1 gap-16 sm:grid-cols-2 sm:gap-x-12 lg:col-span-2 lg:mt-0">

				<?php
					if( ! empty( $data->features ) ) {
						foreach( $data->features as $feature ) {
				?>
        	<div>
	          <dt>
	            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-500 text-white">
								<?php
									if( is_array( $feature['icon'] ) && $feature['icon']['mime_type'] === 'image/svg+xml' ) {
										echo $feature['icon']['svg'];
									} else {
								?>
									<img src="<?php echo $feature['icon']['url']; ?>" />
								<?php } ?>
	            </div>
	            <p class="mt-6 text-lg font-semibold leading-8 text-gray-900">
								<?php echo $feature['heading']; ?>
							</p>
	          </dt>
	          <dd class="mt-2 text-base text-gray-600">
							<?php echo $feature['body']; ?>
						</dd>
	        </div>
				<?php } } ?>
      </dl>
    </div>
  </div>
</div>

<template>
	<div class="h-8 w-8"></div>
</template>
