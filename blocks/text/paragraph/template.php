<?php
$text = get_field('text');
$classes = get_field('classes');
?>

<p class="max-w-xl my-4 <?php echo $classes; ?>">
	<?php echo $text; ?>
</p>
