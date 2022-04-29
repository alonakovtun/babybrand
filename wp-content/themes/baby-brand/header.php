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
                        <li class="header-list__item shop"><a href="/shop/" class="link">Shop</a>
                            <div class="stories__block header-block shop-list">
                                <ul class="header-block__container container">
                                    <?
                                    wp_nav_menu(array(
                                        'theme_location' => 'main-menu',
                                        'container' => '',
                                        'items_wrap' => '%3$s'
                                    ));
                                    ?>
                                </ul>
                            </div>

                        </li>

                        <li class="header-list__item"><a class="link">About</a>
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
                        <li class="header-list__item"><a class="link">stories</a>
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
                        <li class="header-list__item"><a class="link">Search</a>
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
                        <li class="header-list__item"><a class="link">Eur/En</a>
                            <div class="stories__block header-block lang">
                                <div class="header-block__container container">
                                    <div class="lang__body">
                                        <div class="lang-block__eng">ENG / EURO</div>
                                        <div class="lang-block__pl">PL / pln</div>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li class="header-list__item"><a class="link">assistance</a>
                            <div class="stories__block header-block">
                                <div class="header-block__container container">
                                    <a href="mailto:info@ababybrand.com" class="assistanse-link">Info@ababybrand.com</a>
                                    <a href="/shipping-returns/" class="assistanse-link nomarginb">shipping & returns</a>
                                    <a href="/quality-care/" class="assistanse-link nomarginb"> quality & care</a>
                                    <a href="/size-guide/" class="assistanse-link bigmarginb"> size guide</a>
                                    <a href="/my-account/wish-list/" class="assistanse-link bigmarginb">Wishlist</a>
                                    <a href="" class="assistanse-link bigmarginb">Newsletter</a>
                                    <form class="assistanse-form" action="" method="get">
                                        <input type="email" class="assistanse-email" placeholder="Enter your email">
                                        <button class="assistance-btn">
                                            subscribe
                                        </button>
                                    </form>
                                    <!-- <div class="assistance-bottomtext">
                                        I have read, understood and accepted the terms
                                        and conditions and the privacy policy.
                                    </div> -->
                                </div>
                            </div>
                        </li>
                        <? if (!is_user_logged_in()) : ?>
                            <li class="header-list__item"><a class="link">Account</a>
                                <div class="stories__block header-block">  
                                    <? include get_template_directory() . '/template-parts/login.php'; ?>  
                                </div>
                            </li>
                        <? else : ?>
                            <li class="header-list__item"><a class="link" href="/my-account/">Account</a></li>
                        <? endif; ?>
                        <li class="header-list__item"><a class="link mini-cart-trigger">Cart
                        <span class="count"><?php echo WC()->cart->get_cart_contents_count() === 0 ? '' :  WC()->cart->get_cart_contents_count()  ?></span>

                        </a>

                            <div class="stories__block header-block">
                                <div class="header-block__container container">
                                    <div class="mini-cart">
                                        <?php get_template_part('template-parts/baby-mini-cart'); ?>
                                    </div>

                                </div>
                            </div>
                        </li>
                    </ul>


                </div>

            </div>
        </header><!-- #masthead -->