<?php

	// Points this month stat.
	$component = new \Composite\ComponentStatSimple;
	$component->setContent('number', get_field('number'));
	$component->setContent('label', get_field('label'));
	$component->background_color = 'bg-slate-400';
	require( get_template_directory() . '/components/gamify/stats/simple/template.php' );

?>
