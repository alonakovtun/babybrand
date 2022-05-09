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

        register_sidebar(array(
            'name'          => __('Filters sidebar', 'shop'),
            'id'            => 'filters-sidebar',
            'before_widget' => '<aside id="%1$s" class="filter-widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<p class="widget-title">',
            'after_title'   => '</p>',
        ));

        register_sidebar(array(
            'name'          => __('Filters sidebar2', 'shop'),
            'id'            => 'filters-sidebar2',
            'before_widget' => '<aside id="%1$s" class="filter-widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<p class="widget-title">',
            'after_title'   => '</p>',
        ));
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
add_filter('woocommerce_currencies', 'add_my_currency');

function add_my_currency($currencies)
{
    $currencies['ABC'] = __('Currency name', 'woocommerce');
    return $currencies;
}

add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);

function add_my_currency_symbol($currency_symbol, $currency)
{
    switch ($currency) {
        case 'ABC':
            $currency_symbol = ' EUR';
            break;
    }
    return $currency_symbol;
}

add_filter('woocommerce_checkout_fields', 'custom_override_checkout_fields');
function custom_override_checkout_fields($fields)
{

    foreach ($fields as $fieldCategory => $billingFields) {
        foreach ($billingFields as $billingField => $options) {
            $fields[$fieldCategory][$billingField]['input_class'] = ['item-login__email'];
        }
    }

    return $fields;
}

