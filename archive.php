<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package    carbon-copy
 * @since    0.0.1
 * @version    0.0.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<main class="site-content" id="content">

	<?php
	if ( have_posts() ) :
		?>
		<?php
		// Start the Loop.
		while ( have_posts() ) :
			the_post();

			/*
			 * Include the Post-Format-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Format name) and that
			 * will be used instead.
			 */
			get_template_part( 'template-parts/content', get_post_format() );

		endwhile;

		get_template_part( 'template-parts/pagination', 'pagination' );

	else :

		get_template_part( 'template-parts/no-content', 'none' );

	endif;
	?>

</main><!-- #main content -->

<?php get_footer(); ?>
