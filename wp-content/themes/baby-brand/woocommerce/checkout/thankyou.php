<?php

/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.7.0
 */

defined('ABSPATH') || exit;
?>

<div class="woocommerce-order">

	<?php
	if ($order) :

		do_action('woocommerce_before_thankyou', $order->get_id());
	?>

		<?php if ($order->has_status('failed')) : ?>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed"><?php esc_html_e('Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce'); ?></p>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
				<a href="<?php echo esc_url($order->get_checkout_payment_url()); ?>" class="button pay"><?php esc_html_e('Pay', 'woocommerce'); ?></a>
				<?php if (is_user_logged_in()) : ?>
					<a href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>" class="button pay"><?php esc_html_e('My account', 'woocommerce'); ?></a>
				<?php endif; ?>
			</p>

		<?php else : ?>

			<main class="main">
				<div class="thankyoupage">
					<div class="thankyoupage__container container">
						<div class="thankyoupage__body">
							<div class="thankyoupage-top">
								<p class="thankyoupage-top__title">
									<?php echo apply_filters('woocommerce_thankyou_order_received_text', esc_html__('thank you for your order!', 'woocommerce'), $order); ?>
								</p>
								<div class="thankyoupage-top__backhome" style="z-index: 999;"><a href="<?php echo home_url() ?>"><?php _e('back to homepage', 'baby-brand')?></a></div>
							</div>
							<div class="thankyou-middle__text"><?php _e('Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								Proin
								nibh augue, suscipit a, scelerisque sed, lacinia in mi.', 'baby-brand')?> </div>
							<div class="thankyoupage-bottom item-thankyou">
								<div class="item-thankyou__body">
									<div class="item-thankyou__name"><?php esc_html_e('order:', 'woocommerce') ?></div>
									<div class="item-thankyou__subname">#<?php echo $order->get_order_number() ?></div>
								</div>
								<div class="item-thankyou__body">
									<div class="item-thankyou__name"><?php esc_html_e('date:', 'woocommerce') ?></div>
									<div class="item-thankyou__subname"><?php echo wc_format_datetime($order->get_date_created()) ?></div>
								</div>
								<div class="item-thankyou__body">
									<div class="item-thankyou__name"><?php esc_html_e('amount:', 'woocommerce') ?></div>
									<div class="item-thankyou__subname"><?php echo $order->get_formatted_order_total() ?></div>
								</div>
								<div class="item-thankyou__body">
									<div class="item-thankyou__name"><?php esc_html_e('payment method:', 'woocommerce') ?></div>
									<div class="item-thankyou__subname"><?php echo wp_kses_post($order->get_payment_method_title()) ?></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>

		<?php else : ?>

			<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">
				<?php echo apply_filters('woocommerce_thankyou_order_received_text', esc_html__('Thank you. Your order has been received.', 'woocommerce'), null) ?>
			</p>
		<?php endif; ?>
			</main>
</div>