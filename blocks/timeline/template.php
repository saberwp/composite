<?php

$timeline_items = get_field('timeline_items');

?>

<ul class="flex flex-col gap-8">
	<?php
		if( ! empty( $timeline_items ) ) {
			foreach( $timeline_items as $item ) {
	?>
		<li class="flex gap-4 items-center">
			<div class="bg-red-800 rounded-full w-20 h-20"></div>
			<h2 class="font-bold text-3xl">
				<?php echo $item['heading']; ?>
			</h2>
		</li>
	<?php } } ?>
</ul>
