console.log('works');

(function($) {
	
	// $ Works! You can test it with next line if you like
	// console.log($);
	var $hamburger = $('.hamburger');
	var $menu = $('#menu-main');

	function mobileMenu() {
		$hamburger.click(function() {
			$(this).toggleClass('is-active');
			$menu.toggleClass('show-menu');
		});
	}

	$(document).ready(function() {
		mobileMenu();
	})
	
})( jQuery );