<?php

/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if (!defined('ABSPATH')) {
  exit;
}



// If checkout registration is disabled and not logged in, the user cannot checkout.
if (!$checkout->is_registration_enabled() && $checkout->is_registration_required() && !is_user_logged_in()) {
  echo esc_html(apply_filters('woocommerce_checkout_must_be_logged_in_message', __('You must be logged in to checkout.', 'woocommerce')));
  return;
}
?>
<main class="main">
  <div class="checkout">
    <div class="checkout__container container">
      <div class="checkout__body">
        <div class="chekout__gobackbtn" onclick="history.go(-1);">Go back</div>
        <?php
        if (!is_user_logged_in()) {
          get_template_part('template-parts/hedo-login');
        }

        ?>
        <div class="checkout__column item-checkout">
          <div class="item-checkout__name">delivery address</div>
          <form name="checkout" method="post" class="item-checkout__form mistakeform <?= !is_user_logged_in() ? 'checkout__hidden' : '' ?>" action="<?php echo esc_url(wc_get_checkout_url()); ?>" enctype="multipart/form-data">
            <div class="flex jc-space al-start ">
              <div class="column-left">
                <?php if ($checkout->get_checkout_fields()) : ?>


                  <div class="checkout__column item-checkout">
                    <?php do_action('woocommerce_checkout_billing'); ?>
                    <?php do_action('woocommerce_checkout_shipping'); ?>
                    
                    <div class="checkout__invoice-bottom">
                      <?php do_action('woocommerce_invoice_vat_fields', $checkout); ?>
                    </div>
                  </div>

                  <?php do_action('woocommerce_checkout_after_customer_details'); ?>
                <?php endif; ?>


              </div>

            </div>
          </form>

  <div class="cart__bottom-review">

    <a href="#" class="showcoupon woocommerce-form-coupon-toggle checkout__invoice hov-underline-dont">
      <?php do_action('woocommerce_before_checkout_form', $checkout); ?>
      <span class="option-item__plus">+</span>
    </a>
    <div class="review-oreder__total-shipping">
      <div class="cart-subtotal flex jc-space al-center mb-48">
        <p class="txt-18"><?php esc_html_e('Item total', 'woocommerce'); ?></p>
        <p class="txt-18 txt-upper"><?php wc_cart_totals_subtotal_html(); ?></p>
      </div>
      <?php foreach (WC()->cart->get_coupons() as $code => $coupon) : ?>
        <div class="cart-discount coupon-<?php echo esc_attr(sanitize_title($code)); ?>" style="display: none">
          <div><?php wc_cart_totals_coupon_label($coupon); ?></div>
          <div><?php wc_cart_totals_coupon_html($coupon); ?></div>
        </div>
      <?php endforeach; ?>
      <div class="cart-subtotal flex jc-space al-center mt-48 wysylka-subtotal">
        <?php if (WC()->cart->needs_shipping() && WC()->cart->show_shipping()) : ?>
          <?php do_action('woocommerce_review_order_before_shipping'); ?>
          <?php wc_cart_totals_shipping_html(); ?>
          <?php do_action('woocommerce_review_order_after_shipping'); ?>
        <?php endif; ?>
      </div>

      <?php foreach (WC()->cart->get_fees() as $fee) : ?>
        <div class="fee">
          <div><?php echo esc_html($fee->name); ?></div>
          <div><?php wc_cart_totals_fee_html($fee); ?></div>
        </div>
      <?php endforeach; ?>

      <?php if (wc_tax_enabled() && !WC()->cart->display_prices_including_tax()) : ?>
        <?php if ('itemized' === get_option('woocommerce_tax_total_display')) : ?>
          <?php foreach (WC()->cart->get_tax_totals() as $code => $tax) : // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited 
          ?>
            <div class="tax-rate tax-rate-<?php echo esc_attr(sanitize_title($code)); ?>">
              <div><?php echo esc_html($tax->label); ?></div>
              <div><?php echo wp_kses_post($tax->formatted_amount); ?></div>
            </div>
          <?php endforeach; ?>
        <?php else : ?>
          <div class="tax-total">
            <div><?php echo esc_html(WC()->countries->tax_or_vat()); ?></div>
            <div><?php wc_cart_totals_taxes_total_html(); ?></div>
          </div>
        <?php endif; ?>
      <?php endif; ?>
    </div>

    <?php do_action('woocommerce_review_order_before_order_total'); ?>

    <div class="order-total flex jc-space al-center">
      <p class="txt-upper"><?php esc_html_e('Total', 'woocommerce'); ?></p>
      <p><?php wc_cart_totals_order_total_html(); ?></p>
    </div>

    <?php do_action('woocommerce_review_order_after_order_total'); ?>

  </div>
        </div>

        <div class="checkout__column item-column">

          <div class="item-column-body">
            <?php do_action('woocommerce_checkout_order_review'); ?>
          </div>



        </div>

      </div>
    </div>
  </div>
</main>