<div class="relative bg-white">
  <div class="mx-auto max-w-7xl px-6">
    <div class="flex items-center justify-between border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
      <div class="flex justify-start lg:w-0 lg:flex-1">
        <a href="<?php echo site_url(); ?>">
          <span class="sr-only">Your Company</span>
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
	        <a href="<?php echo site_url('dashboard'); ?>" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
						<svg class="w-10 h-10 fill-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M496 192c2.7 0 5.3 .1 8 .2C475.6 81.7 375.4 0 256 0C114.6 0 0 114.6 0 256S114.6 512 256 512c39.5 0 77-9 110.4-25C337.6 455.7 320 413.9 320 368c0-97.2 78.8-176 176-176zM320 352c0 35.3-28.7 64-64 64s-64-28.7-64-64c0-26.9 16.5-49.9 40-59.3V88 64h48V88 292.7c23.5 9.5 40 32.5 40 59.3zM144 176c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32zm-16 80c0 17.7-14.3 32-32 32s-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32zM400 144c0 17.7-14.3 32-32 32s-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32zm96 368c79.5 0 144-64.5 144-144s-64.5-144-144-144s-144 64.5-144 144s64.5 144 144 144zm24-224l-10.7 64H576L472 448l10.7-64H416l104-96z"/></svg>
					</a>
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
