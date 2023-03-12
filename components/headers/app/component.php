<header class="w-full p-2 md:mx-auto md:max-w-5xl flex justify-between items-center">

	<div>
		<a class="hover:opacity-80" href="<?php echo site_url(); ?>">
			<span class="sr-only"><?php echo get_field('company_name', 'option'); ?></span>
			<?php echo get_field('logo', 'option'); ?>
		</a>
	</div>

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

</header>
