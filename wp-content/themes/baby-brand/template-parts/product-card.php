
<?php $prd = wc_get_product($post->ID); ?>
<div data-prd-id="<?= the_ID(); ?>" class=" products__column item-column" data-wow-delay="0.2s">
    <!--    <img class="slider-product__like" src="--><?php //bloginfo('template_directory') 
                                                        ?>
    <!--/assets/img/Wishlist_gold-01.svg" alt=" love " />-->


    <a href="<?= the_permalink(); ?>" class="item-column__img"> 
        <?php
        $attachment_ids = $prd->get_gallery_image_ids();
        $hover_img      = wp_get_attachment_image_src($attachment_ids[0], $image_size);
        ?>
        <img class="product-image" src="<?= get_the_post_thumbnail_url($prd->get_id()); ?>" alt="" />
    </a>
    <div class="item-column__body">
        <a href="<?= the_permalink(); ?>" class="item-column__name" data-wow-delay="0.5s">
            <?php the_title(); ?>
            <?php if ($price_html = $product->get_price_html()) : ?>

                <div class="price item-column__price"><?php echo $price_html; ?></div>

            <?php endif; ?>

        </a>

        <div class="item-column__icon"><img src="/wp-content/themes/baby-brand/assets/img/products/producticon.png" alt=""></div>

    </div>

    <div class="item-column__circles">
        <div class="item-column__circle"><img src="/wp-content/themes/baby-brand/assets/img/products/colors/colorblack.png" alt="">
        </div>
        <div class="item-column__circle"><img src="/wp-content/themes/baby-brand/assets/img/products/colors/colorcolorlightbeige.png" alt="">
        </div>
        <div class="item-column__circle"><img src="/wp-content/themes/baby-brand/assets/img/products/colors/colorbeige.png" alt="">
        </div>
        <div class="item-column__circle"><img src="/wp-content/themes/baby-brand/assets/img/products/colors/colorgold.png" alt="">
        </div>
    </div>

    
</div>