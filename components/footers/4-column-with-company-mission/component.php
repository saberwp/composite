<footer class="bg-white" aria-labelledby="footer-heading">
  <h2 id="footer-heading" class="sr-only">Footer</h2>
  <div class="mx-auto max-w-7xl px-6 pb-8 pt-16 sm:pt-24 lg:px-8 lg:pt-32">
    <div class="xl:grid xl:grid-cols-3 xl:gap-8">
      <div class="space-y-8">
				<a href="<?php echo site_url(); ?>">
          <span class="sr-only"><?php echo get_field('company_name', 'option'); ?></span>
          <?php echo get_field('logo', 'option'); ?>
        </a>
        <p class="text-sm leading-6 text-gray-600">
					<?php echo $data->company_mission; ?>
				</p>
        <div class="flex space-x-6">
					<?php
						if( ! empty( $data->social_accounts )) {
							foreach( $data->social_accounts as $social_account ) {
					?>

		        <a href="<?php echo $social_account['url']; ?>" class="text-gray-400 hover:text-gray-300">
		          <span class="sr-only"><?php echo $social_account['service']; ?></span>
		          <?php echo $social_account['icon']; ?>
		        </a>

					<?php } } ?>
        </div>
      </div>
      <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
        <div class="md:grid md:grid-cols-2 md:gap-8">
          <div>
            <h3 class="text-sm font-semibold leading-6 text-gray-900">Solutions</h3>
						<?php
							wp_nav_menu(
								array(
									'theme_location'  => 'footer_1',
									'menu_class'      => 'mt-6 space-y-4',
									'walker'          => new \Composite\MenuWalkerFooter(),
									'container_class' => 'composite-menu',
									'depth'           => 1,
								)
							);
						?>
          </div>
          <div class="mt-10 md:mt-0">
            <h3 class="text-sm font-semibold leading-6 text-gray-900">Support</h3>
						<?php
							wp_nav_menu(
								array(
									'theme_location'  => 'footer_2',
									'menu_class'      => 'mt-6 space-y-4',
									'walker'          => new \Composite\MenuWalkerFooter(),
									'container_class' => 'composite-menu',
									'depth'           => 1,
								)
							);
						?>
          </div>
        </div>
        <div class="md:grid md:grid-cols-2 md:gap-8">
          <div>
            <h3 class="text-sm font-semibold leading-6 text-gray-900">Company</h3>
						<?php
							wp_nav_menu(
								array(
									'theme_location'  => 'footer_3',
									'menu_class'      => 'mt-6 space-y-4',
									'walker'          => new \Composite\MenuWalkerFooter(),
									'container_class' => 'composite-menu',
									'depth'           => 1,
								)
							);
						?>
          </div>
          <div class="mt-10 md:mt-0">
            <h3 class="text-sm font-semibold leading-6 text-gray-900">Legal</h3>
						<?php
							wp_nav_menu(
								array(
									'theme_location'  => 'footer_4',
									'menu_class'      => 'mt-6 space-y-4',
									'walker'          => new \Composite\MenuWalkerFooter(),
									'container_class' => 'composite-menu',
									'depth'           => 1,
								)
							);
						?>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-16 border-t border-gray-900/10 pt-8 sm:mt-20 lg:mt-24">
      <p class="text-xs leading-5 text-gray-500">&copy; <?php echo $data->year; ?> <?php echo $data->company_name; ?>. All rights reserved.</p>
    </div>
  </div>
</footer>
