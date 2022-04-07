<?php // Template Name: SIZE GUIDE
get_header();
?>
<section class="information">
    <div class="information__content size">
        <div class="information_title">
            <p><?php the_field('main_title'); ?></p>
        </div>
        <div class="upper">
            <p><?php the_field('category1_title') ?></p>
            <p><?php the_field('category1_content') ?></p>
            <p><?php the_field('category2_title') ?></p>
            <p><?php the_field('category2_content') ?></p>
            <p><?php the_field('category3_title') ?></p>
            <p><?php the_field('category3_content') ?></p>
            <p><?php the_field('category4_title') ?></p>
            <p><?php the_field('category4_content') ?></p>
            <p><?php the_field('category5_title') ?></p>
            <p><?php the_field('category5_content') ?></p>
        </div>
    </div>
</section>
<?php
get_footer();
