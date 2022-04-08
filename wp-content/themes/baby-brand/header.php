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

$blogs = get_posts(array(
    'numberposts' => -1,
    'category'    => 0,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'include'     => array(),
    'exclude'     => array(),
    'post_type'   => 'blog',
    'suppress_filters' => true,
));

$product_categories = get_categories(array(
    'taxonomy'     => 'product_cat',
    'orderby'      => 'name',
    'show_count'   => 0,
    'pad_counts'   => 0,
    'hierarchical' => 1,
    'title_li'     => '',
    'hide_empty'   => false
));
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
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
                        

                        <?
                        wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'container' => '',
                            'items_wrap' => '%3$s'
                        ));
                        ?>

                        <!-- <li class="header-list__item"><a class="link" href="/shop/">Shop</a>
                            <div class="shopmenu__block header-block">
                                <div class="header-block__container container">
                                    <div class="shopmenu-block__body">
                                        <?php foreach ($product_categories as $category) : ?>
                                            <div class="shopmenu-block__column">
                                                <div class="shopmenu-block__column">
                                                    <div class="shopmenu-block-top">
                                                        <div class="shopmenu-block__text">
                                                            <?php echo $category->name ?>
                                                        </div>
                                                        <div class="shopmenu-block__text">
                                                            <a href="<?php echo get_category_link($category->cat_ID) ?>">shop all</a>
                                                        </div>
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
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </li> -->

                        <li class="header-list__item"><a class="link" href="">About</a>
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
                                        <a class="aboutmenu-block__get" href="/about/">get to know more</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="header-list__item"><a class="link" href="">stories</a>
                            <div class="stories__block header-block">
                                <div class="header-block__container container">
                                    <div class="header-block__name">stories</div>
                                    <?php foreach ($blogs as $blog) : ?>
                                    <div class="header-block__text">
                                        <a href="<?php echo $blog->guid; ?>">
                                            <?php echo date_format(date_create($blog->post_date), 'd.m.Y'); ?>/<?php echo $blog->post_title; ?>
                                        </a>
                                    </div>
                                    <?php endforeach; ?>
                                    <div class="header-block__text--bottom"> <a href="/stories/">all stories</a>
                                    </div>
                                </div>
                            </div>
                        </li> 
                        <li class="header-list__item"><a class="link" href="">Search</a>
                            <div class="stories__block header-block">
                                <div class="header-block__container container">
                                    <div class="search__body">
                                        <?php get_product_search_form() ?>
                                        <span class="header-block__text">suggestions:</span>
                                        <span class="header-block__text">white</span>
                                        <span class="header-block__text">grey</span>
                                        <span class="header-block__text">pants</span>
                                    </div>
                                </div>
                            </div>
                        </li> 


                    </ul>
                    <div class="header-logo">
                        <a href="/" class="header-logo__img"><img src="/wp-content/themes/baby-brand/assets/img/logo.svg" alt="" class="img"></a>
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
                        <li class="header-list__item"><a class="link" href="#">assistance</a>
                            <div class="stories__block header-block">
                                <div class="header-block__container container">
                                    <a href="mailto:info@ababybrand.com" class="assistanse-link">Info@ababybrand.com</a>
                                    <a href="/shipping-returns/" class="assistanse-link nomarginb">shipping & returns</a>
                                    <a href="/quality-care/" class="assistanse-link nomarginb"> quality & care</a>
                                    <a href="/size-guide/" class="assistanse-link"> size guide</a>
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
                        <li class="header-list__item"><a class="link" href="/my-account/">Account</a>
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
                        <li class="header-list__item"><a class="link mini-cart-trigger" href="#">Cart</a>

                            <div class="stories__block header-block">
                                <div class="header-block__container container">
                                    <div class="mini-cart">
                                        <?php get_template_part('template-parts/baby-mini-cart'); ?>
                                    </div>
                                    <!-- <div class="card-page">
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
                                    </div> -->
                                </div>
                            </div>
                        </li>
                    </ul>


                </div>

            </div>
        </header><!-- #masthead -->