<?php
/**
 * Template Name: Contact Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Eluxem
 */

// No direct access, please
if (!defined('ABSPATH')) exit; // Exit if accessed directly

get_header();

get_template_part('template-parts/content','featured-image'); ?>

<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php $loop = new WP_Query( array(
				'post_type' => 'address',
				'orderby'   =>  'post_id',
				'order'     =>  'ASC'
				)); 
			?>

			<div class="row justify-center">

			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

				<?php
					$location  = get_field('location');
					$address   = get_field('address');
					$contact   = get_field('contact_info');
				?>

			<div class="col-md-3 col-sm-3 col-xs-12">
			<div class="contact-sub">

					<h3><?php echo $location ?></h3>
						<?php echo $address ?>
						</br>
						<?php echo $contact ?>
						</br>

				</div><!-- .lux -->	
			</div><!-- .col -->	
					<?php endwhile; wp_reset_query(); ?> 				      
		</div><!-- .row -->	

				<!-- CONTACT FORM -->
			


				<div id="contact-form" class="contact-form">

					<?php get_template_part('template-parts/content','contact'); ?>

					<figure class="contact-tablet-img">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/dist/images/eluxem-b-1000-contact-form-bg.jpg" alt="eluxem contact-form background image mobile">
					</figure><!-- .bg-img -->

					<figure class="contact-mobile-img">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/dist/images/eluxem-1000-contact-form-bg.jpg" alt="eluxem contact-form background image mobile">
					</figure><!-- .bg-img -->

					<figure class="contact-desktop-img">
						<img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/dist/images/eluxem-2000-contact-form-bg.jpg" alt="eluxem contact-form background image">
					</figure><!-- .bg-img -->

				</div>

		</main><!--#main-->
</div><!--#primary-->

<?php get_footer(); 
