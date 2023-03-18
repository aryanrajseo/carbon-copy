<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package    Carbon-copy
 * @since    0.0.1
 * @version    0.0.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<main class="site-content" id="content">

    <section class="error-404 not-found">


        <div class="entry-content">
            <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'Carbon' ); ?></p>

			<?php get_search_form(); ?>

        </div><!-- .page-content -->
    </section><!-- .error-404 -->

</main><!-- #main content -->


<?php get_footer(); ?>
