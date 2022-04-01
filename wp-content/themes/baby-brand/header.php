<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site wrapper">
	<header id="masthead" class="site-header header">
    <div class="header__container container">
                <div class="header__body">
                    <ul class="header-list">
                        <li class="header-list__item"><a class="link" href="/shop/">Shop</a>
                            <div class="shopmenu__block header-block">
                                <div class="header-block__container container">
                                    <div class="shopmenu-block__body">
                                        <div class="shopmenu-block__column">
                                            <div class="shopmenu-block-top">
                                                <div class="shopmenu-block__text">babies (0/12m)
                                                </div>
                                                <div class="shopmenu-block__text">shop all</div>
                                            </div>
                                            <div class="shopmenu-block-bottom">
                                                <div class="shopmenu-block__text">Body</div>
                                                <div class="shopmenu-block__text">T-shirts
                                                </div>
                                                <div class="shopmenu-block__text">sweatshirts</div>
                                                <div class="shopmenu-block__text">sweatshirts</div>
                                                <div class="shopmenu-block__text">Shorts</div>
                                                <div class="shopmenu-block__text">jackets</div>
                                            </div>
                                        </div>
                                        <div class="shopmenu-block__column">
                                            <div class="shopmenu-block-top">
                                                <div class="shopmenu-block__text">kids (1/8Y)

                                                </div>
                                                <div class="shopmenu-block__text">shop all</div>
                                            </div>
                                            <div class="shopmenu-block-bottom">
                                                <div class="shopmenu-block__text">Body</div>
                                                <div class="shopmenu-block__text">T-shirts
                                                </div>
                                                <div class="shopmenu-block__text">Trousers
                                                </div>
                                                <div class="shopmenu-block__text">leggings
                                                </div>
                                                <div class="shopmenu-block__text">Shorts</div>
                                                <div class="shopmenu-block__text">Dresses
                                                </div>
                                                <div class="shopmenu-block__text">jackets
                                                </div>
                                                <div class="shopmenu-block__text">Dresses
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shopmenu-block__column">
                                            <div class="shopmenu-block-top">
                                                <div class="shopmenu-block__text">accessories

                                                </div>
                                                <div class="shopmenu-block__text">shop all</div>
                                            </div>
                                            <div class="shopmenu-block-bottom">
                                                <div class="shopmenu-block__text">Caps</div>
                                                <div class="shopmenu-block__text">Socks
                                                </div>
                                                <div class="shopmenu-block__text">Underwear
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="header-list__item"><a class="link" href="/about/">About</a>
                            <div class="stories__block header-block">
                                <div class="header-block__container container">
                                    <div class="aboutmenu-block__top">
                                        <div class="aboutmenu-block__text">A BABY BRAND was created to deliver the most
                                            simple
                                            clothes in easy
                                            basic colours. We put all our hearts into this little brand, to make your
                                            life
                                            more comfortable. Our aim is to encourage everyone to use less clothes
                                            and to dress with ease. We treat our garments as basic, comfy uniforms
                                            and simply enjoy all the other important things n life! We are based in
                                            Warsaw, POLAND and this is where we design, develop and produce
                                            our products.
                                            <div class="aboutmenu-block__subtext">MINIMALIST BASICS FOR BABIES & KIDS.
                                            </div>
                                        </div>
                                        <a class="aboutmenu-block__get" href="about.html">get to know more</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="header-list__item"><a class="link" href="storieslista.html">stories</a>
                            <div class="stories__block header-block">
                                <div class="header-block__container container">
                                    <div class="header-block__name">stories</div>
                                    <div class="header-block__text">07.07.2021 / tytuly lipiec</div>
                                    <div class="header-block__text">11.08.2021 / lorem ipsum sierpien
                                    </div>
                                    <div class="header-block__text">21.10.2021 / lorem ipsum pazdiernik
                                    </div>
                                    <div class="header-block__text">07.11.2021 / lorem ipsum listopad
                                    </div>
                                    <div class="header-block__text--bottom">all stories
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="header-list__item"><a class="link" href="">Search</a>
                            <div class="stories__block header-block">
                                <div class="header-block__container container">
                                    <div class="search__body">
                                        <form class="search-form" action="" method="get">
                                            <input type="search" placeholder="Write here">
                                        </form>
                                        <span class="header-block__text">suggestions:</span>
                                        <span class="header-block__text">white</span>
                                        <span class="header-block__text">grey</span>
                                        <span class="header-block__text">pants</span>
                                    </div>
                                    <div class="search__body noresult">
                                        <div class="noresult__item">no results for:</div>
                                        <div class="noresult__item-result">Hat</div>
                                    </div>
                                    <div class="search__body result">
                                        <div class="result__top">
                                            <div class="noresult__item">search results for:</div>
                                            <div class="noresult__item-result">Hat</div>
                                            <div class="result__count">12</div>
                                        </div>
                                        <div class="result__body">
                                            <div class="result__columns">
                                                <div class="result__column item-column">
                                                    <a href="product.html" class="item-column__img"><img
                                                            class="search-product-image" src="..//img/products1.png"
                                                            alt=""></a>
                                                    <div class="item-column__body">
                                                        <a href="product.html" class="item-column__name">Bucket hat
                                                            <div class="item-column__price">€16</div>
                                                        </a>
                                                        <div class="item-column__icon"><img
                                                                src="..//img/products/producticon.png" alt=""></div>
                                                    </div>
                                                    <div class="item-column__circles">
                                                        <div class="item-column__circle"><img
                                                                src="..//img/products/colors/colorblack.png" alt="">
                                                        </div>
                                                        <div class="item-column__circle"><img
                                                                src="..//img/products/colors/colorcolorlightbeige.png"
                                                                alt="">
                                                        </div>
                                                        <div class="item-column__circle"><img
                                                                src="..//img/products/colors/colorbeige.png" alt="">
                                                        </div>
                                                        <div class="item-column__circle"><img
                                                                src="..//img/products/colors/colorgold.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="result__column item-column">
                                                    <a href="product.html" class="item-column__img"><img
                                                            class="search-product-image" src="..//img/products2.png"
                                                            alt=""></a>
                                                    <div class="item-column__body">
                                                        <a href="product.html" class="item-column__name">Bucket hat
                                                            <div class="item-column__price">€16</div>
                                                        </a>
                                                        <div class="item-column__icon"><img
                                                                src="..//img/products/producticon.png" alt=""></div>
                                                    </div>
                                                    <div class="item-column__circles">
                                                        <div class="item-column__circle"><img
                                                                src="..//img/products/colors/colorblack.png" alt="">
                                                        </div>
                                                        <div class="item-column__circle"><img
                                                                src="..//img/products/colors/colorcolorlightbeige.png"
                                                                alt="">
                                                        </div>
                                                        <div class="item-column__circle"><img
                                                                src="..//img/products/colors/colorbeige.png" alt="">
                                                        </div>
                                                        <div class="item-column__circle"><img
                                                                src="..//img/products/colors/colorgold.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="result__column item-column">
                                                    <a href="product.html" class="item-column__img"><img
                                                            class="search-product-image" src="..//img/products3.png"
                                                            alt=""></a>
                                                    <div class="item-column__body">
                                                        <a href="product.html" class="item-column__name">Bucket hat
                                                            <div class="item-column__price">€16</div>
                                                        </a>
                                                        <div class="item-column__icon"><img
                                                                src="..//img/products/producticon.png" alt=""></div>
                                                    </div>
                                                    <div class="item-column__circles">
                                                        <div class="item-column__circle"><img
                                                                src="..//img/products/colors/colorblack.png" alt="">
                                                        </div>
                                                        <div class="item-column__circle"><img
                                                                src="..//img/products/colors/colorcolorlightbeige.png"
                                                                alt="">
                                                        </div>
                                                        <div class="item-column__circle"><img
                                                                src="..//img/products/colors/colorbeige.png" alt="">
                                                        </div>
                                                        <div class="item-column__circle"><img
                                                                src="..//img/products/colors/colorgold.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="result__column item-column">
                                                    <a href="product.html" class="item-column__img"><img
                                                            class="search-product-image " src="..//img/products4.png"
                                                            alt=""></a>

                                                    <div class="item-column__body">
                                                        <a href="product.html" class="item-column__name">Bucket hat
                                                            <div class="item-column__price">€16</div>
                                                        </a>

                                                        <div class="item-column__icon"><img
                                                                src="..//img/products/producticon.png" alt=""></div>
                                                    </div>
                                                    <div class="item-column__circles">
                                                        <div class="item-column__circle"><img
                                                                src="..//img/products/colors/colorblack.png" alt="">
                                                        </div>
                                                        <div class="item-column__circle"><img
                                                                src="..//img/products/colors/colorcolorlightbeige.png"
                                                                alt="">
                                                        </div>
                                                        <div class="item-column__circle"><img
                                                                src="..//img/products/colors/colorbeige.png" alt="">
                                                        </div>
                                                        <div class="item-column__circle"><img
                                                                src="..//img/products/colors/colorgold.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="header-logo">
                        <a href="index.html" class="header-logo__img"><img src="/wp-content/themes/baby-brand/assets/img/icons/logo.svg" alt=""
                                class="img"></a>
                    </div>
                    <ul class="header-list">
                        <li class="header-list__item"><a class="link" href="">Eur/En</a>
                            <div class="stories__block header-block">
                                <div class="header-block__container container">
                                    <div class="lang__body">
                                        <div class="lang-block__eng">ENG / EURO</div>
                                        <div class="lang-block__pl">PL / pln</div>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="header-list__item"><a class="link" href="">assistance</a>
                            <div class="stories__block header-block">
                                <div class="header-block__container container">
                                    <a href="" class="assistanse-link">Info@ababybrand.com</a>
                                    <a href="" class="assistanse-link">shipping & returns
                                        quality & care
                                        size guide</a>
                                    <a href="" class="assistanse-link">Wishlist</a>
                                    <a href="" class="assistanse-link">Newsletter</a>
                                    <form class="assistanse-form" action="" method="get">
                                        <input type="email" class="assistanse-email" placeholder="Enter your email">
                                        <button class="assistance-btn">
                                            subscribe
                                        </button>
                                    </form>
                                    <div class="assistance-bottomtext">
                                        I have read, understood and accepted the terms
                                        and conditions and the privacy policy.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="header-list__item"><a class="link" href="hellopage.html">Account</a>
                            <div class="stories__block header-block">
                                <div class="header-block__container container">
                                    <div class="login__body">
                                        <div class="login__column item-login">
                                            <div class="item-login__name">
                                                login
                                            </div>
                                            <form action="" class="item-login__form">
                                                <input type="email" class="item-login__email" placeholder="EMAIL">
                                            </form>
                                            <form action="" class="item-login__form">
                                                <input type="email" class="item-login__pass" placeholder="password">
                                            </form>
                                            <form action="">
                                                <button class="item-login__btn">login</button>
                                            </form>
                                        </div>
                                        <div class="login__column">
                                            <div class="item-login__name">
                                                create an account
                                            </div>
                                            <div class="item-login__text">Sign in to check the status of your most
                                                recent
                                                order and your order history.</div>
                                            <form action="">
                                                <button class="item-login__btn">register</button>
                                            </form>
                                        </div>

                                    </div>
                                    <div class="login__bottomtext">Forget password?</div>
                                </div>
                            </div>
                        </li>
                        <li class="header-list__item"><a class="link" href="">Cart<span
                                    class="header-list__item_count">12</span></a>

                            <div class="stories__block header-block">
                                <div class="header-block__container container">

                                    <div class="card-page">
                                        <div class="card-page__title">3 products in card</div>
                                        <div class="card-page__body">
                                            <div class="card-page__columns">
                                                <div class="card-page__column item-card">
                                                    <div class="item-card__img"><img src="../img/cartimg.png"
                                                            alt="product">
                                                    </div>
                                                    <div class="item-card__body card-body">
                                                        <div class="card-body__row">
                                                            <div class="card-body__name">Bucket hat</div>
                                                            <div class="card-body__price">€16</div>
                                                        </div>
                                                        <div class="card-body__row">
                                                            <div class="card-body__quantity">Quantity: 1</div>
                                                            <span class="card-body__minus">-</span>
                                                            <span class="card-body__plus">+</span>

                                                        </div>

                                                        <div class="card-body__remove">remove</div>
                                                    </div>
                                                </div>
                                                <div class="card-page__column item-card">
                                                    <div class="item-card__img"><img src="../img/cartimg.png"
                                                            alt="product">
                                                    </div>
                                                    <div class="item-card__body card-body">
                                                        <div class="card-body__row">
                                                            <div class="card-body__name">Bucket hat</div>
                                                            <div class="card-body__price">€16</div>
                                                        </div>
                                                        <div class="card-body__row">
                                                            <div class="card-body__quantity">Quantity: 1</div>
                                                            <span class="card-body__minus">-</span>
                                                            <span class="card-body__plus">+</span>

                                                        </div>

                                                        <div class="card-body__remove">remove</div>
                                                    </div>
                                                </div>
                                                <div class="card-page__column item-card">
                                                    <div class="item-card__img"><img src="../img/cartimg.png"
                                                            alt="product">
                                                    </div>
                                                    <div class="item-card__body card-body">
                                                        <div class="card-body__row">
                                                            <div class="card-body__name">Bucket hat</div>
                                                            <div class="card-body__price">€16</div>
                                                        </div>
                                                        <div class="card-body__row">
                                                            <div class="card-body__quantity">Quantity: 1</div>
                                                            <span class="card-body__minus">-</span>
                                                            <span class="card-body__plus">+</span>

                                                        </div>

                                                        <div class="card-body__remove">remove</div>
                                                    </div>
                                                </div>
                                                <div class="card-page__column item-total">
                                                    <div class="item-total__body">
                                                        <div class="item-total__subtotal">subtotal</div>
                                                        <div class="item-total__price">210 eur</div>
                                                    </div>
                                                    <div class="item-total__button">
                                                        <a class="item-total__button_link"
                                                            href="checkout.html">checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
	</header><!-- #masthead -->

   
