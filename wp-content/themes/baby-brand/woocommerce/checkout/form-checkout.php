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

do_action('woocommerce_before_checkout_form', $checkout);

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
				<div class="chekout__gobackbtn" onclick="history.go(-1)">Go back</div>
				<div class="checkout__column item-checkout">
					<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url(wc_get_checkout_url()); ?>" enctype="multipart/form-data">

						<?php if ($checkout->get_checkout_fields()) : ?>

							<div class="col2-set" id="customer_details">
								<div class="col-1">
									<?php do_action('woocommerce_checkout_billing'); ?>
								</div>

								<div class="col-2">
									<?php do_action('woocommerce_checkout_shipping'); ?>
								</div>
							</div>

							<?php do_action('woocommerce_checkout_after_customer_details'); ?>

						<?php endif; ?>
					<div class="item-checkout__subname">billing summary</div>
					<?php do_action('woocommerce_review_order_before_payment') ?>

					<div class="item-checkout__option option-item ">
                        <div class="option-item__name"><?php esc_html_e('item total', 'woocommerce'); ?></div>
                        <div class="option-item__total"><?php wc_cart_totals_subtotal_html(); ?></div>
                    </div>

					<?php foreach (WC()->cart->get_coupons() as $code => $coupon) : ?>
						<div class="item-checkout__option option-item ">
							<div class="option-item__name"><?php wc_cart_totals_coupon_label($coupon); ?></div>
							<div class="option-item__total"><?php wc_cart_totals_coupon_html($coupon); ?></div>
						</div>
					<?php endforeach; ?>

					<?php if (WC()->cart->needs_shipping() && WC()->cart->show_shipping()) : ?>
					<div class="item-checkout__option option-item ">
						<?php do_action('woocommerce_review_order_before_shipping'); ?>
                        <div class="option-item__name">shipping</div>
                        <div class="option-item__total"><?php echo WC()->cart->get_cart_shipping_total(); ?></div>

						<?php do_action('woocommerce_review_order_after_shipping'); ?>
                    </div>
					<?php endif; ?>

					<?php foreach (WC()->cart->get_fees() as $fee) : ?>
						<tr class="fee">
							<th><?php echo esc_html($fee->name); ?></th>
							<td><?php wc_cart_totals_fee_html($fee); ?></td>
						</tr>
					<?php endforeach; ?>

					<?php if (wc_tax_enabled() && !WC()->cart->display_prices_including_tax()) : ?>
						<?php if ('itemized' === get_option('woocommerce_tax_total_display')) : ?>
							<?php foreach (WC()->cart->get_tax_totals() as $code => $tax) : // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited 
							?>
								<tr class="tax-rate tax-rate-<?php echo esc_attr(sanitize_title($code)); ?>">
									<th><?php echo esc_html($tax->label); ?></th>
									<td><?php echo wp_kses_post($tax->formatted_amount); ?></td>
								</tr>
							<?php endforeach; ?>
						<?php else : ?>
							<tr class="tax-total">
								<th><?php echo esc_html(WC()->countries->tax_or_vat()); ?></th>
								<td><?php wc_cart_totals_taxes_total_html(); ?></td>
							</tr>
						<?php endif; ?>
					<?php endif; ?>
					<?php do_action('woocommerce_review_order_before_order_total'); ?>
					<div class="item-checkout__option option-item ch_total">
                        <div class="option-item__name"><?php esc_html_e('total', 'woocommerce'); ?></div>
                        <div class="option-item__total"><?php wc_cart_totals_order_total_html(); ?></div>
                    </div>
					<?php do_action('woocommerce_review_order_after_order_total'); ?>
					<?php do_action('woocommerce_checkout_before_customer_details'); ?>
					</form>
				</div>
				<?php
				do_action('woocommerce_checkout_before_order_review');
				do_action('woocommerce_checkout_before_order_review_heading');
				do_action('woocommerce_checkout_order_review');
				do_action('woocommerce_checkout_after_order_review');
				?>
			</div>
		</div>
	</div>
</main>

<?php do_action('woocommerce_after_checkout_form', $checkout); ?>