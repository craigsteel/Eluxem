<?php
/**
 * The template for displaying search results pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Eluxem
 */

// No direct access, please
if (!defined('ABSPATH')) exit; // Exit if accessed directly

get_header();
?>

<div id="content" class="site-content">
	
<?php
if ( have_posts() ) : ?>

	<header class="page-header">
		<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'eluxem' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	</header><!-- .page-header -->

<?php
else :

	get_template_part( 'template-parts/content', 'none' );
	return;

endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		/* Start the Loop */
		while ( have_posts() ) : the_post();

			/**
			 * Run the loop for the search to output the results.
			 * If you want to overload this in a child theme then include a file
			 * called content-search.php and that will be used instead.
			 */
			get_template_part( 'template-parts/content' );

		endwhile;

			the_posts_navigation(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
