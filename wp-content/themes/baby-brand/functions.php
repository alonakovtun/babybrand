<?php

if (!defined('_S_VERSION')) {
    define('_S_VERSION', '1.0.0');
}

if (!function_exists('baby_setup')) :
    function baby_setup()
    {
        load_theme_textdomain('baby', get_template_directory() . '/languages');

        add_theme_support('automatic-feed-links');
    
        add_theme_support('title-tag');

        add_theme_support('woocommerce');

        add_theme_support('post-thumbnails');

        register_nav_menus(
            array(
                'menu-1' => esc_html__('Primary', 'baby'),
                'main-menu' => esc_html__('Main menu', 'baby')
            )
        );

        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        add_theme_support(
            'custom-background',
            apply_filters(
                'baby_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        add_theme_support('customize-selective-refresh-widgets');

        add_theme_support(
            'custom-logo',
            array(
                'height' => 250,
                'width' => 250,
                'flex-width' => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action('after_setup_theme', 'baby_setup');


require get_template_directory() . '/inc/custom-header.php';

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/template-functions.php';

require get_template_directory() . '/inc/customizer.php';

require get_template_directory() . '/inc/custom-functions.php';

require get_template_directory() . '/inc/woocomerce.php';

/**
 * Custom currency and currency symbol
 */
add_filter( 'woocommerce_currencies', 'add_my_currency' );

function add_my_currency( $currencies ) {
     $currencies['ABC'] = __( 'Currency name', 'woocommerce' );
     return $currencies;
}

add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);

function add_my_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'ABC': $currency_symbol = ' EUR'; break;
     }
     return $currency_symbol;
}


// function wp_get_menu_array($current_menu) {
//     $array_menu = wp_get_nav_menu_items($current_menu);
//     $menu = array();
//     foreach ($array_menu as $m) {
//         if (empty($m->menu_item_parent)) {
//             $menu[$m->ID] = array();
//             $menu[$m->ID]['ID']          =   $m->ID;
//             $menu[$m->ID]['title']       =   $m->title;
//             $menu[$m->ID]['url']         =   $m->url;
//             $menu[$m->ID]['children']    =   array();
//         }
//     }
//     $submenu = array();
//     foreach ($array_menu as $m) {
//         if ($m->menu_item_parent) {
//             $submenu[$m->ID] = array();
//             $submenu[$m->ID]['ID']       =   $m->ID;
//             $submenu[$m->ID]['title']    =   $m->title;
//             $submenu[$m->ID]['url']      =   $m->url;
//             $menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
//         }
//     }
//     return $menu;
// }

// $menu_items = wp_get_menu_array('main-menu');
?>
  <!-- <nav>
      <ul>
        <?php foreach ($menu_items as $item) : ?>
          <li>
            <a href="<?= $item['url'] ?>" title="<?= $item['title'] ?>"><?= $item['title'] ?></a>
            <?php if( !empty($item['children']) ):?>
            <ul class="sub-menu">
              <?php foreach($item['children'] as $child): ?>
                <li class="b-main-header__sub-menu__nav-item">
                  <a href="<?= $child['url'] ?>" title="<?= $child['title'] ?>"><?= $child['title'] ?></a>
                </li>
              <?php endforeach; ?>
            </ul>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
     <ul>
</nav> -->