<?php
/**
 * My Addresses
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-address.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.6.0
 */

defined( 'ABSPATH' ) || exit;

$customer_id = get_current_user_id();

if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) {
	$get_addresses = apply_filters(
		'woocommerce_my_account_get_addresses',
		array(
			'billing'  => __( 'Billing address', 'woocommerce' ),
			'shipping' => __( 'Shipping address', 'woocommerce' ),
		),
		$customer_id
	);
} else {
	$get_addresses = apply_filters(
		'woocommerce_my_account_get_addresses',
		array(
			'billing' => __( 'Billing address', 'woocommerce' ),
		),
		$customer_id
	);
}

$oldcol = 1;
$col    = 1;
?>

<?php if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) : ?>
	<div class="u-columns woocommerce-Addresses col2-set addresses">
<?php endif; ?>

<div class="adress-page">
	<div class="adress-page__container">
		<div class="adress-page__body">
			<div class="adress-page__columns">
				<?php foreach ( $get_addresses as $name => $address_title ) : ?>
					<?php
						$address = wc_get_account_formatted_address( $name );
						$addressFieldsArray = explode('<br/>', $address);
						$col     = $col * -1;
						$oldcol  = $oldcol * -1;
					?>
					<div class="adress-page__column item-adress">
						<header class="woocommerce-Address-title title">
							<div class="item-adress__name">
								<?php echo esc_html( $address_title ); ?>
							</div>
							<div class="item-adress__edit">
								<a href="<?php echo esc_url( wc_get_endpoint_url( 'edit-address', $name ) ); ?>"><?php echo $address ? esc_html__( 'Edit', 'woocommerce' ) : esc_html__( 'Add', 'woocommerce' ); ?></a>
							</div>
						</header>

						<?php foreach ($addressFieldsArray as $field) : ?>
							<div class="item-adress__form"><?php echo $field; ?></div>
						<?php endforeach; ?>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
<?php if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) : ?>
	</div>
	<?php
endif;
