<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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



    <?php if (get_option( 'page_for_posts' ) ): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_option( 'page_for_posts' )), 'eluxem-full-bleed' ); ?>
 
	<figure class="featured-image full-bleed" style="background: url('<?php echo $image[0]; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">


		<div class="contanier">
			<div class="row">
			    <div class="col-md-10 page-head">

			        <h2><?php if(get_option( 'page_for_posts' ) ) echo get_the_title( get_option( 'page_for_posts' ) ); ?> </h2>

			   	</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->

	</figure><!-- end feature-image-page -->

		<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

				    <?php
			if ( have_posts() ) :
			if ( is_home() && ! is_front_page() ) : 
	        ?>

	        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					
	        <?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();
			/*
			* Include the Post-Format-specific template for the content.
			* If you want to override this in a child theme, then include a file
			* called content-___.php (where ___ is the Post Format name) and that will be used instead.
			*/
			get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

			else :

			get_template_part( 'template-parts/content', 'none' );

			endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
