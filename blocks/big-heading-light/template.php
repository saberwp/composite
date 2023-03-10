<?php

/*
 * Parse ACF field data.
 */
$component = new \Composite\ComponentData();
$component->setContent('heading', get_field('heading'));

?>

<h2 class="text-5xl font-light"><?php echo $component->content['heading']; ?></h2>
