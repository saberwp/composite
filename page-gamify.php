<?php get_header(); ?>
<?php the_content(); ?>


<!-- Levels -->
<section class="bg-green-200 text-slate-800 p-8">
	<h2 class="text-2xl font-semibold">Gamification Levels</h2>
	<p class="text-gray-600 text-lg">
		Levels give students a sense of achievement beyond just the accumulation of points. Leveling up is a gaming concept that is meaningful to most users.
	</p>
	<ul class="flex flex-col gap-8">
		<li class="flex gap-4 items-center">
			<div class="bg-red-800 rounded-full w-20 h-20"></div>
			<h2 class="font-bold text-3xl">Level 1</h2>
		</li>
		<li class="flex gap-4 items-center pl-20">
			<div class="bg-green-800 rounded-full w-20 h-20"></div>
			<h2 class="font-bold text-3xl">Level 2</h2>
		</li>
		<?php

			// Level 3 list item.
			$component = new \Composite\ComponentData;
			$component->heading = 'Level 3';
			$component->circle_color = 'bg-emerald-600';
			$component->indent = 'pl-20';
			require( get_template_directory() . '/components/gamify/list-item-checkpoint/template.php' );

		?>

		<?php

			// Level 4 list item.
			$component = new \Composite\ComponentData;
			$component->heading = 'Level 4';
			$component->circle_color = 'bg-blue-200';
			$component->indent = 'pl-0';
			require( get_template_directory() . '/components/gamify/list-item-checkpoint/template.php' );

		?>
	</ul>

	<?php

		// Levels available stat.
		$component = new \Composite\ComponentStatSimple;
		$component->number = 12;
		$component->label  = 'Levels Available';
		$component->background_color = 'bg-red-800';
		require( get_template_directory() . '/components/gamify/stats/simple/template.php' );

	?>


</section>

<!-- Quantifiable Actions. -->
<section class="bg-gray-200 p-8 my-12">
	<div class="md:max-w-3xl md:mx-auto">
		<?php

			// Points this month stat.
			$component = new \Composite\ComponentData;
			$component->heading  = 'Quantifiable Actions';
			require( get_template_directory() . '/components/gamify/heading-md/template.php' );

		?>
		<p class="text-2xl text-gray-800">
			What are we awarding points for? What are we tracking? Let's think about a very simple gamification system. Our goal is to track pushups. We could track every set of pushups that the person performs, or we could provide tracking for a daily summary total. Either way, we are setting up a quantifiable metric, a trackable data set that we can apply numeric values to.
		</p>
		<ul class="flex gap-4">
			<li>Do pushups</li>
			<li>Get 1 point for each pushup performed</li>
			<li>Advance to the second level after earning 1,000 points</li>
			<li>View gamification report that shows points total, points per day.</li>
		</ul>
	</div>
</section>

<!-- Shameless Plug -->
<section class="bg-blue-800 my-8 p-8">
	<div class="p-8 md:p-0 md:max-w-3xl md:mx-auto">
		<?php

			// Heading for CTA.
			$component = new \Composite\ComponentData;
			$component->heading  = 'Saber Gamify Plugin for WordPress';
			require( get_template_directory() . '/components/gamify/heading-md/template.php' );

		?>

		<?php

			// Big text block.
			$component = new \Composite\ComponentData;
			$component->text  = 'If you want a gamification system that works out of the box, try Saber Gamify.';
			require( get_template_directory() . '/components/gamify/text-big/template.php' );

		?>
		<a class="block bg-black text-center rounded-lg text-gray-100 text-3xl font-bold py-4 px-8 hover:bg-gray-800" href="<?php echo site_url('products/saber-gamify'); ?>">Get It</a>
	</div>
</section>

<?php get_footer('app'); ?>
