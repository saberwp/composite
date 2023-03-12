<?php

$background_color = get_field('background_color');
if( ! $background_color ) {
	$background_color = 'bg-black';
}

$tailwindJson = file_get_contents( get_template_directory() . '/tailwind.json' );
$tailwindArray = json_decode( $tailwindJson );

/* Add to tailwind.json register for building output. */
if( is_null( $tailwindArray ) ) {
	$tailwindArray[] = $background_color;
}

if( is_array( $tailwindArray ) ) {
	if( ! in_array( $background_color, $tailwindArray ) ) {
		$tailwindArray[] = $background_color;
	}
}

file_put_contents( get_template_directory() . '/tailwind.json', json_encode( $tailwindArray ) );

?>

<section class="p-8 <?php echo $background_color; ?> text-white">
	<div class="md:max-w-xl md:mx-auto">
		<h2 class="font-bold text-5xl">
			<?php echo get_field('heading'); ?>
		</h2>
		<InnerBlocks />
	</div>
</section>
