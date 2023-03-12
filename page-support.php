<?php get_header('app'); ?>
<div class="md:mx-auto md:max-w-5xl mt-6">
	<div class="flex gap-8">
		<div class="basis-4/12 bg-gray-50 p-8">
			<h2 class="text-2xl font-semibold mb-2">
				Need Account?
			</h2>
			<a class="block bg-gray-800 rounded-md text-white px-4 py-2 flex justify-center font-semibold text-lg hover:bg-gray-900" href="<?php echo site_url('register'); ?>">
				Open Account
			</a>
		</div>
		<div class="basis-8/12">
			<div class="font-semibold text-gray-800 text-lg mb-8">
				Thank you for reporting an issue with SaberWP. <span class="text-gray-400">We aim to respond to all inquiries within 24-hours from Monday - Saturday.</span>
			</div>
			<?php the_content(); ?>
		</div>
	</div>
</div>
<?php get_footer('app'); ?>
