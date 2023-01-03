<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="bg-gray-800">
  <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8" aria-label="Top">
    <div class="flex w-full items-center justify-between border-b border-gray-600 py-6 lg:border-none">
      <div class="flex items-center">
        <a href="<?php echo site_url(); ?>">
          <span class="sr-only">Your Company</span>
          <?php echo get_field('logo', 'option'); ?>
        </a>
        <div class="ml-10 hidden space-x-8 lg:block">
					<?php
						$header_menu = get_field('header_menu', 'option');
						if( ! empty( $header_menu ) ) {
							foreach( $header_menu as $header_menu_link ) {
					?>
          	<a href="<?php echo site_url($header_menu_link['slug']); ?>" class="text-base font-medium text-white hover:text-indigo-50"><?php echo $header_menu_link['title']; ?></a>
					<?php } } ?>
        </div>
      </div>
      <div class="ml-10 space-x-4">
        <a href="<?php echo site_url('login'); ?>" class="inline-block rounded-md border border-transparent bg-indigo-500 py-2 px-4 text-base font-medium text-white hover:bg-opacity-75">Sign in</a>
        <a href="<?php echo site_url('register'); ?>" class="inline-block rounded-md border border-transparent bg-white py-2 px-4 text-base font-medium text-indigo-600 hover:bg-indigo-50">Sign up</a>
      </div>
    </div>
    <div class="flex flex-wrap justify-center space-x-6 py-4 lg:hidden">
      <a href="#" class="text-base font-medium text-white hover:text-indigo-50">Solutions</a>

      <a href="#" class="text-base font-medium text-white hover:text-indigo-50">Pricing</a>

      <a href="#" class="text-base font-medium text-white hover:text-indigo-50">Docs</a>

      <a href="#" class="text-base font-medium text-white hover:text-indigo-50">Company</a>
    </div>
  </nav>
</header>
