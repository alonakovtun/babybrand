<?php

/**
 * View Order
 *
 * Shows the details of a particular order on the account page.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/view-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.0.0
 */

defined('ABSPATH') || exit;

$notes = $order->get_customer_order_notes();
?>
<div class="chekout__gobackbtn" onclick="history.go(-1)">Go back</div>
<?php
printf(
	/* translators: 1: order number 2: order date 3: order status */
	'<div class="order-number link">' . esc_html__('Order #%1$s ', 'woocommerce') . '</div>',
	'<span>' . $order->get_order_number() . '</span>', // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	//'<mark class="order-date">' . wc_format_datetime( $order->get_date_created() ) . '</mark>', // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	//'<mark class="order-status">' . wc_get_order_status_name( $order->get_status() ) . '</mark>' // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
);
?>


<?php if ($notes) : ?>
	<h2><?php esc_html_e('Order updates', 'woocommerce'); ?></h2>
	<ol class="woocommerce-OrderUpdates commentlist notes">
		<?php foreach ($notes as $note) : ?>
			<li class="woocommerce-OrderUpdate comment note">
				<div class="woocommerce-OrderUpdate-inner comment_container">
					<div class="woocommerce-OrderUpdate-text comment-text">
						<p class="woocommerce-OrderUpdate-meta meta"><?php echo date_i18n(esc_html__('l jS \o\f F Y, h:ia', 'woocommerce'), strtotime($note->comment_date)); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
																		?></p>
						<div class="woocommerce-OrderUpdate-description description">
							<?php echo wpautop(wptexturize($note->comment_content)); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
							?>
						</div>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</li>
		<?php endforeach; ?>
	</ol>
<?php endif; ?>
<?php do_action('woocommerce_view_order', $order_id); ?>
<div class="item-checkout__buttons woocommerce-order-details">
<?php
$actions = wc_get_account_orders_actions($order);
unset($actions['view']);

if (!empty($actions)) {
	foreach ($actions as $key => $action) { // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
		echo '<div class="item-checkout__button"><a href="' . esc_url($action['url']) . '" class="woocommerce-button button ' . sanitize_html_class($key) . '">' . esc_html($action['name']) . '</a></div>';
	}
}
?>
</div>
<!-- <div class="item-checkout__radiobtns">
				<input class="item-checkout__radio" onchange="jQuery('#place_order').removeAttr('disabled')" id="checkoutradio" type="radio" name="" value="">
				<label class="item-checkout__radiotext" for="checkoutradio">By proceeding I
					accept
					the
					Terms &
					conditions</label>
			</div> -->