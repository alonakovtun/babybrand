<?php // Template Name: SIZE GUIDE
get_header();
?>
<section class="information">
    <div class="information__content size">
        <div class="information_title">
            <p><?php the_field('main_title'); ?></p>
        </div>
        <div class="upper">
            <div class="size-block">
                <p><?php the_field('category1_title') ?></p>
                <p><?php the_field('category1_content') ?></p>
            </div>
            <div class="size-block">
                <p><?php the_field('category2_title') ?></p>
                <p><?php the_field('category2_content') ?></p>
            </div>
            <div class="size-block">
                <p><?php the_field('category3_title') ?></p>
                <p><?php the_field('category3_content') ?></p>
            </div>
            <div class="size-block">
                <p><?php the_field('category4_title') ?></p>
                <p><?php the_field('category4_content') ?></p>
            </div>
            <div class="size-block">
                <p><?php the_field('category5_title') ?></p>
                <p><?php the_field('category5_content') ?></p>
            </div>





        </div>
    </div>
</section>
<?php
get_footer();
