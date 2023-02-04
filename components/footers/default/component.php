<footer class="bg-gray-800" aria-labelledby="footer-heading">
  <h2 id="footer-heading" class="sr-only">Footer</h2>
  <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
    <div class="pb-8 xl:grid xl:grid-cols-5 xl:gap-8">
      <div class="grid grid-cols-2 gap-8 xl:col-span-4">
        <div class="md:grid md:grid-cols-2 md:gap-8">
          <div>
            <h3 class="text-base font-medium text-white">Solutions</h3>
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
          <div class="mt-12 md:mt-0">
            <h3 class="text-base font-medium text-white">Support</h3>
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
            <h3 class="text-base font-medium text-white">Company</h3>
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
            </ul>
          </div>
          <div class="mt-12 md:mt-0">
            <h3 class="text-base font-medium text-white">Legal</h3>
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
    <div class="mt-8 border-t border-gray-700 pt-8 md:flex md:items-center md:justify-between">
      <div class="flex space-x-6 md:order-2">

				<?php
					$social_accounts = get_field('social_accounts', 'option');
					if( ! empty( $social_accounts )) {
						foreach( $social_accounts as $social_account ) {
				?>

	        <a href="<?php echo $social_account['url']; ?>" class="text-gray-400 hover:text-gray-300">
	          <span class="sr-only"><?php echo $social_account['service']; ?></span>
	          <?php echo $social_account['icon']; ?>
	        </a>

				<?php } } ?>

      </div>
      <p class="mt-8 text-base text-gray-400 md:order-1 md:mt-0">&copy; 2023 <?php echo get_field('company_name','options'); ?>. All rights reserved.</p>
    </div>
  </div>
</footer>
