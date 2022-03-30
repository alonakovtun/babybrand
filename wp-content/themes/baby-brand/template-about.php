<?php // Template Name: About
get_header();
?>
<main class="main">
    <div class="about">
        <div class="about__body">
            <?php
            $image = get_field('about__img');
            if (!empty($image)) : ?>
                <div class="about__column item-about">
                    <div class="item-about__body item-about__body--1">
                        <div class="item-about__title"><? the_field('about__title') ?></div>
                        <div class="item-about__text"><? the_field('about__text') ?> </div>
                                <div class="item-about__subtitle"><? the_field('about__subtitle') ?></div>
                        </div>



                    </div>
                    <div class="about__column item-about">
                        <div class="item-column__img"><img class="img-about" src="<?php echo esc_url($image); ?>" alt="">
                        </div>
                    </div>
                <?php endif; ?>


                <?php
                    $image = get_field('about__img2');
                    if (!empty($image)) : ?>
                         <div class="about__column item-about">
                    <div class="item-column__img"><img class="img-about" src="<?php echo esc_url($image); ?>" alt=""></div>
                </div>
                <div class="about__column item-about">
                    <div class="item-about__body item-about__body--2">
                        <div class="item-about__text item-about__text--2">
                        <? the_field('about__title2') ?>
                        </div>
                        <div class="item-about__text item-about__text--2">
                        <? the_field('about__text2') ?>
                        </div>
                    </div>

                    <?php endif; ?>

                



               

                </div>



                </div>
        </div>






</main>
<?php
get_footer();
