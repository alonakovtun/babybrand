<?php

/**
 * Review order table
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/review-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 5.2.0
 */

defined('ABSPATH') || exit;
?>
<?php
do_action('woocommerce_review_order_before_cart_contents');

foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
  $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
  $product_id   = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);
  if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key)) {
?>



    <div class="item-checkout-img">
      <img src="<?= get_the_post_thumbnail_url($product_id); ?>" alt="product" />
    </div>
    <div class="item-card__body card-body">
      <div class="card-body__row" style="flex: 1 1 50%; display: flex;">
        <div class="card-body__name">
          <?php echo wp_kses_post(apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key)) . '&nbsp;'; ?>
        </div>
        <div class="card-body__price">
          <?php echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
          ?>
        </div>
      </div>
      <div class="card-body__row" style="display: flex;">
        <div class="card-body__quantity">Quantity: <?php echo esc_html__('', 'hedonizm') . '<span>' . $cart_item['quantity'] . '</span>'; ?>
        </div>
        <?php $qty_class = ($cart_item['quantity'] > 1) ? '' : 'm-disabled'; ?>
        <span class="card-body__minus">
          <button type="button" class="<?= $qty_class; ?>">-</button>
        </span>
        <span class="card-body__plus">
          <button type="button">+</button>
        </span>
      </div>
      <div class="card-body__remove">
        <?php
        echo apply_filters('woocommerce_cart_item_remove_link', sprintf(
          '<a href="%s" class="checkout__remove remove removed_from_cart">%s</a>',
          esc_url(wc_get_cart_remove_url($cart_item_key)),
          __('remove', 'woocommerce'),
          __('remove', 'hedo'),
        ), $cart_item_key);
        ?>
      </div>
    </div>



<?php
  }
}

do_action('woocommerce_review_order_after_cart_contents');
?>