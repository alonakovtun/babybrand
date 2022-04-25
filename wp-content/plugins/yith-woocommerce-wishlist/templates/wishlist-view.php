<?php
/**
 * Wishlist page template - Standard Layout
 *
 * @author YITH
 * @package YITH\Wishlist\Templates\Wishlist\View
 * @version 3.0.0
 */

/**
 * Template variables:
 *
 * @var $wishlist                      \YITH_WCWL_Wishlist Current wishlist
 * @var $wishlist_items                array Array of items to show for current page
 * @var $wishlist_token                string Current wishlist token
 * @var $wishlist_id                   int Current wishlist id
 * @var $users_wishlists               array Array of current user wishlists
 * @var $pagination                    string yes/no
 * @var $per_page                      int Items per page
 * @var $current_page                  int Current page
 * @var $page_links                    array Array of page links
 * @var $is_user_owner                 bool Whether current user is wishlist owner
 * @var $show_price                    bool Whether to show price column
 * @var $show_dateadded                bool Whether to show item date of addition
 * @var $show_stock_status             bool Whether to show product stock status
 * @var $show_add_to_cart              bool Whether to show Add to Cart button
 * @var $show_remove_product           bool Whether to show Remove button
 * @var $show_price_variations         bool Whether to show price variation over time
 * @var $show_variation                bool Whether to show variation attributes when possible
 * @var $show_cb                       bool Whether to show checkbox column
 * @var $show_quantity                 bool Whether to show input quantity or not
 * @var $show_ask_estimate_button      bool Whether to show Ask an Estimate form
 * @var $show_last_column              bool Whether to show last column (calculated basing on previous flags)
 * @var $move_to_another_wishlist      bool Whether to show Move to another wishlist select
 * @var $move_to_another_wishlist_type string Whether to show a select or a popup for wishlist change
 * @var $additional_info               bool Whether to show Additional info textarea in Ask an estimate form
 * @var $price_excl_tax                bool Whether to show price excluding taxes
 * @var $enable_drag_n_drop            bool Whether to enable drag n drop feature
 * @var $repeat_remove_button          bool Whether to repeat remove button in last column
 * @var $available_multi_wishlist      bool Whether multi wishlist is enabled and available
 * @var $no_interactions               bool
 */

if ( ! defined( 'YITH_WCWL' ) ) {
	exit;
} // Exit if accessed directly
?>

<main class="main">
	<div class="wishlist">
		<div class="wishlist__container container">
			<div class="wishlist__body">
				<?php 
					if ( $wishlist && $wishlist->has_items() ) :
						foreach ( $wishlist_items as $item ) :
							/**
							* Each of the wishlist items
							*
							* @var $item \YITH_WCWL_Wishlist_Item
							*/
							global $product;

							$product      = $item->get_product();
							$availability = $product->get_availability();
							$stock_status = isset( $availability['class'] ) ? $availability['class'] : false;

							if ( $product && $product->exists() ) :
				?>
					<div class="wishlist__column item-card">
						<div class="wishlist__img">
							<?php do_action( 'yith_wcwl_table_before_product_thumbnail', $item, $wishlist ); ?>

							<a href="<?php echo esc_url( get_permalink( apply_filters( 'woocommerce_in_cart_product', $item->get_product_id() ) ) ); ?>">
								<?php echo wp_kses_post( $product->get_image() ); ?>
							</a>

							<?php do_action( 'yith_wcwl_table_after_product_thumbnail', $item, $wishlist ); ?>
						</div>
						<div class="wishlist-body card-body">
							<div class="wishlist__row">
								<div class="wishlist-body__name">
									<?php do_action( 'yith_wcwl_table_before_product_name', $item, $wishlist ); ?>

									<a href="<?php echo esc_url( get_permalink( apply_filters( 'woocommerce_in_cart_product', $item->get_product_id() ) ) ); ?>">
										<?php echo wp_kses_post( apply_filters( 'woocommerce_in_cartproduct_obj_title', $product->get_title(), $product ) ); ?>
									</a>

									<?php
									if ( $show_variation && $product->is_type( 'variation' ) ) {
										/**
										* Product is a Variation
										*
										* @var $product \WC_Product_Variation
										*/
										echo wp_kses_post( wc_get_formatted_variation( $product ) );
									}
									?>

									<?php do_action( 'yith_wcwl_table_after_product_name', $item, $wishlist ); ?>
								</div>
								<div class="card-body__price">
									<?php if ( $show_price || $show_price_variations ) : ?>
									<?php do_action( 'yith_wcwl_table_before_product_price', $item, $wishlist ); ?>

									<?php
									if ( $show_price ) {
										echo wp_kses_post( $item->get_formatted_product_price() );
									}

									if ( $show_price_variations ) {
										echo wp_kses_post( $item->get_price_variation() );
									}
									?>

									<?php do_action( 'yith_wcwl_table_after_product_price', $item, $wishlist ); ?>

									<?php endif ?>
								</div>
							</div>
							<div class="wishlist-body__remove">
								<a href="<?php echo esc_url( $item->get_remove_url() ); ?>" class="remove_from_wishlist button" title="<?php echo esc_html( apply_filters( 'yith_wcwl_remove_product_wishlist_message_title', __( 'Remove this product', 'yith-woocommerce-wishlist' ) ) ); ?>">
									<?php esc_html_e( 'Remove', 'yith-woocommerce-wishlist' ); ?>
								</a>
							</div>
						</div>
					</div>
				<?php 
							endif;
						endforeach;
					else : echo esc_html( apply_filters( 'yith_wcwl_no_product_to_remove_message', __( 'No products added to the wishlist', 'yith-woocommerce-wishlist' ), $wishlist ) ); 
endif ?>
 			</div>
		</div>
	</div>
</main>
