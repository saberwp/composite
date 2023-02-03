<header class="bg-indigo-600">
  <nav class="mx-auto max-w-7xl px-6 lg:px-8" aria-label="Top">
    <div class="flex w-full items-center justify-between border-b border-indigo-500 py-6 lg:border-none">
      <div class="flex items-center">
        <a href="<?php echo site_url(); ?>">
          <span class="sr-only"><?php echo get_field('company_name', 'option'); ?></span>
          <?php echo get_field('logo', 'option'); ?>
        </a>
        <div class="ml-10 hidden space-x-8 lg:block">
					<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'primary-menu',
								'menu_class'      => 'flex gap-4',
								'walker'          => new \Composite\MenuWalker(),
								'container_class' => 'composite-menu',
								'depth'           => 1,
							)
						);
					?>
        </div>
      </div>
      <div class="ml-10 space-x-4">
        <a href="<?php echo site_url('login'); ?>" class="inline-block rounded-md border border-transparent bg-indigo-500 py-2 px-4 text-base font-medium text-white hover:bg-opacity-75">Sign in</a>
        <a href="<?php echo site_url('register'); ?>" class="inline-block rounded-md border border-transparent bg-white py-2 px-4 text-base font-medium text-indigo-600 hover:bg-indigo-50">Sign up</a>
      </div>
    </div>
    <div class="flex flex-wrap justify-center gap-x-6 py-4 lg:hidden">
      <a href="#" class="text-base font-medium text-white hover:text-indigo-50">Solutions</a>

      <a href="#" class="text-base font-medium text-white hover:text-indigo-50">Pricing</a>

      <a href="#" class="text-base font-medium text-white hover:text-indigo-50">Docs</a>

      <a href="#" class="text-base font-medium text-white hover:text-indigo-50">Company</a>
    </div>
  </nav>
</header>
