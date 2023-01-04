<!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<footer class="bg-gray-800" aria-labelledby="footer-heading">
  <h2 id="footer-heading" class="sr-only">Footer</h2>
  <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
    <div class="pb-8 xl:grid xl:grid-cols-5 xl:gap-8">
      <div class="grid grid-cols-2 gap-8 xl:col-span-4">
        <div class="md:grid md:grid-cols-2 md:gap-8">
          <div>
            <h3 class="text-base font-medium text-white">Solutions</h3>
            <ul role="list" class="mt-4 space-y-4">
							<?php
								$footer_menu_1 = get_field('footer_menu_1', 'option');
								if( ! empty( $footer_menu_1 ) ) {
									foreach( $footer_menu_1 as $footer_menu_1_link ) {
							?>
								<li>
		          		<a href="<?php echo site_url($footer_menu_1_link['slug']); ?>" class="text-base text-gray-300 hover:text-white"><?php echo $footer_menu_1_link['title']; ?></a>
								</li>
							<?php } } ?>
            </ul>
          </div>
          <div class="mt-12 md:mt-0">
            <h3 class="text-base font-medium text-white">Support</h3>
            <ul role="list" class="mt-4 space-y-4">
							<?php
								$footer_menu_2 = get_field('footer_menu_2', 'option');
								if( ! empty( $footer_menu_2 ) ) {
									foreach( $footer_menu_2 as $footer_menu_2_link ) {
							?>
								<li>
		          		<a href="<?php echo site_url($footer_menu_2_link['slug']); ?>" class="text-base text-gray-300 hover:text-white"><?php echo $footer_menu_2_link['title']; ?></a>
								</li>
							<?php } } ?>
            </ul>
          </div>
        </div>
        <div class="md:grid md:grid-cols-2 md:gap-8">
          <div>
            <h3 class="text-base font-medium text-white">Company</h3>
            <ul role="list" class="mt-4 space-y-4">
							<?php
								$footer_menu_3 = get_field('footer_menu_3', 'option');
								if( ! empty( $footer_menu_3 ) ) {
									foreach( $footer_menu_3 as $footer_menu_3_link ) {
							?>
								<li>
		          		<a href="<?php echo site_url($footer_menu_3_link['slug']); ?>" class="text-base text-gray-300 hover:text-white"><?php echo $footer_menu_3_link['title']; ?></a>
								</li>
							<?php } } ?>
            </ul>
          </div>
          <div class="mt-12 md:mt-0">
            <h3 class="text-base font-medium text-white">Legal</h3>
            <ul role="list" class="mt-4 space-y-4">
							<?php
								$footer_menu_4 = get_field('footer_menu_4', 'option');
								if( ! empty( $footer_menu_4 ) ) {
									foreach( $footer_menu_4 as $footer_menu_4_link ) {
							?>
								<li>
		          		<a href="<?php echo site_url($footer_menu_4_link['slug']); ?>" class="text-base text-gray-300 hover:text-white"><?php echo $footer_menu_4_link['title']; ?></a>
								</li>
							<?php } } ?>
            </ul>
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

<?php wp_footer(); ?>
</body>
</html>
