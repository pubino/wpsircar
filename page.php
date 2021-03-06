<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) :
			the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End the loop.
		endwhile;
		?>

	</main><!-- .site-main -->
	<?php
	if ( is_active_sidebar( 'wpsircar-contentwell-widget-area' ))?>
		<div id="wpsircar-contentwell-widget-area" class="widget-area">
			<?php dynamic_sidebar( 'wpsircar-contentwell-widget-area' ); ?>
		</div>

	<?php get_sidebar( 'content-bottom' ); ?>

	<?php get_sidebar(); ?>

</div><!-- .content-area -->

<?php get_footer(); ?>
