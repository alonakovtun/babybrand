function initHeaderScripts() {
}


    const buttonTrigger = document.querySelector('.button__trigger-register'),
    visibileBox = document.querySelector('.login-box'),
    hiddenBox = document.querySelector('.register-box');

    buttonTrigger.addEventListener('click', (e) => {
    e.preventDefault();
    setTimeout(() => {
    visibileBox.style.opacity = '0';
	visibileBox.style.visibility = 'hidden';
	visibileBox.style.height = '0';
    hiddenBox.style.opacity = '1';
	hiddenBox.style.visibility = 'visible';
	hiddenBox.style.height = '100%';
    }, 1000)
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

  if (jQuery(".header-list__item").hasClass("change_color") && jQuery( ".header-list__item" ).hover()) {
	jQuery('.header-list__item.change_color a').css('color', 'red')
	// jQuery('.header-list__item a').css('color', '#939598')
  }else{

  }

export { initHeaderScripts };
