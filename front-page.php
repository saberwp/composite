<?php get_header(); ?>

<!-- Animation test. -->

<div id="course-list" class="bg-red-200 h-40"></div>
<div id="question-list" class="bg-green-200 h-40"></div>

<div id="canvas" class="bg-black flex gap-4">

	<!-- Human -->
	<div id="human" class="flex flex-col items-center justify-center justify-items-center">
		<div id="head" class="rounded-full h-20 w-20 bg-red-900 flex gap-4 items-center justify-center">
			<div id="eye-left" class="rounded-full bg-white h-4 w-4"></div>
			<div id="eye-right" class="rounded-full bg-white h-4 w-4"></div>
		</div>
		<div id="neck" class="h-8 w-4 bg-red-700"></div>
		<div class="flex gap-8">
			<div id="arm-left" class="h-4 w-32 bg-blue-500"></div>
			<div id="arm-right" class="h-4 w-32 bg-blue-500"></div>
		</div>
		<div id="torso" class="h-12 w-8 bg-green-800"></div>
		<div class="flex gap-8">
			<div id="leg-left" class="h-16 w-8 bg-blue-500"></div>
			<div id="leg-right" class="h-16 w-8 bg-blue-500"></div>
		</div>
	</div>

	<!-- Chat Bar -->
	<div id="chat" class="flex flex-col h-full bg-gray-100 rounded-lg text-sm p-4">
		<h1>Hello, how are you today?</h1>
		<p>Today we're going to learn how to make educational content for the web that includes animation.</p>
		<p>Ready to get started?</p>
		<p>In this course you'll learn how to create adaptive learning systems like the one you're using right now.</p>
	</div>

	<!-- Controls -->
	<div id="controls" class="bg-gray-800">
		<button id="control-scale-down">Scale Down</button>
		<button id="control-scale-up">Scale Up</button>
	</div>

</div><!-- / #canvas -->

<!-- /Animation test -->


<?php the_content(); ?>
<?php require_once(get_template_directory() . '/components/marketing/page-sections/cta-sections/simple-stacked.php'); ?>
<?php get_footer(); ?>
