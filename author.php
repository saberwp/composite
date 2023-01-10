<?php get_header(); ?>

<?php

$authorId = get_the_author_meta( 'ID' );

$profile = new stdClass;
$profile->heading = get_the_author_meta('display_name');
$profile->bio = get_the_author_meta('description');
$profile->name = get_the_author_meta('display_name');
$profile->job_title = get_field('job_title','user_'.$authorId);
$profile->image = get_field('author_image','user_'.$authorId);
require_once(get_template_directory() . '/components/marketing/page-sections/team-sections/dark-version-with-large-images.php');

?>

<?php get_footer(); ?>
