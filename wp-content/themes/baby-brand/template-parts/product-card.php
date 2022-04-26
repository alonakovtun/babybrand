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

        <div class="item-column__icon">
            <?php echo do_shortcode("[yith_wcwl_add_to_wishlist]") ?>
        </div>

    </div>

    <div class="item-column__circles">
        <?php if (have_rows('color_links')) : ?>
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


                    <a class="item-column__circle" href="<?php echo esc_url($permalink); ?>">
                        <div class="color-icon" style="background-color:<?php echo $color ?> "></div>
                    </a>



                    <?php wp_reset_postdata();
                    ?>
                <?php endif; ?>

            <?php endwhile; ?>

        <?php endif; ?>



    </div>
</div>