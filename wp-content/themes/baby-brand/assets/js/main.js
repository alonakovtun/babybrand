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
// jQuery(".menu-item").addClass("header-list__item");

jQuery(".filters_title").click(function () {
    jQuery(".filters-popup").slideToggle("slow", "linear");

    jQuery("#filter-toggle-btn").text(
        jQuery("#filter-toggle-btn").text() == "Close Filters"
            ? "Filters"
            : "Close Filters"
    );
});

jQuery(".header-list__item.cart .mini-cart-trigger").click(function () {
    jQuery(".header-list__item.cart").toggleClass("cart-open");
});

jQuery(".close-cart").click(function () {
    jQuery(".header-list__item.cart ").removeClass("cart-open");
});

jQuery(".item-checkout__name.ship").click(function () {
    jQuery(".item-checkout__option.shipping")
        .find("> .option-item__plus")
        .toggleClass("minus");
});

jQuery(".item-bottom__link").click(function () {
    jQuery(this).toggleClass("dif_color");
    jQuery(".item-bottom__link").not(jQuery(this)).removeClass("dif_color");
    jQuery(".item-bottom__link").not(jQuery(this)).addClass("opacity");
});

jQuery(".close-info").click(function () {
    jQuery(".item-bottom__link").removeClass("dif_color");
    jQuery(".item-bottom__link").removeClass("opacity");
    jQuery('.item-bottom__text').removeClass('_active');
    jQuery('.hidden_info').css('transform','translateY(0px)');
    jQuery('.hidden_info').css('visibility','visible');
    jQuery('.item-bottom').removeClass('_active');
    jQuery('.prev_next_buttons').css('visibility','visible')

});

jQuery(".adress__link").hover(
    function () {
        jQuery(this).addClass("dif_color");
        jQuery(".adress__link").addClass("opacity");
    },
    function () {
        jQuery(this).removeClass("dif_color");
        jQuery(".adress__link").removeClass("opacity");
    }
);

jQuery(".myacc").each(function () {
    if (jQuery(this).attr("href") == window.location.href) {
        jQuery(this).addClass("dif_color");
        jQuery(".myacc").not(jQuery(this)).addClass("opacity");
    }
});



