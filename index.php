<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package    Carbon
 * @since    0.0.1
 * @version    0.0.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php
/**
 * Fires before the content, after the content layout wrap opening markup.
 */
do_action( 'carbon_before_content' );
?>

    <main class="site-content content" id="content">

		<?php

		// Get $post if you're inside a function.
		global $post;
		if ( have_posts() ) :

			// Start the Loop.
			while ( have_posts() ) :
				the_post();
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that
				 * will be used instead.
				 */
				get_template_part( 'template-parts/content' ); // article
				// End the loop.
			endwhile;

			get_template_part( 'template-parts/pagination', 'pagination' );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/no-content', 'none' );
		endif;
		?>

    </main><!-- #main content -->
<?php
/**
 * Fires after the content, before the main content layout wrap closing markup.
 */
do_action( 'carbon_after_content' );
?>

<?php get_footer(); ?>