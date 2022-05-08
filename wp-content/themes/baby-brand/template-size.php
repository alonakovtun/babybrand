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
                <p class="title"><?php the_field('category1_title') ?></p>
                <div class="content"><?php the_field('category1_content') ?></div>
            </div>
            <div class="size-block">
                <p class="title"><?php the_field('category2_title') ?></p>
                <div class="content"><?php the_field('category2_content') ?></div>
            </div>
            <div class="size-block">
                <p class="title"><?php the_field('category3_title') ?></p>
                <div class="content"><?php the_field('category3_content') ?></div>
            </div>
            <div class="size-block">
                <p class="title"><?php the_field('category4_title') ?></p>
                <div class="content"><?php the_field('category4_content') ?></div>
            </div>
            <div class="size-block">
                <p class="title"><?php the_field('category5_title') ?></p>
                <div class="content"><?php the_field('category5_content') ?></div>
            </div>





        </div>
    </div>
</section>
<?php
get_footer();
