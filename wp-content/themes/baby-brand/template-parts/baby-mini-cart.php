<!-- # START Sidebar Cart - Header -->
<form class="woocommerce-cart-form" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
    <div class="card-page">
        <p class="card-page__title">
            <?= esc_html__(WC()->cart->get_cart_contents_count() . ' products in card' .  '', 'baby-brand'); ?>
            <span>
                <?php /**
            global $woocommerce_ultimate_multi_currency_suite;
            $default_currency = get_woocommerce_currency();
            if (empty($woocommerce_ultimate_multi_currency_suite->settings->session_currency)) { // if no currency stored in session
            $current_curr = $default_currency;
            } else {
            $current_curr = $woocommerce_ultimate_multi_currency_suite->settings->session_currency;
            }
                 */
                ?>
            </span>
        </p>
        <!-- # END Sidebar Cart - Header -->
        <div class="cart-flex">
            <?php if (!WC()->cart->is_empty()) : ?>
                <!-- <div class="widget woocommerce widget_shopping_cart">
        <div class="widget_shopping_cart_content">

        </div>
        </div> -->
                <div class="card-page__body">
                    <ul class="card-page__columns">
                        <?php
                        do_action('woocommerce_before_mini_cart_contents');
                        // Loop - Begin
                        foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                            $_product     = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                            $product_id   = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

                            if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key)) {
                                $product_name      = apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key);
                                $thumbnail         = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);
                                $thumbnail_url     = get_the_post_thumbnail_url($product_id);
                                $product_price     = apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key);
                                $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
                                $product_data      = wc_get_formatted_cart_item_data($cart_item);
                        ?>

                                <li class="card-page__column item-card mini-cart__item cart-item woocommerce-mini-cart-item <?php echo esc_attr(apply_filters('woocommerce_mini_cart_item_class', 'mini_cart_item', $cart_item, $cart_item_key)); ?>">
                                    <?php get_template_part('template-parts/hedo-loader'); ?>
                                    <!-- # Item - Product Image -->
                                    <div class="item-card__img">
                                        <img src="<?php echo $thumbnail_url; ?>" alt="" />
                                    </div>

                                    <div class="item-card__body card-body">
                                        <div class="card-body__row">
                                            <div class="support-box">
                                                <?php if (empty($product_permalink)) : ?>
                                                    <a href="<?php echo $product_permalink; ?>" class="card-body__name"><?= $product_name; ?></a>
                                                <?php else : ?>
                                                    <a href="<?php echo $product_permalink; ?>" class="card-body__name">
                                                        <?= $product_name; ?>
                                                    </a>
                                                <?php endif; ?>
                                                <p class="card-body__price"><?= $_product->get_price_html(); ?></p>
                                            </div>
                                        </div>
                                        <div class="card-body__row align-bottom">
                                            <div data-title="<?php esc_attr_e('Quantity', 'woocommerce'); ?>" data-key="<?= esc_attr($cart_item_key) ?>" data-qty="<?= $cart_item['quantity']; ?>" class="quantity-block">

                                                <?php
                                                if ($_product->is_sold_individually()) {
                                                    $product_quantity = sprintf('1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key);
                                                } else {
                                                    $product_quantity = woocommerce_quantity_input(
                                                        array(
                                                            'input_name'   => "cart[{$cart_item_key}][qty]",
                                                            'input_value'  => $cart_item['quantity'],
                                                            'max_value'    => $_product->get_max_purchase_quantity(),
                                                            'min_value'    => '0',
                                                            'product_name' => $_product->get_name(),
                                                        ),
                                                        $_product,
                                                        false
                                                    );
                                                }

                                                echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item); // PHPCS: XSS ok.
                                                ?>
                                            </div>

                                            <div>
                                                <!-- # Item - Remove Button -->
                                                <?php
                                                echo apply_filters('woocommerce_cart_item_remove_link', sprintf(
                                                    '<a href="%s" class="checkout__remove remove trigger-change">%s</a>',
                                                    esc_url(wc_get_cart_remove_url($cart_item_key)),
                                                    __('Remove', 'woocommerce'),
                                                    __('Remove', 'hedo'),
                                                ), $cart_item_key);
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                        <?php
                            }
                        }
                        // Loop - End

                        do_action('woocommerce_mini_cart_contents');
                        ?>

                    </ul>
                </div>

            <?php else : ?>




            <?php endif; ?>
            <!-- # END LIST PRODUCT -->


            <!-- # Sidebar Cart - Footer -->

            <?php if (WC()->cart->get_cart_contents_count()) : ?>
                <div class="card-page__columns checkout">
                    <!-- Total -->
                    <div class=" item-total__body">
                        <span class="item-total__subtotal"><?= _e('Subtotal', 'baby-brand'); ?></span>
                        <span class="item-total__price"><?= WC()->cart->get_cart_subtotal(); ?></span>
                    </div>

                    <?php do_action('woocommerce_widget_shopping_cart_before_buttons'); ?>

                    <p class=" item-total__button ">
                        <? // do_action( 'woocommerce_widget_shopping_cart_buttons' );
                        ?>

                        <a href="<?= get_page_link(8); ?>" class="item-total__button_link">
                            <?= _e('Checkout', 'baby-brand'); ?>
                        </a>
                    </p>

                    <?php do_action('woocommerce_after_mini_cart'); ?>
                </div>
            <?php else : ?>
                <div class=" s-drop-cart_foot a-flx-col-btw "> </div>
            <?php endif; ?>
            <!-- # END Sidebar Cart - Footer -->

        </div>
        <!-- # START LIST PRODUCT -->

    </div>
    <button type="submit" class="button" name="update_cart" value="<?php esc_attr_e('Update cart', 'woocommerce'); ?>"><?php esc_html_e('Update cart', 'woocommerce'); ?></button>

    <?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>
</form>