jQuery(document).ready(function () {
    jQuery.ajax({
        url: "/wp-content/themes/baby-brand/template-parts/session.php",
         type: "POST",
         data : {'width' : jQuery(window).width() },
        success: function(html){
        }
      });
    jQuery(window).on("resize", function (e) {
        checkScreenSize();
    });

    checkScreenSize();

    function checkScreenSize() {
        var newWindowWidth = jQuery(window).width();
        
        if (newWindowWidth > 768) {
            jQuery(".cookies-bottom__button").html("Close");
            jQuery(".item-cart").hover(
                function () {
                    jQuery(".add_to_wishlist img").attr(
                        "src",
                        "/wp-content/themes/baby-brand/assets/img/white-heart.png"
                    );
                },
                function () {
                    jQuery(".add_to_wishlist img").attr(
                        "src",
                        "/wp-content/uploads/2022/04/producticon.png"
                    );
                }
            );

            jQuery(".item-cart").hover(
                function () {
                    jQuery(".delete_item   img").attr(
                        "src",
                        "/wp-content/themes/baby-brand/assets/img/heart-white.png"
                    );
                },
                function () {
                    jQuery(".delete_item   img").attr(
                        "src",
                        "/wp-content/uploads/2022/05/black-heart.png"
                    );
                }
            );

            var socialFloat = document.querySelector(".main-column__body");
            var footer = document.querySelector(".related.products");

            function checkOffset() {
                function getRectTop(el) {
                    var rect = el.getBoundingClientRect();
                    return rect.top;
                }

                if (
                    getRectTop(socialFloat) +
                        document.body.scrollTop +
                        socialFloat.offsetHeight >=
                    getRectTop(footer) + document.body.scrollTop - 10
                )
                    socialFloat.style.position = "absolute";
                if (
                    document.body.scrollTop + window.innerHeight <
                    getRectTop(footer) + document.body.scrollTop
                )
                    socialFloat.style.position = "fixed"; // restore when you scroll up

                // socialFloat.innerHTML =
                //     document.body.scrollTop + window.innerHeight;
            }

            document.addEventListener("scroll", function () {
                checkOffset();
            });

        }else{
            

            jQuery(".cookies-bottom__button").html("");
            jQuery(".cookies-bottom__button").addClass("mobile");

            jQuery("button.accountdetails__button").html("Save changes");
        }

    }

    jQuery(".item-bottom__list").each(function () {
        jQuery(this).click(function () {
            var nextElem = jQuery(this).find(".item-bottom__text");

            jQuery(".item-bottom__text")
                .not(nextElem)
                .each(function () {
                    jQuery(this).css("transform", "translateY(-485px)");
                    jQuery(this).removeClass("_active");
                    jQuery(".hidden_info").css("transform", "translateY(0px)");
                    jQuery(".hidden_info").css("visibility", "visible");
                    jQuery(".prev_next_buttons").css("visibility", "visible");
                   

                });

            if (nextElem.css("display") === "flex") {
                nextElem.css("transform", "translateY(-485px)");
                nextElem.removeClass("_active");
                jQuery(".hidden_info").css("transform", "translateY(0px)");
                jQuery(".hidden_info").css("visibility", "visible");
                jQuery(".prev_next_buttons").css("visibility", "visible");
                jQuery(".item-bottom").removeClass("_active")
                return;
            }

            nextElem.fadeIn(500);
            nextElem.addClass("_active");
            nextElem.removeClass("not_active");
            jQuery(".hidden_info").css("transform", "translateY(550px)");
            jQuery(".hidden_info").css("visibility", "hidden");
            jQuery(".prev_next_buttons").css("visibility", "hidden");
            jQuery(".item-bottom").addClass("_active")
        });
    });

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


jQuery(".product-mobile .woocommerce-product-gallery__image").addClass(
    "swiper-slide"
);

const cookiesBannerEl = document.querySelector(".cookies-bottom");

if (cookiesBannerEl) {
    const bannerClosedByUser = localStorage.getItem("cookies_banner_closed");

    if (!bannerClosedByUser) {
        document.body.classList.add("cookies-banner-open");

        const closeBtnEl = cookiesBannerEl.querySelector(
            ".cookies-bottom__button"
        );

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


// var PopUpCookie = getCookie("MyPopUpCookie");
// if (PopUpCookie == '') {
//         jQuery('.cookies-block').show();
//     } else {
//         jQuery('.cookies-block').hide();
//     }

// jQuery('.cookies-block .close').on('click', function () {
//     jQuery('.cookies-block').hide();
//     setCookie("MyPopUpCookie", "hide");
// });

// function setCookie(cname, cvalue) {
//     var d = new Date();
//     d.setTime(d.getTime() + (24*60*60*1000));
//     var expires = "expires=" + d.toUTCString();
//     document.cookie = cname + "=" + cvalue + "; " + expires;
// }

// function getCookie(cname) {
//     var name = cname + "=";
//     var ca = document.cookie.split(';');
//     for (var i = 0; i < ca.length; i++) {
//         var c = ca[i];
//         while (c.charAt(0) == ' ') c = c.substring(1);
//         if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
//     }
//     return "";
// }

var PopUpCookie = getCookie("MyPopUpCookie");
if (PopUpCookie == '') {
        jQuery('.mc4wp-form-1949').show();
    } else {
        jQuery('.mc4wp-form-1949').hide();
    }


jQuery('.mc4wp-form-1949 .close').on('click', function () {
    jQuery('.mc4wp-form-1949').hide();
    setCookie("MyPopUpCookie", "hide");
});

function setCookie(cname, cvalue) {
    var d = new Date();
    d.setTime(d.getTime() + (24*60*60*1000)); /* 2 days */
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}


jQuery(".footer__item").hover(
    function () {
        jQuery(this).addClass("change_color");
        jQuery(".footer__item a").addClass("opacity");
    },
    function () {
        jQuery(this).removeClass("change_color");
        jQuery(".footer__item a").removeClass("opacity");
    }
);

function showImg() {
    function reveal() {
        var reveals = document.querySelectorAll(
            ".categories__body .categories__column"
        );

        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 75;

            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");
            } else {
                reveals[i].classList.remove("active");
            }
        }
    }

    window.addEventListener("scroll", reveal);
}

function showAbout() {
    function reveal() {
        var reveals = document.querySelectorAll(".about__column, .stories__text, .stories__bottomimg, .stories__images");

        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 75;

            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");
            } else {
                reveals[i].classList.remove("active");
            }
        }
    }

    window.addEventListener("scroll", reveal);
}

showImg();
showAbout();

const fancyBox = () => {
    const images = document.querySelectorAll(
        ".woocommerce-product-gallery__wrapper img"
    );

    if (!images) return;

    images.forEach((element) => {
        element.setAttribute("data-fancybox", "");
    });
};

fancyBox();

jQuery(".footer__item.newsletter").click(function () {
    jQuery(".mc4wp-form-1949").css("display", "flex");
});


export default miniCart;
