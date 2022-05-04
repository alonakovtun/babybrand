<?php // Template Name: Home
get_header();
?>
<main class="main">
    <section class="first-screen active">
        <div class="first-screen__bg">
            <?php
            $image = get_field('main_bunner');
            if( !empty( $image ) ): ?>
                <img class="first-screen-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
        <h1 class="first-screen__subtitle"><?= get_field('main_bunner_title') ?>
        </h1>
    </section>
    <section class="categories">
        <div class="categories__body">
            <?php
            $terms = get_field('category_product');
            $i = 1;
            if ($terms) : ?>
                <?php foreach ($terms as $term) :
                    $thumbnail_id = get_term_meta($term->term_id, 'thumbnail_id', true);
                    $image = wp_get_attachment_url($thumbnail_id);
                    $description = $term->{'description'};
                    $i += 2;
                    ?>
                        <a href="<?= get_term_link($term->slug, 'product_cat') ?>" class="categories__column item-category" data-wow-delay="0.<?= $i > 10 ? $i = 1 : $i ?>s">
                            <img class="item-category__img" src="<?= $image ?>" alt="">
                            <div class="item-category__text">
                                <?= $description; ?>
                            </div>
                            <p class="categories__name"><?php echo esc_html($term->name); ?></p>
                        </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>
    <section class="categories__text desktop">
        <?= get_field('footer_text') ?>
    </section>

    <section class="categories__text mobile">
        <?= get_field('mobile_footer_text') ?>
    </section>
</main>
<?php
get_footer();
