<?php

/**
 * Output a single payment method
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/payment-method.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.5.0
 */

if (!defined('ABSPATH')) {
	exit;
}
?>
<li class="test-class wc_payment_method payment_method_<?php echo esc_attr($gateway->id); ?>" style="list-style-type: none;">
	<input id="payment_method_<?php echo esc_attr($gateway->id); ?>" type="radio" class="input-radio" name="payment_method" value="<?php echo esc_attr($gateway->id); ?>" <?php checked($gateway->chosen, true); ?> data-order_button_text="<?php echo esc_attr($gateway->order_button_text); ?>" />
	<?
	$icon = '';

	if ($gateway->id ==  'bacs') {
		$icon =  get_template_directory_uri() . '/assets/img/paymethod1.png';
	}
	?>
	<label for="payment_method_<?php echo esc_attr($gateway->id); ?>">
		<div class="item-checkout__option option-item ">
			<div class="option-item__icon option-item__icon">
				<img class="payment-method__img" src="<?= $icon; ?>" alt="">
			</div>
			<a class="option-item__methods"><?php echo $gateway->get_title(); ?></a>
		</div>
	</label>
	<!-- <?php if ($gateway->has_fields() || $gateway->get_description()) : ?>
		<div class="payment_box payment_method_<?php echo esc_attr($gateway->id); ?>" <?php if (!$gateway->chosen) : /* phpcs:ignore Squiz.ControlStructures.ControlSignature.NewlineAfterOpenBrace */ ?>style="display:none;"<?php endif; /* phpcs:ignore Squiz.ControlStructures.ControlSignature.NewlineAfterOpenBrace */ ?>>
			<?php $gateway->payment_fields(); ?>
		</div>
	<?php endif; ?> -->
</li>

<script>
	var panels = document.getElementsByClassName("option-item__methods");
	var actives = document.getElementsByClassName('bottom');
	for (i = 0; panels.length > i; i++) {
		panels[i].onclick = function() {
			var currentActive = actives[0];
			if (currentActive)
				currentActive.classList.remove("bottom");

			if (currentActive !== this)
				this.classList.add("bottom");
		};
	}
</script>