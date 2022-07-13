<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package baby-brand
 */

?>

<footer id="colophon" class="site-footer footer desktop">
    <div class="container">
        <div class="footer__body">
            <p class="footer__text">2021 Baby Brand / <?php _e('Based in Warsaw', 'baby-brand')?></p>
            <div class="footer__menu">
                <ul class="footer__list">
                    <li class="footer__item"><a href="/contact/"><?php _e('Contact', 'baby-brand')?> </a></li>
                    <li class="footer__item"><a href="/about/"><?php _e('about', 'baby-brand')?></a></li>
                    <li class="footer__item"><a href="/store-policy/"> <?php _e('store policy', 'baby-brand')?> </a></li>
                    <li class="footer__item"><a href="">Instagram </a></li>
                    <li class="footer__item"><a href="">Facebook</a></li>
                    <li class="footer__item"><a href="">pinterest</a></li>
                    <li class="footer__item"><a href="">newsletter</a></li>
                </ul>

            </div>
            <p class="footer__text">PH Studio</p>
        </div>
    </div>
</footer><!-- #colophon -->

<footer id="colophon" class="site-footer footer mobile">
    <div class="container">
        <div class="footer__body">

            <div class="footer__menu">
                <ul class="footer__list">
                    <li class="footer__item"><a href="/contact/"><?php _e('Contact', 'baby-brand')?> </a></li>
                    <li class="footer__item"><a href="/about/"><?php _e('about', 'baby-brand')?></a></li>
                    <li class="footer__item"><a href="/store-policy/"> <?php _e('store policy', 'baby-brand')?> </a></li>
                    <li class="footer__item"><a href="">Instagram </a></li>
                    <li class="footer__item"><a href="">Facebook</a></li>
                    <li class="footer__item"><a href="">pinterest</a></li>
                    <li class="footer__item"><a href="">newsletter</a></li>
                </ul>

            </div>
            <div class="footer__bottom">
                <p class="footer__text">2021 Baby Brand / <?php _e('Based in Warsaw', 'baby-brand')?></p>
                <!-- <p class="footer__text">PH Studio</p> -->
            </div>

        </div>
    </div>
</footer><!-- #colophon -->
<div class="cookies-block">
    <div class="cookies-block__body">
        <div class="first-block">
            <div class="cookies-block__title"> <?php _e('This is all you really need in your
                little ones minimalistic wardrobe.
                get -15% for your first shopping!', 'baby-brand')?> 

            </div>
            <div class="close"><span>+</span></div>
        </div>

        <div class="cookies-block__subtitle"><?php _e('join to our newsletter.', 'baby-brand')?></div>

        <form action="" class="cookies-block__form">
            <input class="cookies-block__email uncorrect-email " type="text" placeholder="Email">
            <div class="cookies-block__privacy mobile"><?php _e('By subscribing you agree to our.', 'baby-brand')?> <br>
                <a href="/store-policy/"><?php _e('Privacy Policy.', 'baby-brand')?></a>
            </div>
            <button class="cookies-block__button"><?php _e('subscribe', 'baby-brand')?></button>
        </form>

        <div class="cookies-block__privacy desktop"><?php _e('By subscribing you agree to our', 'baby-brand')?> <br>
            <a href="/store-policy/"><?php _e('Privacy Policy.', 'baby-brand')?></a>
        </div>
        <!-- <div class="cookies-block__privacy uncorrect-privacy">Please correct your email address.
        </div>
        <div class="cookies-block__privacy data-email ">This email is already subscribed.
        </div> -->
    </div>

</div><!-- #page --> <? site_cookies_banner() ?>

<?php wp_footer(); ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script>
    jQuery('.remove_from_wishlist').data("title", jQuery('.remove_from_wishlist').attr("title")).removeAttr("title");
</script>

<script type="module">
    import Swiper from 'https://unpkg.com/swiper@8/swiper-bundle.esm.browser.min.js'

    var mainScreenSwiper = new Swiper('.first-screen.swiper', {
        slidesPerView: 1,
        spaceBetween: 0,
        speed: 800,
        autoplay: {
            delay: 4000
        },
        loop: true,

    });

    var productSwiper = new Swiper('.product-mobile.swiper', {
        slidesPerView: 1,
        spaceBetween: 0,
        speed: 800,
        autoplay: {
            delay: 4000
        },
        loop: true,

    });

    var orderSwiper = new Swiper('.swiper.order-slider', {
        slidesPerView: 1,
        spaceBetween: 0,
        navigation: {
            nextEl: '.swiper-button-order-next',
            prevEl: '.swiper-button-order-prev',
        },

    });

    var relatedSwiper = new Swiper('.swiper-container.related-product', {
        slidesPerView: 1,
        spaceBetween: 0,
        speed: 800,
        autoplay: {
            delay: 4000
        },
        loop: true,
        breakpoints: {
            320: {
                slidesPerView: 1,
                loop: false,
            },
            768: {
                slidesPerView: 2,
            },

            1200: {
                slidesPerView: 4,
            }
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

<script>

jQuery(document).ready(function() {
    setTimeout(() => {
      jQuery('[data-fancybox]').fancybox({});
    })
  });

</script>
</body>

</html>