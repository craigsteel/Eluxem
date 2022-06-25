<?php
/**
 * The template for displaying Blog page featured image.
 *
 * @package Eluxem
 */

 // No direct access, please
 if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>


    <?php if (get_option( 'page_for_posts' ) ): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_option( 'page_for_posts' )), 'eluxem-full-bleed' ); ?>
 
	<figure class="featured-image full-bleed" style="background: url('<?php echo $image[0]; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">">


		<div class="contanier">
			<div class="row">
			    <div class="col-md-12 page-head">

			        <h2><?php if(get_option( 'page_for_posts' ) ) echo get_the_title( get_option( 'page_for_posts' ) ); ?> </h2>

			   	</div><!-- end col -->
			</div><!-- end row -->
		</div><!-- end container -->

		<?php endif; ?>

	</figure><!-- end feature-image-page -->