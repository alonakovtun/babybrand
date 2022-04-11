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

add_filter('woocommerce_checkout_fields', 'custom_override_checkout_fields');
function custom_override_checkout_fields($fields) {

    unset($fields['billing']);
    unset($fields['shipping']);

    $fields['billing']['billing_first_name']['placeholder'] = 'FIRST NAME';
    $fields['billing']['billing_first_name']['input_class'] = array('item-login__email', 'mistakeform');

    $fields['billing']['billing_last_name']['placeholder'] = 'LAST NAME';
    $fields['billing']['billing_last_name']['input_class'] = array('item-login__email', 'mistakeform');

    $fields['billing']['billing_company']['placeholder'] = 'COMPANY (OPTIONAL)';
    $fields['billing']['billing_company']['input_class'] = array('item-login__email', 'mistakeform');

    $fields['billing']['billing_address_1']['placeholder'] = 'ADDRESS';
    $fields['billing']['billing_address_1']['input_class'] = array('item-login__email', 'mistakeform');

    $fields['billing']['billing_postcode']['placeholder'] = 'ZIP CODE';
    $fields['billing']['billing_postcode']['input_class'] = array('item-login__email', 'mistakeform');

    $fields['billing']['billing_city']['placeholder'] = 'CITY';
    $fields['billing']['billing_city']['input_class'] = array('item-login__email', 'mistakeform');

    $fields['billing']['billing_country']['placeholder'] = 'COUNTRY';
    $fields['billing']['billing_country']['input_class'] = array('item-login__email', 'mistakeform');

    $fields['billing']['billing_phone']['placeholder'] = 'PHONE NUMBER';
    $fields['billing']['billing_phone']['input_class'] = array('item-login__email', 'mistakeform');

    $fields['billing']['billing_email']['placeholder'] = 'EMAIL';
    $fields['billing']['billing_email']['input_class'] = array('item-login__email', 'mistakeform');

    return $fields;
}
