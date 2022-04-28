function initHeaderScripts() {
}

jQuery('.button__trigger-register').click(function() {
	jQuery('.login-box').css('opacity', '0');
	jQuery('.login-box').css('visibility', 'hidden');
	jQuery('.login-box').css('height', '0');

	jQuery('.register-box').css('opacity', '1');
	jQuery('.register-box').css('visibility', 'visible');
	jQuery('.register-box').css('height', '100%');
  });

    


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


	  jQuery('.menu-item a' ).addClass( "link" );



export { initHeaderScripts };
