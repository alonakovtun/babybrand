<?php // Template Name: Shipping & Returns
get_header();
?>

<section class="information">
    <div class="information__content">
        <div class="information_title">
            <p><?php the_field('shipping_returns_title'); ?></p> 
        </div>
        <p><?php the_field('shipping_title'); ?></p>
        <p><?php the_field('shipping_content'); ?></p>
        <p><?php the_field('returns_title'); ?></p>
        <p><?php the_field('returns_content'); ?></p>
​    </div>
</section>

<?php
get_footer();
