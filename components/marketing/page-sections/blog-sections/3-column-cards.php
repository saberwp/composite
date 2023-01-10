<?php
	$page = get_queried_object();
?>


<div class="relative bg-gray-50 px-6 pt-16 pb-20 lg:px-8 lg:pt-24 lg:pb-28">
  <div class="absolute inset-0">
    <div class="h-1/3 bg-white sm:h-2/3"></div>
  </div>
  <div class="relative mx-auto max-w-7xl">
    <div class="text-center">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
				<?php echo get_field('heading', $page->ID); ?>
			</h2>
      <p class="mx-auto mt-3 max-w-2xl text-xl text-gray-500 sm:mt-4">
				<?php echo get_field('heading', $page->ID); ?>
			</p>
    </div>
    <div class="mx-auto mt-12 grid max-w-lg gap-5 lg:max-w-none lg:grid-cols-3">

			<?php
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();
			?>
	      <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
        <div class="flex-shrink-0">
          <?php the_post_thumbnail(); ?>
        </div>
        <div class="flex flex-1 flex-col justify-between bg-white p-6">
          <div class="flex-1">
            <p class="text-sm font-medium text-indigo-600">
              <a href="#" class="hover:underline">
								<?php the_category(); ?>
							</a>
            </p>
            <a href="<?php echo the_permalink(); ?>" class="mt-2 block">
              <p class="text-xl font-semibold text-gray-900">
								<?php the_title(); ?>
							</p>
              <p class="mt-3 text-base text-gray-500">
								<?php the_excerpt(); ?>
							</p>
            </a>
          </div>
          <div class="mt-6 flex items-center">
            <div class="flex-shrink-0">
              <a href="#">
                <span class="sr-only">
									<?php echo get_the_author_meta('display_name'); ?>
								</span>
								<?php $author_image = get_field('author_image','user_1'); ?>
								<?php if( $author_image && is_array( $author_image ) ) { ?>
                	<img class="h-10 w-10 rounded-full" src="<?php echo $author_image['url']; ?>" alt="">
								<?php } ?>
							</a>
            </div>
            <div class="ml-3">
              <p class="text-sm font-medium text-gray-900">
                <a href="<?php echo site_url( 'author/' . get_the_author_meta('user_login') ); ?>" class="hover:underline">
									<?php echo get_the_author_meta('display_name'); ?>
								</a>
              </p>
              <div class="flex space-x-1 text-sm text-gray-500">
                <time datetime="<?php echo get_the_date('Y-m-d', $post->ID); ?>">
									<?php echo get_the_date('Y-m-d', $post->ID); ?>
								</time>
              </div>
            </div>
          </div>
        </div>
      </div>
			<?php } } ?>

    </div>
  </div>
</div>