remove_action('woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20);
add_action('woocommerce_checkout_before_customer_details', 'woocommerce_checkout_payment', 10);
if (!function_exists('yith_wcwl_custom_remove_from_wishlist_label')) {
    function yith_wcwl_custom_remove_from_wishlist_label($label)
    {
        return ' ';
    }
    add_filter('yith_wcwl_remove_from_wishlist_label', 'yith_wcwl_custom_remove_from_wishlist_label');
}

// Minimum CSS to remove +/- default buttons on input field type number
add_action('wp_head', 'custom_quantity_fields_css');
function custom_quantity_fields_css()
{
?>
    <style>
        .quantity input::-webkit-outer-spin-button,
        .quantity input::-webkit-inner-spin-button {
            display: none;
            margin: 0;
        }

        .quantity input.qty {
            appearance: textfield;
            -webkit-appearance: none;
            -moz-appearance: textfield;
        }
    </style>
<?php
}


add_action('wp_footer', 'custom_quantity_fields_script');
function custom_quantity_fields_script()
{
?>
    <script type='text/javascript'>
        jQuery(function($) {
            if (!String.prototype.getDecimals) {
                String.prototype.getDecimals = function() {
                    var num = this,
                        match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
                    if (!match) {
                        return 0;
                    }
                    return Math.max(0, (match[1] ? match[1].length : 0) - (match[2] ? +match[2] : 0));
                }
            }
            // Quantity "plus" and "minus" buttons
            $(document.body).on('click', '.plus, .minus', function() {
                var $qty = $(this).closest('.quantity').find('.qty'),
                    currentVal = parseFloat($qty.val()),
                    max = parseFloat($qty.attr('max')),
                    min = parseFloat($qty.attr('min')),
                    step = $qty.attr('step');

                // Format values
                if (!currentVal || currentVal === '' || currentVal === 'NaN') currentVal = 0;
                if (max === '' || max === 'NaN') max = '';
                if (min === '' || min === 'NaN') min = 0;
                if (step === 'any' || step === '' || step === undefined || parseFloat(step) === 'NaN') step = 1;

                // Change the value
                if ($(this).is('.plus')) {
                    if (max && (currentVal >= max)) {
                        $qty.val(max);
                    } else {
                        $qty.val((currentVal + parseFloat(step)).toFixed(step.getDecimals()));
                    }
                } else {
                    if (min && (currentVal <= min)) {
                        $qty.val(min);
                    } else if (currentVal > 0) {
                        $qty.val((currentVal - parseFloat(step)).toFixed(step.getDecimals()));
                    }
                }

                // Trigger change event
                $qty.trigger('change');
            });
        });
    </script>
    <?php
}




// function arphabet_widgets_init() {


// }
// add_action( 'widgets_init', 'arphabet_widgets_init' );

add_action('woocommerce_before_single_product', 'bbloomer_prev_next_product');
add_action('woocommerce_after_single_product', 'bbloomer_prev_next_product');

function bbloomer_prev_next_product()
{

    echo '<div class="prev_next_buttons">';

    $prev_post = get_adjacent_post(true, '', true, 'product_cat');
    $next_post = get_adjacent_post(true, '', false, 'product_cat');
    $separator = (!empty($prev_post) && !empty($next_post)) ? '/' : '';

    if (!empty($prev_post)) {
        echo '<a href="' . get_permalink($prev_post->ID) . '" title="' . $prev_post->post_title . '">Previous</a>';
    }

    echo $separator;

    if (!empty($next_post)) {
        echo '<a href="' . get_permalink($next_post->ID) . '" title="' . $next_post->post_title . '">Next</a>';
    }

    echo '</div>';
}

add_action('wp_logout', 'njengah_homepage_logout_redirect');

function njengah_homepage_logout_redirect()
{

    wp_redirect(home_url());

    exit;
}

function cart_empty_redirect_to_shop()
{
    global $woocommerce, $woocommerce_errors;

    if (is_cart() && sizeof($woocommerce->cart->cart_contents) === 0) {
        wp_safe_redirect(get_permalink(wc_get_page_id('shop')));
        exit;
    }
}
add_action('template_redirect', 'cart_empty_redirect_to_shop');
add_filter('woocommerce_cart_item_removed_notice_type', '__return_null');
function filter_woocommerce_add_notice($message)
{
    // Equal to (Must be exactly the same).
    // If the message is displayed in another language, adjust where necessary!
    if ($message == 'Checkout is not available whilst your basket is empty.') {
        return false;
    }

    return $message;
}
add_filter('woocommerce_add_notice', 'filter_woocommerce_add_notice', 10, 1);

// Just hide default woocommerce coupon field
add_action('woocommerce_before_checkout_form', 'hide_checkout_coupon_form', 5);
function hide_checkout_coupon_form()
{
    echo '<style>.woocommerce-form-coupon-toggle {display:none;}</style>';
}


// Add a custom coupon field before checkout payment section
add_action('woocommerce_review_order_before_payment', 'woocommerce_checkout_coupon_form_custom');
function woocommerce_checkout_coupon_form_custom()
{
    echo '<div class="checkout-coupon-toggle item-checkout__option option-item">
	<div class="woocommerce-info option-item__name">';
    wc_print_notice(apply_filters('woocommerce_checkout_coupon_message', ' <a href="#" class="show-coupon">' . esc_html__('want to use gift card or coupon code', 'woocommerce') . '</a>'), 'notice');
    echo '</div><div class="option-item__plus"></div></div>';



    echo '<div class="coupon-form" style="margin-bottom:20px;" style="display:none !important;">
        <p class="form-row form-row-first woocommerce-validated">
            <input type="text" name="coupon_code" class="input-text item-login__email item-checkout__form" placeholder="' . __("Coupon code") . '" id="coupon_code" value="">
        </p>
        <p class="form-row form-row-last">
<div class="item-checkout__buttons">
            <button type="button" class="button item-checkout__button" name="apply_coupon" value="' . __("Apply coupon") . '">' . __("Apply coupon") . '</button>
</div>
        </p>
        <div class="clear"></div>
    </div>';
}

// jQuery code
add_action('wp_footer', 'custom_checkout_jquery_script');
function custom_checkout_jquery_script()
{
    if (is_checkout() && !is_wc_endpoint_url()) :
    ?>
        <script type="text/javascript">
            jQuery(function($) {
                $('.coupon-form').css("display", "none"); // Be sure coupon field is hidden

                // Show or Hide coupon field
                $('.checkout-coupon-toggle .show-coupon').on('click', function(e) {
                    $('.coupon-form').slideToggle("slow", "linear");
                    $('.checkout-coupon-toggle').find('> .option-item__plus').toggleClass('minus');
                    e.preventDefault();
                })

                // Copy the inputed coupon code to WooCommerce hidden default coupon field
                $('.coupon-form input[name="coupon_code"]').on('input change', function() {
                    $('form.checkout_coupon input[name="coupon_code"]').val($(this).val());
                    // console.log($(this).val()); // Uncomment for testing
                });

                // On button click, submit WooCommerce hidden default coupon form
                $('.coupon-form button[name="apply_coupon"]').on('click', function() {
                    $('form.checkout_coupon').submit();
                    // console.log('click: submit form'); // Uncomment for testing
                });
            });
            jQuery(document.body).on('applied_coupon_in_checkout removed_coupon_in_checkout', function() {
                location.reload();
            });
        </script>
    <?php
    endif;
}

add_filter('woocommerce_cart_totals_coupon_html', 'custom_cart_totals_coupon_html', 30, 3);
function custom_cart_totals_coupon_html($coupon_html, $coupon, $discount_amount_html)
{
    $discount_amount_html = '<span>' . $coupon->get_amount() . get_woocommerce_currency_symbol() . '  </span>';

    $coupon_html          = $discount_amount_html . ' <a href="' . esc_url(add_query_arg('remove_coupon', urlencode($coupon->get_code()), defined('WOOCOMMERCE_CHECKOUT') ? wc_get_checkout_url() : wc_get_cart_url())) . '" class="woocommerce-remove-coupon" data-coupon="' . esc_attr($coupon->get_code()) . '">' . __('[Remove]', 'woocommerce') . '</a>';


    return $coupon_html;
}

// Billing fields on my account edit-addresses and checkout
add_filter('woocommerce_billing_fields', 'custom_billing_fields');
function custom_billing_fields($fields)
{

    $fields['billing_first_name']['placeholder'] = 'First name';
    $fields['billing_last_name']['placeholder'] = 'Last name';
    $fields['billing_company']['placeholder'] = 'Company (optional)';
    $fields['billing_country']['placeholder'] = 'Country';
    $fields['billing_address_1']['placeholder'] = 'Address';
    $fields['billing_address_2']['placeholder'] = 'Apartment, unit, etc.';
    $fields['billing_city']['placeholder'] = 'City';
    $fields['billing_state']['placeholder'] = 'State';
    $fields['billing_postcode']['placeholder'] = 'ZIP Code';
    $fields['billing_phone']['placeholder'] = 'Phone';
    $fields['billing_email']['placeholder'] = 'Email';

    return $fields;
}

// removing basket updated message
add_filter('woocommerce_cart_updated_notice_type', '__return_false');

function site_cookies_banner()
{ ?>
    <div class="cookies-bottom desktop">
        <div class="container">
            <div class="cookies-bottom__body">
                <div class="cookies-bottom__info"><? _e('We use cookies in order to provide you with the best online
                experience. By continuing to use our site you are agreeing to our <a href="/store-policy/" class="cookies-bottom__info page">cookies policy</a>.', 'shop'); ?>
                </div>
                <button class="cookies-bottom__button"><? _e('Close', 'shop'); ?></button>
            </div>
        </div>
    </div>

    <div class="cookies-bottom mobile">
        <div class="container">
            <div class="cookies-bottom__body">
                <div class="cookies-bottom__info"><? _e('By continuing to use our site you 
are agreeing to our  <a href="/store-policy/" class="cookies-bottom__info page">cookies policy</a>.', 'shop'); ?>
                </div>
                <button class="cookies-bottom__button"><? _e('+', 'shop'); ?></button>
            </div>
        </div>
    </div>
<?
}
