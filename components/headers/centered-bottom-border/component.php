<div class="relative bg-white">
  <div class="mx-auto max-w-7xl px-6">
    <div class="flex items-center justify-between border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
      <div class="flex justify-start lg:w-0 lg:flex-1">
        <a href="<?php echo site_url(); ?>">
          <span class="sr-only">Company Name</span>
          <?php echo get_field('logo', 'option'); ?>
        </a>
      </div>
      <div class="-my-2 -mr-2 md:hidden">
        <button type="button" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
          <span class="sr-only">Open menu</span>
          <!-- Heroicon name: outline/bars-3 -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>

			<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary-menu',
						'menu_class'      => 'flex gap-4',
						'walker'          => new \Composite\MenuWalker(),
						'container_class' => 'composite-menu',
					)
				);
			?>

      <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
				<?php if( ! is_user_logged_in() ) { ?>
	        <a href="<?php echo site_url('login'); ?>" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">Sign in</a>
	        <a href="<?php echo site_url('register'); ?>" class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Sign up</a>
				<?php } ?>
				<?php if( is_user_logged_in() ) { ?>
					<div class="flex gap-2">
						<a class="block hover:opacity-80" href="<?php echo site_url('account'); ?>">
							<svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
							<ellipse cx="20.5389" cy="20" rx="20.4413" ry="20" fill="#1E293B"/>
							<path d="M21.0499 19C24.4371 19 27.1823 16.3141 27.1823 13C27.1823 9.68594 24.4371 7 21.0499 7C18.6736 7 16.6135 8.32188 15.5978 10.2531C15.4541 9.98125 15.272 9.72344 15.0373 9.49844C13.8396 8.32656 11.7842 8.43906 11.7842 8.43906C11.7842 8.43906 11.6693 10.45 12.867 11.6219C13.1449 11.8937 13.4706 12.0953 13.806 12.25C13.4706 12.4 13.1449 12.6063 12.867 12.8781C11.6693 14.05 11.7842 16.0609 11.7842 16.0609C11.7842 16.0609 13.8396 16.1734 15.0373 15.0016C15.0948 14.9453 15.1523 14.8844 15.205 14.8234C15.9907 17.2516 18.3095 19.0094 21.0499 19.0094V19ZM31.7816 31L28.7154 21.25H25.0743L21.0499 26.5L17.0255 21.25H13.3844L10.3182 31H31.7816ZM17.9837 11.5H24.1161H24.8827V13H24.1161H17.9837H17.2172V11.5H17.9837Z" fill="white" fill-opacity="0.25"/>
							</svg>
						</a>

						<a class="block hover:opacity-80" href="<?php echo site_url('dashboard'); ?>">
							<svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
							<ellipse cx="20.4901" cy="20" rx="20.4413" ry="20" fill="#565F6C"/>
							<path d="M40.9315 20C40.9315 31.0469 31.7808 40 20.4901 40C9.19946 40 0.0487671 31.0469 0.0487671 20C0.0487671 8.95312 9.19946 0 20.4901 0C31.7808 0 40.9315 8.95312 40.9315 20ZM22.4065 22.8672V6.875C22.4065 5.83984 21.5521 5 20.4901 5C19.4281 5 18.5737 5.83984 18.5737 6.875V22.8672C16.6973 23.6016 15.3798 25.3984 15.3798 27.5C15.3798 30.2578 17.6714 32.5 20.4901 32.5C23.3088 32.5 25.6004 30.2578 25.6004 27.5C25.6004 25.3984 24.2829 23.6016 22.4065 22.8672ZM11.547 13.75C12.9604 13.75 14.1022 12.6328 14.1022 11.25C14.1022 9.86719 12.9604 8.75 11.547 8.75C10.1337 8.75 8.99186 9.86719 8.99186 11.25C8.99186 12.6328 10.1337 13.75 11.547 13.75ZM7.71427 17.5C6.30334 17.5 5.1591 18.6172 5.1591 20C5.1591 21.3828 6.30334 22.5 7.71427 22.5C9.1276 22.5 10.2694 21.3828 10.2694 20C10.2694 18.6172 9.1276 17.5 7.71427 17.5ZM33.266 22.5C34.6793 22.5 35.8211 21.3828 35.8211 20C35.8211 18.6172 34.6793 17.5 33.266 17.5C31.8526 17.5 30.7108 18.6172 30.7108 20C30.7108 21.3828 31.8526 22.5 33.266 22.5ZM29.4332 8.75C28.0199 8.75 26.878 9.86719 26.878 11.25C26.878 12.6328 28.0199 13.75 29.4332 13.75C30.8465 13.75 31.9884 12.6328 31.9884 11.25C31.9884 9.86719 30.8465 8.75 29.4332 8.75Z" fill="#1E293B"/>
							</svg>
						</a>
					</div>
				<?php } ?>
			</div>
    </div>
  </div>

  <!--
    Mobile menu, show/hide based on mobile menu state.

    Entering: "duration-200 ease-out"
      From: "opacity-0 scale-95"
      To: "opacity-100 scale-100"
    Leaving: "duration-100 ease-in"
      From: "opacity-100 scale-100"
      To: "opacity-0 scale-95"
  -->
  <div class="absolute inset-x-0 top-0 origin-top-right transform p-2 transition md:hidden">
    <div class="divide-y-2 divide-gray-50 rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
      <div class="px-5 pt-5 pb-6">
        <div class="flex items-center justify-between">
          <div>
            <?php echo get_field('logo', 'option'); ?>
          </div>
          <div class="-mr-2">
            <button type="button" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
              <span class="sr-only">Close menu</span>
              <!-- Heroicon name: outline/x-mark -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
        <div class="mt-6">
          <nav class="grid gap-y-8">
            <a href="#" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
              <!-- Heroicon name: outline/chart-bar -->
              <svg class="h-6 w-6 flex-shrink-0 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
              </svg>
              <span class="ml-3 text-base font-medium text-gray-900">Analytics</span>
            </a>

            <a href="#" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
              <!-- Heroicon name: outline/cursor-arrow-rays -->
              <svg class="h-6 w-6 flex-shrink-0 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
              </svg>
              <span class="ml-3 text-base font-medium text-gray-900">Engagement</span>
            </a>

            <a href="#" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
              <!-- Heroicon name: outline/shield-check -->
              <svg class="h-6 w-6 flex-shrink-0 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
              </svg>
              <span class="ml-3 text-base font-medium text-gray-900">Security</span>
            </a>

            <a href="#" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
              <!-- Heroicon name: outline/squares-2x2 -->
              <svg class="h-6 w-6 flex-shrink-0 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
              </svg>
              <span class="ml-3 text-base font-medium text-gray-900">Integrations</span>
            </a>

            <a href="#" class="-m-3 flex items-center rounded-md p-3 hover:bg-gray-50">
              <!-- Heroicon name: outline/arrow-path -->
              <svg class="h-6 w-6 flex-shrink-0 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
              </svg>
              <span class="ml-3 text-base font-medium text-gray-900">Automations</span>
            </a>
          </nav>
        </div>
      </div>
      <div class="space-y-6 py-6 px-5">
        <div class="grid grid-cols-2 gap-y-4 gap-x-8">
          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Pricing</a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Docs</a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Help Center</a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Guides</a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Events</a>

          <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">Security</a>
        </div>
        <div>
          <a href="#" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Sign up</a>
          <p class="mt-6 text-center text-base font-medium text-gray-500">
            Existing customer?
            <a href="#" class="text-indigo-600 hover:text-indigo-500">Sign in</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
