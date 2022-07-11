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


	<?php if (have_rows('color_links')) : ?>
		<div class="item-settings">
			<div class="item-settings__name link">Colour</div>
			<?php while (have_rows('color_links')) : the_row(); ?>
				<?php
				$post_object = get_sub_field('color_product_link');
				$color = get_sub_field('color');
				?>
				<?php if ($post_object) : ?>
					<?php // override $post
					$post = $post_object;
					$permalink = get_permalink($post_object->ID);
					setup_postdata($post);
					?>

					<div class="item-settings__variants">
						<a class="item-settings__color" href="<?php echo esc_url($permalink); ?>">
							<div class="color-icon" style="background-color:<?php echo $color ?> "></div>
						</a>
					</div>


					<?php wp_reset_postdata();
					?>
				<?php endif; ?>

			<?php endwhile; ?>
		</div>
	<?php endif; ?>







	
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
			<div class="add_btn">
					<button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>" class="main_btn_area item-cart item-cart__text single_add_to_cart_button button alt item-cart__text"><?php echo esc_html('Add to Cart', 'shop'); ?></button>
			
				<div class="add-to-wish">
					<?php echo do_shortcode("[yith_wcwl_add_to_wishlist]") ?>
				</div>
			</div>


			<?php do_action('woocommerce_after_add_to_cart_button'); ?>
		</form>


	</div>
	<div class="item-cart notactive">
		<p class="item-cart__text notactive "><?php _e('select variant', 'baby-brand')?></p>

	</div>
	<div class="item-bottom">
		<div class="item-bottom__list">
			<div class="item-bottom__link"><?php _e('Size guide', 'baby-brand')?></div>
			<div class="item-bottom__text"> 
				<?php the_field('size_guide_product'); ?> 
				<div class="close-info"></div>
			</div>
		</div>

		<div class="item-bottom__list">
			<div class="item-bottom__link"><?php _e('Shipping info', 'baby-brand')?></div>
			<div class="item-bottom__text">
				<?php the_field('shipping_info_product'); ?>
				<div class="close-info"></div>
			</div>
		</div>
		<div class="item-bottom__list">
			<div class="item-bottom__link"><?php _e('Exchange & Returns Policy', 'baby-brand')?></div>
			<div class="item-bottom__text">
				<?php the_field('exchange_returns_policy_product'); ?>
				<div class="close-info"></div>
			</div>
		</div>

	</div>
<?php endif; ?>