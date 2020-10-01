(function ($, root, undefined) {

	$(function () {

		'use strict';

		// DOM ready, take it away

		$('#nav-lines').click(function () {
			$(this).toggleClass('open');
			$('body').toggleClass('overflow-hidden').toggleClass('w-100');
			$('.header-nav').toggleClass('burger-opened');
			$('main').toggleClass('with-filter');
			$('.burger-content').toggleClass('burger-opened');
		});
		
	});

})(jQuery, this);
