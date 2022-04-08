function initHeaderScripts() {
}


var header = jQuery('.header'),
	scrollPrev = 0;

jQuery(window).scroll(function() {
	var scrolled = jQuery(window).scrollTop();
 
	if ( scrolled > 100 && scrolled > scrollPrev ) {
		header.addClass('out');
	} else {
		header.removeClass('out');
	}
	scrollPrev = scrolled;
});
export { initHeaderScripts };
