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

    foreach ($fields as $fieldCategory => $billingFields) {
        foreach ($billingFields as $billingField => $options) {
            $fields[$fieldCategory][$billingField]['input_class'] = ['item-login__email'];
        }
    }

    return $fields;
}

remove_action('woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20);
add_action('woocommerce_checkout_before_customer_details', 'woocommerce_checkout_payment', 10);
if ( ! function_exists( 'yith_wcwl_custom_remove_from_wishlist_label' ) ) {
	function yith_wcwl_custom_remove_from_wishlist_label( $label ) {
		return ' ';
	}
	add_filter( 'yith_wcwl_remove_from_wishlist_label', 'yith_wcwl_custom_remove_from_wishlist_label' );
}

// Minimum CSS to remove +/- default buttons on input field type number
add_action( 'wp_head' , 'custom_quantity_fields_css' );
function custom_quantity_fields_css(){
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


add_action( 'wp_footer' , 'custom_quantity_fields_script' );
function custom_quantity_fields_script(){
    ?>
    <script type='text/javascript'>
    jQuery( function( $ ) {
        if ( ! String.prototype.getDecimals ) {
            String.prototype.getDecimals = function() {
                var num = this,
                    match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
                if ( ! match ) {
                    return 0;
                }
                return Math.max( 0, ( match[1] ? match[1].length : 0 ) - ( match[2] ? +match[2] : 0 ) );
            }
        }
        // Quantity "plus" and "minus" buttons
        $( document.body ).on( 'click', '.plus, .minus', function() {
            var $qty        = $( this ).closest( '.quantity' ).find( '.qty'),
                currentVal  = parseFloat( $qty.val() ),
                max         = parseFloat( $qty.attr( 'max' ) ),
                min         = parseFloat( $qty.attr( 'min' ) ),
                step        = $qty.attr( 'step' );

            // Format values
            if ( ! currentVal || currentVal === '' || currentVal === 'NaN' ) currentVal = 0;
            if ( max === '' || max === 'NaN' ) max = '';
            if ( min === '' || min === 'NaN' ) min = 0;
            if ( step === 'any' || step === '' || step === undefined || parseFloat( step ) === 'NaN' ) step = 1;

            // Change the value
            if ( $( this ).is( '.plus' ) ) {
                if ( max && ( currentVal >= max ) ) {
                    $qty.val( max );
                } else {
                    $qty.val( ( currentVal + parseFloat( step )).toFixed( step.getDecimals() ) );
                }
            } else {
                if ( min && ( currentVal <= min ) ) {
                    $qty.val( min );
                } else if ( currentVal > 0 ) {
                    $qty.val( ( currentVal - parseFloat( step )).toFixed( step.getDecimals() ) );
                }
            }

            // Trigger change event
            $qty.trigger( 'change' );
        });
    });
    </script>
    <?php
}


function cw_woo_attribute(){
    global $product;
    $attributes = $product->get_attributes();
    if ( ! $attributes ) {
        return;
    }
    $display_result = '';
    foreach ( $attributes as $attribute ) {
        if ( $attribute->get_variation() ) {
            continue;
        }
        $name = $attribute->get_name();
        if ( $attribute->is_taxonomy() ) {
            $terms = wp_get_post_terms( $product->get_id(), $name, 'all' );
            $cwtax = $terms[0]->taxonomy;
            $cw_object_taxonomy = get_taxonomy($cwtax);
            if ( isset ($cw_object_taxonomy->labels->singular_name) ) {
                $tax_label = $cw_object_taxonomy->labels->singular_name;
            } elseif ( isset( $cw_object_taxonomy->label ) ) {
                $tax_label = $cw_object_taxonomy->label;
                if ( 0 === strpos( $tax_label, 'Product ' ) ) {
                    $tax_label = substr( $tax_label, 8 );
                }
            }
            $display_result .= '<div class="item-settings">' . '<div class="item-settings__name ">' . $tax_label . '</div> <div class="item-settings__variants">';
            $tax_terms = array();
            foreach ( $terms as $term ) {
                $single_term = '<div class="item-settings__size">' . esc_html( $term->name ) . '</div>';
                array_push( $tax_terms, $single_term );
            }
            $display_result .= implode(' ', $tax_terms) .  '</div></div>';
        } else {
            $display_result .= $name . '';
            $display_result .= esc_html( implode( ' ', $attribute->get_options() ) ) . '<br />';
        }
    }
    echo $display_result;
}
add_action('woocommerce_single_product_summary', 'cw_woo_attribute', 25);

// function arphabet_widgets_init() {

    
// }
// add_action( 'widgets_init', 'arphabet_widgets_init' );



/**
 * @snippet       Add next/prev buttons @ WooCommerce Single Product Page
 * @how-to        Get CustomizeWoo.com FREE
 * @sourcecode    https://businessbloomer.com/?p=20567
 * @author        Rodolfo Melogli
 * @testedwith    WooCommerce 2.5.5
 */
 
add_action( 'woocommerce_before_single_product', 'bbloomer_prev_next_product' );
 
// and if you also want them at the bottom...
add_action( 'woocommerce_after_single_product', 'bbloomer_prev_next_product' );
 
function bbloomer_prev_next_product(){
 
echo '<div class="prev_next_buttons">';
 
   // 'product_cat' will make sure to return next/prev from current category
    $previous = next_post_link('%link', 'Previous', TRUE, ' ', 'product_cat');
   $next = previous_post_link('%link', 'Next', TRUE, ' ', 'product_cat');
 
   echo $previous . '<a>/</a>' . $next;
    
echo '</div>';
         
}

add_action('wp_logout','njengah_homepage_logout_redirect');

function njengah_homepage_logout_redirect(){

    wp_redirect( home_url() );

    exit;

}