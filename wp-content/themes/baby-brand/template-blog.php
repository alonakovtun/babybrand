<?php /* Template Name: Blog */
get_header(); ?>


<main class="main">
    <div class="categories">
        <div class="categories__body">
            <?php
                    $posts = get_posts(array(
                        'numberposts' => -1,
                        'category'    => 0,
                        'orderby'     => 'date',
                        'order'       => 'DESC',
                        'include'     => array(),
                        'exclude'     => array(),
                        'post_type'   => 'blog',
                        'suppress_filters' => true,
                    )); 

                    foreach ($posts as $post) :
                        setup_postdata($post);
            ?>

            <div class="categories__column item-category">
                <a href="<?php the_permalink() ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="images" />
                </a>
                <div class="item-category__text">
                    <p><?php the_date('d.m.Y'); ?></p>
                    <?php the_content(); ?>
                </div>
                <a href="<?php the_permalink() ?>" class="categories__name"><?php the_title(); ?></a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>