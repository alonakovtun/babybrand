<?php /* Template Name: Blog */
get_header(); ?>

        <?php
        $i = 1;
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
            $i += 2;
            ?>

<main class="main">
    <div class="categories">
        <div class="categories__body">
            <div class="categories__column item-category">
                <a href="<?php the_permalink() ?>" class="bestsellery__image">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="images" />
                </a>

                <div class="item-category__text">
                    <a href="#" class="categories__name"><?php the_title(); ?></a>
                </div>

                <div class="item-category__text">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</main>





        <?php endforeach; ?>
    </div>
</section>

<?php get_footer(); ?>