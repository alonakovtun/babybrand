<?php // Template Name: QUALITY & CARE
get_header();
?>
<section class="information">
    <div class="information__content">
        <div class="information_title">
            <p><?php the_field('quality_and_care_title'); ?></p> 
        </div>
        <p><?php the_field('quality_and_care_content'); ?></p>
    </div>
</section>
<?php
get_footer();
