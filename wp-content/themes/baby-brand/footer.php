<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shop
 */

?>

<footer id="colophon" class="site-footer footer desktop">
    <div class="container">
        <div class="footer__body">
            <p class="footer__text">2021 Baby Brand / Based in Warsaw</p>
            <div class="footer__menu">
                <ul class="footer__list">
                    <li class="footer__item"><a href="/contact/">Contact </a></li>
                    <li class="footer__item"><a href="/about/">about</a></li>
                    <li class="footer__item"><a href="/store-policy/"> store policy </a></li>
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
                    <li class="footer__item"><a href="/contact/">Contact </a></li>
                    <li class="footer__item"><a href="/about/">about</a></li>
                    <li class="footer__item"><a href="/store-policy/"> store policy </a></li>
                    <li class="footer__item"><a href="">Instagram </a></li>
                    <li class="footer__item"><a href="">Facebook</a></li>
                    <li class="footer__item"><a href="">pinterest</a></li>
                    <li class="footer__item"><a href="">newsletter</a></li>
                </ul>

            </div>
            <div class="footer__bottom">
                <p class="footer__text">2021 Baby Brand / Based in Warsaw</p>
                <p class="footer__text">PH Studio</p>
            </div>

        </div>
    </div>
</footer><!-- #colophon -->
<div class="cookies-block">
    <div class="cookies-block__body">
        <img src="../img/iconX.png" alt="" class="cookies-block__icon">
        <div class="cookies-block__title">This is all you really need in your
            little ones minimalistic wardrobe.
            get -15% for your first shopping!</div>
        <div class="cookies-block__subtitle">join to our newsletter.</div>
        <form action="" class="cookies-block__form">
            <input class="cookies-block__email uncorrect-email " type="text" placeholder="Email@gmail.com">
            <button class="cookies-block__button">subscribe</button>
        </form>

        <div class="cookies-block__privacy">By subscribing you agree to our <br>
            <a href="">Privacy Policy.</a>
        </div>
        <div class="cookies-block__privacy uncorrect-privacy">Please correct your email address.
        </div>
        <div class="cookies-block__privacy data-email ">This email is already subscribed.
        </div>
    </div>
</div>

</div><!-- #page -->
<? site_cookies_banner(); ?>

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

var mainScreenSwiper = new Swiper('.product-mobile.swiper', {
  slidesPerView: 1,
  spaceBetween: 0,
  speed: 800,
  autoplay: {
    delay: 4000
  },
  loop: true,
 
});

</script>
</body>

</html>