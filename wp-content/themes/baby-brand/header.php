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

$blogsArr = get_posts(array(
    'numberposts' => -1,
    'category'    => 0,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'include'     => array(),
    'exclude'     => array(),
    'post_type'   => 'blog',
    'suppress_filters' => true,
));

$blogs = array_slice($blogsArr, 0, 4);

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

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site wrapper">
        <header id="masthead" class="site-header header desktop">
            <div class="header__container container">
                <div class="header__body">

                    <ul class="header-list first">
                        <li class="header-list__item shop"><a class="link">Shop</a>
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
                                        <div class="header-block__text stories-color">
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
                                        <? if (have_rows('search_suggestions_items', 'option')) : ?>
                                            <span class="header-block__text"><? _e('suggestions', 'anomeo'); ?>:</span>


                                            <?php while (have_rows('search_suggestions_items', 'option')) : the_row();
                                                $link = get_sub_field('link');
                                                if ($link) :
                                                    $link_url = $link['url'];
                                                    $link_title = $link['title'];
                                            ?>
                                                    <span class="header-block__text">
                                                        <a href="<?= $link_url; ?>"><?= $link_title; ?></a>
                                                    </span>
                                                <? endif; ?>
                                            <?php endwhile; ?>
                                        <? endif; ?>
                                    </div>
                                </div>
                            </div>
                        </li>


                    </ul>


                    <div class="header-logo">
                        <a href="/" class="header-logo__img"><img src="/wp-content/themes/baby-brand/assets/img/logo.svg" alt="" class="img"></a>
                    </div>
                    <ul class="header-list second">
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
                                    <a href="/my-account/wish-list/" class="assistanse-link bigmarginb wish">Wishlist <img src="/wp-content/uploads/2022/04/producticon.png"> </a>
                                    <a class="assistanse-link bigmarginb">Newsletter</a>
                                    <form class="assistanse-form" action="" method="get">
                                        <input type="email" class="assistanse-email" placeholder="Enter your email">
                                        <button class="assistance-btn">
                                            subscribe
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <? if (!is_user_logged_in()) : ?>
                            <li class="header-list__item"><a class="link">Account</a>
                                <div class="stories__block header-block">
                                    <? include get_template_directory() . '/woocommerce/myaccount/form-login.php'; ?>
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
        <div class="site-header header mobile">
            <div class="header__container container">
                <div class="header__body">
                    <div class="menu-item">
                        <a>
                            <span id="mobile-menu-toggle" class="mobile-menu-icon">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </span>
                        </a>
                    </div>



                    <div class="header-logo">
                        <a href="/" class="header-logo__img"><img src="/wp-content/themes/baby-brand/assets/img/logo.svg" alt="" class="img"></a>
                    </div>



                    <div class="header-list__item"><a class="link mini-cart-trigger"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="15" height="17" viewBox="0 0 164.9 196.4" preserveAspectRatio="xMinYMax meet" data-hook="svg-icon-9"><text x="84" y="131" dy=".35em" text-anchor="middle" class="LCo0H QVqyb" data-hook="items-count">2</text>
                                <path d="M81.9 11.5c-18.8 0-34.1 16-34.1 35.7v18.1h7.8V47.2c0-15.4 11.8-27.9 26.4-27.9 14.5 0 26.4 12.5 26.4 27.9v18.1h6.6V64h1.1V47.2c-.1-19.7-15.4-35.7-34.2-35.7z"></path>
                                <path d="M156.9 70.5v118H8v-118h148.9m8-8H0v134h164.9v-134z"></path>
                            </svg>
                            <span class="count"><?php echo WC()->cart->get_cart_contents_count() === 0 ? '' :  WC()->cart->get_cart_contents_count()  ?></span>

                        </a>

                        <div class="stories__block header-block">
                            <div class="header-block__container container">
                                <div class="mini-cart">
                                    <?php get_template_part('template-parts/baby-mini-cart'); ?>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>

                <ul class="header-list mobile">
                    <li class="header-list__item shop open-link"><a class="link">Shop</a>
                        <div class="list-block">
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

                    <li class="header-list__item open-link"><a class="link">About</a>
                        <div class="list-block">
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
                                    </div>
                                    <a class="aboutmenu-block__get" href="/about/">get to know more</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="header-list__item open-link"><a class="link">stories</a>
                        <div class="list-block">
                            <div class="header-block__container container">
                                <?php foreach ($blogs as $blog) : ?>
                                    <div class="header-block__text stories-color">
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


                    <li class="header-list__item open-link"><a class="link">assistance</a>
                        <div class="list-block">
                            <div class="header-block__container container">
                                <a href="mailto:info@ababybrand.com" class="assistanse-link">Info@ababybrand.com</a>
                                <a href="/shipping-returns/" class="assistanse-link nomarginb">shipping & returns</a>
                                <a href="/quality-care/" class="assistanse-link nomarginb"> quality & care</a>
                                <a href="/size-guide/" class="assistanse-link bigmarginb"> size guide</a>
                                <a href="/my-account/wish-list/" class="assistanse-link bigmarginb wish">Wishlist <img src="/wp-content/uploads/2022/04/producticon.png"> </a>
                                <a class="assistanse-link bigmarginb">Newsletter</a>
                                <form class="assistanse-form" action="" method="get">
                                    <input type="email" class="assistanse-email" placeholder="Enter your email">
                                    <button class="assistance-btn">
                                        subscribe
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>

                    <li class="header-list__item"><a href="/my-account" class="link">Account</a>

                    </li>

                    <li class="header-list__item"><a class="link">Eur/En</a>
                        <div class="list-block lang">
                            <div class="header-block__container container">
                                <div class="lang__body">
                                    <div class="lang-block__eng">ENG / EURO</div>
                                    <div class="lang-block__pl">PL / pln</div>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li class="header-list__item"><a class="link"><img src="/wp-content/themes/baby-brand/assets/img/search_icon.png"></a>
                        <div class="list-block">
                            <div class="header-block__container container">
                                <div class="search__body">
                                    <?php get_product_search_form() ?>
                                    <? if (have_rows('search_suggestions_items', 'option')) : ?>
                                        <span class="header-block__text"><? _e('suggestions', 'anomeo'); ?>:</span>


                                        <?php while (have_rows('search_suggestions_items', 'option')) : the_row();
                                            $link = get_sub_field('link');
                                            if ($link) :
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                        ?>
                                                <span class="header-block__text">
                                                    <a href="<?= $link_url; ?>"><?= $link_title; ?></a>
                                                </span>
                                            <? endif; ?>
                                        <?php endwhile; ?>
                                    <? endif; ?>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>

        </div><!-- #masthead -->