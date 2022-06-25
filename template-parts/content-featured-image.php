 <?php
/**
 * The template for displaying featured image.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Eluxem
 */

 // No direct access, please
 if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$thumbnail_url  = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>
  
  <!-- FEATURE IMAGE --> 
    <?php if( has_post_thumbnail() ) { // check for featured image ?>
        
      <figure class="featured-image">
        <div class="featured-image__page-head">
          <h2>
            <?php the_title(); ?>
          </h2>
        </div>
        
        <?php the_post_thumbnail('full-bleed'); ?>
        
      </figure><!-- section end -->

    <?php } ?>