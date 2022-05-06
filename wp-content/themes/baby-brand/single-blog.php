<?php // Template Name: Stories
get_header();
?>

<main class="main">
    <div class="stories__body desktop">
        <div class="stories__info">
            <div class="stories__title"><?php the_title(); ?><br>
                <span><?php the_field('date') ?></span>
            </div>
            <div class="stories__subtitle"><?php the_field('content1') ?></div>
        </div>
        <div class="stories__images">
            <?php
            $image1 = get_field('image1');
            $image2 = get_field('image2');
            $image3 = get_field('image3')
            ?>
            <div class="stories__img"><img class="img-stories" src="<?php echo esc_url($image1) ?>" alt=""></div>
            <div class="stories__img"><img class="img-stories" src="<?php echo esc_url($image2) ?>" alt=""></div>
        </div>
        <div class="stories__text"><?php the_field('content2') ?>
        </div>

        <div class="stories__bottomimg">
            <img src="<?php echo esc_url($image3) ?>" alt="">
        </div>
    </div>

    <div class="stories__body mobile">
        <div class="stories__images">
            <?php
            $image1 = get_field('image1');
            $image2 = get_field('image2');
            ?>
            <div class="stories__img"><img class="img-stories" src="<?php echo esc_url($image1) ?>" alt=""></div>
        </div>
        <div class="stories__info">

            <div class="stories__title"><?php the_title(); ?><br>
                <span><?php the_field('date') ?></span>
            </div>
            <div class="stories__subtitle"><?php the_field('content1') ?></div>
        </div>

        <div class="stories__images">
            <div class="stories__img"><img class="img-stories" src="<?php echo esc_url($image2) ?>" alt=""></div>
        </div>
        <div class="stories__text"><?php the_field('content2') ?>
        </div>

    </div>
</main>

<?php
get_footer();
