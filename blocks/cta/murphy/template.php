<section class="bg-gradient-to-r from-teal-800 to-teal-600 my-8 p-8 border-y-4 border-teal-600 border-solid">
	<div class="flex items-center gap-6 p-8 md:p-0 md:max-w-3xl md:mx-auto">

		<div>
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
		</div>

		<a class="shrink-0 block max-w-sm bg-white text-center rounded-md text-teal-800 text-lg font-semibold py-2 px-12 hover:bg-teal-100" href="<?php echo site_url('products/saber-gamify'); ?>">
			Get It
		</a>

	</div>

</section>
