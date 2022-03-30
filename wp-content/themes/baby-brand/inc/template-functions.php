<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package baby
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function baby_body_classes( $classes ) {
    // Adds a class of hfeed to non-singular pages.
    if ( ! is_singular() ) {
        $classes[] = 'hfeed';
    }

    // Adds a class of no-sidebar when there is no sidebar present.
    if ( ! is_active_sidebar( 'sidebar-1' ) ) {
        $classes[] = 'no-sidebar';
    }

    return $classes;
}
add_filter( 'body_class', 'baby_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function baby_pingback_header() {
    if ( is_singular() && pings_open() ) {
        printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
    }
}
add_action( 'wp_head', 'baby_pingback_header' );

add_action('init', 'baby_blog');
function baby_blog()
{
    register_post_type(
        'blog',
        array(
            'labels' => array(
                'name'               => 'Blog',
                'singular_name'      => 'Blog',
                'add_new'            => 'Add Blog',
                'add_new_item'       => 'Adding New Blog',
                'edit_item'          => 'Edit Blog',
                'new_item'           => 'New Blog',
                'view_item'          => 'View Blog',
                'search_items'       => 'Search For Blog',
                'menu_name'          => 'Blog',
            ),
            'taxonomies'          => array('category'),
            'supports'            => array('title', 'thumbnail', 'editor'),
            'public'              => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-welcome-write-blog',
            'rewrite'             => array('slug' => 'blog')
        )
    );
};
