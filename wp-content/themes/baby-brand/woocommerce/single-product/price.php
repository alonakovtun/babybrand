<?php
/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
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

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
<p class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>"><?php echo $product->get_price_html(); ?></p>
</div>
<div class="item-settings">
                                <div class="item-settings__name ">Colour</div>
                                <div class="item-settings__variants">
                                    <div class="item-settings__color"><img class="color-icon"
                                            src="/wp-content/themes/baby-brand/assets/img/products/colors/colorsilver.png" alt="">
                                    </div>
                                    <div class="item-settings__color"><img class="color-icon"
                                            src="/wp-content/themes/baby-brand/assets/img/products/colors/colorwhite.png" alt="">
                                    </div>
                                    <div class="item-settings__color"><img class="color-icon"
                                            src="/wp-content/themes/baby-brand/assets/img/products/colors/colorgold.png" alt="">
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
                            <div class="item-settings">
                                <div class="item-settings__name">Quantity</div>
                                <div class="item-settings__variants">
                                    <div class="item-settings__quantity">1</div>
                                    <div class="item-settings__quantity">-</div>
                                    <div class="item-settings__quantity">+</div>
                                </div>
                            </div>
                            <div class="item-cart">
                                <p class="item-cart__text ">add to cart</p>
                                <div class="item-cart__img"><img class="product-icon"
                                        src="img/products/producticon.png" alt=""></div>
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