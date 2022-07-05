<section class="related products">
    <?php

    $items = get_field('related_products');
    if ($items) : ?>

        <div class="container">
            <div class="first-block">
                <div class="top">
                    <div class="products__title"><? _e('Related Products', 'baby-brand'); ?></div>

                </div>
            </div>
        </div>

        <div class="second-block products">

            <section class="related-products">

                <div class="swiper-container related-product">
                    <div class="swiper-wrapper products__body products columns-4">

                        <?php foreach ($items as $item) :
                            $permalink = get_permalink($item->ID);
                            $id = wc_get_product($item->ID);
                            $price = $id->get_price();
                            $thumbnail         = apply_filters('woocommerce_cart_item_thumbnail', $id->get_image());
                            $title = $item->post_title;
                        ?>



                            <div class="swiper-slide  products__column item-column">
                                <div data-prd-id="<?= $item->ID ?>" class="slider-product">
                                    <a href="<?= $permalink; ?>" class="slider-product__image item-column__img">
                                        <?php
                                        $prd = wc_get_product($item->ID);
                                        $attachment_ids = $prd->get_gallery_image_ids();
                                        $hover_img      = wp_get_attachment_image_src($attachment_ids[0], $image_size);
                                        ?>
                                        <div class="_first">
                                            <img class="product-image" src="<?= get_the_post_thumbnail_url($prd->get_id()); ?>" alt="" />
                                        </div>
                                        <div class="_second">
                                            <img class="product-image" src="<?= wp_get_attachment_url($attachment_ids[0]); ?>" alt="" />
                                        </div>
                                    </a>
                                    <div class="slider-product__bottom related__slider-product-bottom item-column__body">
                                        <div class="title">
                                            <a href="<?= $permalink; ?>" class="slider-product__name item-column__name"><?= $title;  ?></a>
                                            <a href="<?= $permalink; ?>" class="slider-product__price price item-column__price">
                                                <span class="price"><?php echo $price; ?>EUR</span>
                                            </a>
                                        </div>

                                        <div class="item-column__icon">
                                            <?php echo do_shortcode("[yith_wcwl_add_to_wishlist]") ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>


                    </div>


                </div>
            </section>
        <?php endif; ?>

        </div>



</section>