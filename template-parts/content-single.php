<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eluxem
 */

// No direct access, please
if (!defined('ABSPATH')) exit; // Exit if accessed directly

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php
	if ( has_post_thumbnail() ) { ?>
	<figure class="featured-image full-bleed">
		<?php
		the_post_thumbnail('eluxem-full-bleed');
		?>
	</figure><!-- .featured-image full-bleed -->
	<?php } ?>

    <div class="row justify-center">
    	<div class="col-md-10">

	<header class="entry-header">
		<?php eluxem_the_category_list(); ?>
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div class="entry-meta">
			<?php eluxem_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="post-content">
		
		<?php
		if ( !is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div class="post-content__wrap">
			<div class="entry-meta">
				<?php eluxem_posted_on(); ?>
			</div><!-- .entry-meta -->
			<div class="post-content__body">
		<?php
		endif; ?>
		
		<div class="entry-content">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'eluxem' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'eluxem' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php eluxem_entry_footer(); ?>
		</footer><!-- .entry-footer -->

		<?php
		if ( !is_active_sidebar( 'sidebar-1' ) ) : ?>
			</div><!-- .post-content__body -->
		</div><!-- .post-content__wrap -->
		<?php endif; ?>
		
		<?php
		eluxem_post_navigation();
		?>
	</div><!-- .post-content -->
	
	<?php
	get_sidebar();
	?>
</div>
</div>
</article><!-- #post-## -->
