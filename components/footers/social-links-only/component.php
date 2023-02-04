<footer class="bg-white">
  <div class="mx-auto max-w-7xl py-12 px-6 md:flex md:items-center md:justify-between lg:px-8">
    <div class="flex justify-center space-x-6 md:order-2">
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
    <div class="mt-8 md:order-1 md:mt-0">
      <p class="text-center text-xs leading-5 text-gray-500">&copy; 2020 Your Company, Inc. All rights reserved.</p>
    </div>
  </div>
</footer>
