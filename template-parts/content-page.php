<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eluxem
 */

$location  = get_field('location');
$address   = get_field('address');
$contact    = get_field('contact-info');
$twitter	= get_field('twitter');
$facecbook	= get_field('facebook');   
$linkedin	= get_field('linkedin');    

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="row justify-center">
		<div class="col-md-8">

			<div class="entry-content">
				<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'eluxem' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

		</div><!-- .col- -->
	</div><!-- .row -->

				<?php if ( get_edit_post_link() ) : ?>
					<footer class="entry-footer">
						<?php
						edit_post_link(
							sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__( 'Edit <span class="screen-reader-text">%s</span>', 'eluxem' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								get_the_title()
							),
							'<span class="edit-link">',
							'</span>'
						);
						?>
					</footer><!-- .entry-footer -->
				<?php endif; ?>
			</article><!-- #post-<?php the_ID(); ?> -->


