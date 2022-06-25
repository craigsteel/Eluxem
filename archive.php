<?php
/**
 * The template for displaying archive pages
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
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
					?>

			   	</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->

	</figure><!-- end feature-image-page -->

	<?php 
	else :

	get_template_part( 'template-parts/content', 'none' );
	return;

	endif; ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main">

					
	        <?php

			/* Start the Loop */
			while ( have_posts() ) : the_post();
			/*
			* Include the Post-Format-specific template for the content.
			* If you want to override this in a child theme, then include a file
			* called content-___.php (where ___ is the Post Format name) and that will be used instead.
			*/
			get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation(); ?>




		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
