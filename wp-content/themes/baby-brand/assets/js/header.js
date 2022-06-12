function initHeaderScripts() {}

jQuery(".button__trigger-register").click(function () {
    jQuery(".login-box").css("display", "none");

    jQuery(".register-box").css("display", "block");
});

var header = jQuery(".header.desktop"),
    scrollPrev = 0;

jQuery(window).scroll(function () {
    var scrolled = jQuery(window).scrollTop();

    if (scrolled > 100 && scrolled > scrollPrev) {
        header.addClass("out");
    } else {
        header.removeClass("out");
    }
    scrollPrev = scrolled;
});

jQuery(".shop").hover(
    function () {
        jQuery(".shop-list").addClass("hover");
    },
    function () {
        jQuery(".shop-list").removeClass("hover");
    }
);

jQuery(".header-list__item").hover(
    function () {
        jQuery(this).addClass("change_color");
        jQuery(".header-list__item .link").addClass("opacity");
    },
    function () {
        jQuery(this).removeClass("change_color");
        jQuery(".header-list__item .link").removeClass("opacity");
    }
);



jQuery(".sub-menu .menu-item").hover(
    function () {
        jQuery(this).addClass("change_color");
        jQuery(this).find(".link").addClass("notopacity");
        jQuery(".sub-menu .menu-item .link.opacity").addClass("sub");
    },
    function () {
        jQuery(this).removeClass("change_color");
        jQuery(this).find(".link").removeClass("notopacity");
        jQuery(".sub-menu .menu-item .link.opacity").removeClass("sub");
    }
);

jQuery(".menu-item-has-children").hover(
    function () {
        jQuery(this).addClass("change_color");
        jQuery(this).find(".link").addClass("notopacity");
        jQuery(".menu-item-has-children .link.opacity").addClass("sub");
    },
    function () {
        jQuery(this).removeClass("change_color");
        jQuery(this).find(".link").removeClass("notopacity");
        jQuery(".menu-item-has-children .link.opacity").removeClass("sub");
    }
);


jQuery(".menu-item a").addClass("link");

jQuery("#mobile-menu-toggle").click(function () {
    jQuery(".header-list.mobile").toggleClass("is_active");
    jQuery(".header.mobile").toggleClass("is_active");
});

jQuery(".header-list__item").click(function () {
    jQuery(this).toggleClass("change");
    jQuery(".header-list__item").not(this).removeClass("change");
});

jQuery(document).ready(function () {
    jQuery(".header-list__item").each(function () {
        jQuery(this).click(function () {
            var nextElem = jQuery(this).find(".list-block");

            jQuery(".list-block")
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

export { initHeaderScripts };
