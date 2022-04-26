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

jQuery( ".shop" ).hover(
	function() {
	  jQuery('.shop-list' ).addClass( "hover" );
	}, function() {
	  jQuery('.shop-list' ).removeClass( "hover" );
	}
  );

  jQuery( ".header-list__item" ).hover(
	function() {
	  jQuery(this).addClass( "change_color" );
	  jQuery('.header-list__item .link').addClass('opacity');
	}, function() {
	  jQuery(this).removeClass( "change_color" );
	  jQuery('.header-list__item .link').removeClass('opacity')
	}
  );

  if (jQuery(".header-list__item").hasClass("change_color") && jQuery( ".header-list__item" ).hover()) {
	jQuery('.header-list__item.change_color a').css('color', 'red')
	// jQuery('.header-list__item a').css('color', '#939598')
  }else{

  }

export { initHeaderScripts };
