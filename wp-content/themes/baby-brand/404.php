<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package baby-brand
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="error-404 not-found">
		<p class="header-block__name"><?php esc_html_e('error 404 page not found', 'baby-brand'); ?></p>
		<p class="header-block__text"><?php esc_html_e('The resource requested could not be found on this server.', 'baby-brand'); ?></p>


	</section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();
