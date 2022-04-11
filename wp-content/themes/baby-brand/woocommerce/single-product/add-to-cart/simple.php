<?php

/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

global $product;

if (!$product->is_purchasable()) {
	return;
}

echo wc_get_stock_html($product); // WPCS: XSS ok.


if ($product->is_in_stock()) : ?>
	<div class="item-settings">
		<div class="item-settings__name ">Colour</div>
		<div class="item-settings__variants">
			<div class="item-settings__color"><img class="color-icon" src="/wp-content/themes/baby-brand/assets/img/products/colors/colorsilver.png" alt="">
			</div>
			<div class="item-settings__color"><img class="color-icon" src="/wp-content/themes/baby-brand/assets/img/products/colors/colorwhite.png" alt="">
			</div>
			<div class="item-settings__color"><img class="color-icon" src="/wp-content/themes/baby-brand/assets/img/products/colors/colorgold.png" alt="">
			</div>
		</div>
	</div>



	<div class="item-settings">
		<div class="item-settings__name ">Size</div>
		<div class="item-settings__variants">
			<div class="item-settings__size">S</div>
			<div class="item-settings__size">M</div>
			<div class="item-settings__size">L</div>
			<div class="item-settings__size">XL</div>
		</div>
	</div>
	<div class="">
		<form class="cart " action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', $product->get_permalink())); ?>" method="post" enctype='multipart/form-data'>
			<?php do_action('woocommerce_before_add_to_cart_button'); ?>

			<?php
			do_action('woocommerce_before_add_to_cart_quantity');

			woocommerce_quantity_input(
				array(
					'min_value'   => apply_filters('woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product),
					'max_value'   => apply_filters('woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product),
					'input_value' => isset($_POST['quantity']) ? wc_stock_amount(wp_unslash($_POST['quantity'])) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
				)
			);
			do_action('woocommerce_after_add_to_cart_quantity');
			?>
			<div class="main_btn_area item-cart">
				<div class="">
					<button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>" class="item-cart__text single_add_to_cart_button button alt item-cart__text"><?php echo esc_html($product->single_add_to_cart_text()); ?></button>
				</div>
				<div class="add-to-wish">
					<?php echo do_shortcode("[yith_wcwl_add_to_wishlist]") ?>
				</div>
			</div>


			<?php do_action('woocommerce_after_add_to_cart_button'); ?>
		</form>


	</div>
	<div class="item-cart notactive">
		<p class="item-cart__text notactive ">select variant</p>

	</div>
	<div class="item-bottom">
		<div class="item-bottom__list">
			<div class="item-bottom__link" href="">Size guide</div>
			<p class="item-bottom__text">This basic cardigan is a perfect easy-going outer
				layer.
				Crafted rom an ultra cosy thin cotton fleece, with an incredible soft touch -
				the
				softest possible fabric for your childs delicate skin. Opens fully with small
				snaps.
				The most simple design in basic colors.</p>
		</div>

		<div class="item-bottom__list">
			<div class="item-bottom__link" href="">Shipping info</div>
			<p class="item-bottom__text">Thisss basic cardigan is a perfect easy-going outer
				layer.
				Crafted rom an ultra cosy thin cotton fleece, with an incredible soft touch -
				the
				softest possible fabric for your childs delicate skin. Opens fully with small
				snaps.
				The most simple design in basic colors.</p>
		</div>
		<div class="item-bottom__list">
			<div class="item-bottom__link" href="">Exchange & Returns
				Policy</div>
			<p class="item-bottom__text">This basic cardigan is a perfect easy-going outer
				layer.
				Crafted rom an ultra cosy thin cotton fleece, with an incredible soft touch -
				the
				softest possible fabric for your childs delicate skin. Opens fully with small
				snaps.
				The most simple design in basic colors.</p>
		</div>

	</div>
<?php endif; ?>