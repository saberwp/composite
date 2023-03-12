<?php

$image = get_field('image');

?>

<section class="bg-slate-600 text-white my-8">
	<div class="flex gap-4 items-center p-8 md:max-w-3xl md:mx-auto">
		<div class="basis-5/12 shrink-0">
			<h2 class="font-semibold text-2xl mb-4">
				<?php echo get_field('heading'); ?>
			</h2>
			<p class="text-lg font-medium">
				<?php echo get_field('text'); ?>
			</p>
		</div>
		<div class="basis-7/12 shrink-0">
			<img src="<?php echo $image['sizes']['large']; ?>" width="<?php echo $image['sizes']['large-width']; ?>" height="<?php echo $image['sizes']['large-height']; ?>" />
		</div>
	</div>
</section>
