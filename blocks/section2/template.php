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
