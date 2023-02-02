const compositeMenu = {
  init() {
    this.flyoutMenus = document.querySelectorAll('.composite-flyout');
    this.addEventListeners();
  },

  addEventListeners() {
    this.flyoutMenus.forEach((menu) => {
      menu.addEventListener('click', this.flyoutHandler);
    });

    document.addEventListener('click', (event) => {
      const isFlyout = event.target.closest('.composite-flyout');
      if (!isFlyout) {
        compositeMenu.closeAllMenus();
      }
    });
  },

  flyoutHandler(event) {

		console.log('doing flyoutHandler...')

    const flyoutNav = event.currentTarget.querySelector('.composite-flyout-nav');

		if( flyoutNav.classList.contains('composite-flyout-open') ) {
			// Close it.
			compositeMenu.closeAllMenus();
		} else {

			// Close all.
			compositeMenu.closeAllMenus();

			// Open it.
			flyoutNav.classList.toggle('hidden');
			flyoutNav.classList.toggle('composite-flyout-open');
		}
  },

  closeAllMenus() {
    this.flyoutMenus.forEach((menu) => {
      const flyoutNav = menu.querySelector('.composite-flyout-nav');
      flyoutNav.classList.add('hidden');
			flyoutNav.classList.remove('composite-flyout-open');
    });
  }
};

compositeMenu.init();
