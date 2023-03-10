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
