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

export default miniCart;
