<?php get_header(); ?>

<div class="p-4 my-8 md:max-w-2xl md:mx-auto md:px-0">
`	<?php if ( have_posts() ) : ?>
	  <?php while ( have_posts() ) : the_post(); ?>
	    <h2 class="font-bold text-2xl my-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	    <?php the_excerpt(); ?>
	  <?php endwhile; ?>
	  <?php the_posts_pagination(); ?>
	<?php else : ?>
	  <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'composite' ); ?></p>
	<?php endif; ?>
</div>

<?php get_footer(); ?>
