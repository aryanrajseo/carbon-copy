<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package    carbon-copy
 * @since    0.0.1
 * @version    0.0.1
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
    <main class="site-content" id="content">

		<?php
		if ( have_posts() ) :
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'excerpt' );


			endwhile; // End the loop.

			the_posts_pagination(
				array(
					'prev_text'          => '<span class="screen-reader-text">' . __( 'Previous page', 'Carbon' ) . '</span>',
					'next_text'          => '<span class="screen-reader-text">' . __( 'Next page', 'Carbon' ) . '</span>',
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'Carbon' ) . ' </span>',
				)
			);
		else :
			?>

            <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Carbon' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>

    </main><!-- #main content -->

<?php
/**
 * Fires after the content, before the main content layout wrap closing markup.
 */
do_action( 'carbon_after_content' );
?>


<?php
get_footer();

