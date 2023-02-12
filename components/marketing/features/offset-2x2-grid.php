<?php

$data = new \Composite\ComponentData;
$data->heading = get_field('heading'); // get_field('homepage_offset_2x2_grid_heading', 'option');
$data->features = get_field('features');

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
	            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-500 text-white p-2">
								<?php
									if( $feature['icon'] ) {
										echo $feature['icon'];
									} else {
								?>
									<!-- Default icon. -->
									<svg class="fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><defs></defs><path d="M0 80C0 53.49 21.49 32 48 32H144C170.5 32 192 53.49 192 80V176C192 202.5 170.5 224 144 224H48C21.49 224 0 202.5 0 176V80zM224 336C224 309.5 245.5 288 272 288H368C394.5 288 416 309.5 416 336V432C416 458.5 394.5 480 368 480H272C245.5 480 224 458.5 224 432V336zM528 32C554.5 32 576 53.49 576 80V176C576 202.5 554.5 224 528 224H432C405.5 224 384 202.5 384 176V80C384 53.49 405.5 32 432 32H528z" /><path class="fill-white/50" d="M191.7 180.1L272 288C247.2 288 226.8 306.8 224.3 331L144 224C168.8 224 189.2 205.2 191.7 180.1V180.1zM192 96H384V160H192V96z"/></svg>
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
