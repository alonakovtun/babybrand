import { ready } from "./utils";
import { initHeaderScripts } from "./header";

function initHomePageScripts() {}

(function () {
    const config = window.js_config;

    ready(() => {
        console.log("ready", { config });

        initHeaderScripts();

        initHomePageScripts();
    });
})();

const miniCart = () => {
    const triggerButton = document.querySelector(".mini-cart-trigger"),
        cart = document.querySelector(".mini-cart"),
        closeButton = document.querySelector(".mini-cart__close");

    document.addEventListener("click", function (e) {
        if (!e.target.closest(".mini-cart-trigger")) {
            if (cart.classList.contains("_active")) {
                if (e.target.closest(".mini-cart") == null) {
                    cart.classList.remove("_active");
                    document.body.classList.remove("mini-cart_active");
                }
            }
        }
    });

    triggerButton.addEventListener("click", (e) => {
        e.preventDefault();

        cart.classList.add("_active");
        document.body.classList.add("mini-cart_active");
    });

    closeButton.addEventListener("click", (e) => {
        e.preventDefault();

        cart.classList.remove("_active");
        document.body.classList.remove("mini-cart_active");
    });
};

jQuery(".menu-item").children("a").addClass("link");
jQuery(".menu-item").addClass("header-list__item");

jQuery(".filters_title").click(function () {
    jQuery(".filters-popup").slideToggle("slow","linear");

    jQuery('#filter-toggle-btn').text(jQuery('#filter-toggle-btn').text() == 'Close Filters' ? 'Filters' : 'Close Filters');

});

jQuery(".item-checkout__name.ship").click(function () {
  jQuery('.item-checkout__option.shipping').find('> .option-item__plus').toggleClass('minus');
});



jQuery( ".item-bottom__link" ).hover(
	function() {
	  jQuery(this).addClass( "dif_color" );
	  jQuery('.item-bottom__link').addClass('opacity');
	}, function() {
	  jQuery(this).removeClass( "dif_color" );
	  jQuery('.item-bottom__link').removeClass('opacity')
	}
  );
//window.location.href
  jQuery( ".adress__link" ).hover(
	function() {
	  jQuery(this).addClass( "dif_color" );
	  jQuery('.adress__link').addClass('opacity');
	}, function() {
	  jQuery(this).removeClass( "dif_color" );
	  jQuery('.adress__link').removeClass('opacity')
	}
  );

  
  jQuery( ".myacc" ).each(function() {
      if (jQuery(this).attr('href') == window.location.href) {
        jQuery(this).addClass( "dif_color" );
        jQuery( ".myacc" ).not(jQuery(this)).addClass( "opacity" );
      }
  });

  jQuery(document).ready(function () {
    jQuery(window).on("resize", function (e) {
        checkScreenSize();
    });

    checkScreenSize();
    
    function checkScreenSize(){
        var newWindowWidth = jQuery(window).width();
        if (newWindowWidth > 768) {
          jQuery( ".item-cart" ).hover(
            function() {
              jQuery('.add_to_wishlist img').attr('src', '/wp-content/themes/baby-brand/assets/img/white-heart.png');
            }, function() {
                  jQuery('.add_to_wishlist img').attr('src', '/wp-content/uploads/2022/04/producticon.png');
            }
            );

            jQuery( ".item-cart" ).hover(
              function() {
                jQuery('.delete_item   img').attr('src', '/wp-content/themes/baby-brand/assets/img/heart-white.png');
              }, function() {
                    jQuery('.delete_item   img').attr('src', '/wp-content/uploads/2022/05/black-heart.png');
              }
              );
        }
    }
});
 



  jQuery(document).ready(function () {
    jQuery(".item-bottom__list").each(function () {
        jQuery(this).click(function () {
            var nextElem = jQuery(this).find(".item-bottom__text");

            jQuery(".item-bottom__text")
                .not(nextElem)
                .each(function () {
                    jQuery(this).hide();
                });

            if (nextElem.css("display") === "block") {
                nextElem.hide();
                return;
            }

            nextElem.fadeIn(500);
        });
    });
});


jQuery('.product-mobile .woocommerce-product-gallery__image').addClass('swiper-slide')



const cookiesBannerEl = document.querySelector(".cookies-bottom");

    if (cookiesBannerEl) {
        const bannerClosedByUser = localStorage.getItem(
            "cookies_banner_closed"
        );

        if (!bannerClosedByUser) {
            document.body.classList.add("cookies-banner-open");

            const closeBtnEl = cookiesBannerEl.querySelector(".cookies-bottom__button");

            closeBtnEl.addEventListener("click", (e) => {
                e.preventDefault();

                document.body.classList.remove("cookies-banner-open");

                localStorage.setItem("cookies_banner_closed", true);
            });
        }
    }


    jQuery(".size-block .title").click(function () {
      jQuery(this).toggleClass("change");
      jQuery(".size-block .title").not(this).removeClass("change");
  });
  
  jQuery(document).ready(function () {
      jQuery(".size-block .title").each(function () {
          jQuery(this).click(function () {
              var nextElem = jQuery(this).parent().find(".content");
  
              jQuery(".content")
                  .not(nextElem)
                  .each(function () {
                      jQuery(this).hide();
                  });
  
              if (nextElem.css("display") === "block") {
                  nextElem.hide();
                  return;
              }
  
              nextElem.fadeIn(500);
          });
      });
  });


export default miniCart;
