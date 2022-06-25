<?php
/**
 * The template for displaying the footer
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Eluxem
 */

 
$twitter	= get_field('twitter');
$facecbook	= get_field('facebook');   
$linkedin	= get_field('linkedin');



// No direct access, please
if (!defined('ABSPATH')) exit; // Exit if accessed directly
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">

	<div class="footer-main">
        <div class="row">

			<div class="col-sm-12 col-md-3">

				<div class="footer-main__logo">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/dist/images/eluxem-logo-color.svg" alt="eluxem color logo svg">
				</div><!-- .__logo -->

					<div class="footer-main__discription">
						<strong>ELUXEM</strong> to inspire and fund ideas. To share the rewards. It’s an investment in yourself as a Korean and your culture. For 10 years we have built a network of advisors, and experts in every field of investment.
					</div>

					<div class="footer-main__listone">
						<h3>FOLLOW LUXEM ON</h3>	
						<?php eluxem_social_icons_output(); ?>		
					</div><!-- .__footer-content__list-->			

			</div><!-- .col-md-3 -->

			<div class="col-sm-6 col-md-3">
			
				<div class="footer-main__listtwo">
					<h3>Menu</h3>
						<nav class="footer-main__menu">
							
							<?php wp_nav_menu( array( 
								'theme_location' => 'footer',
								'container' => false
							) ); ?>

						</nav><!-- .social-menu -->
				</div><!-- .footer-main__list--two -->

			</div><!-- .col-md-3 -->

				
			<div class="col-sm-6 col-md-3">
				<div class="footer-main__listthree">

				<?php $loop = new WP_Query( array(
	                'post_type' => 'address',
	                'orderby'   =>  'post_id',
	                'order'     =>  'ASC'
	                )); 
	            ?>
				<h3>Contact</h3>
		           
		           	<?php while ( $loop->have_posts() ) : $loop->the_post();

		            	$location  = get_field('location');
		            	$office  = get_field('office');
						$address   = get_field('address');
						$contact   = get_field('contact_info');   
		            ?>

		                <h4><?php echo $location; ?></h4>
		               	<h5><?php echo $office; ?></h5>
		                <h6><?php echo $address; ?></h6>
		                <div class="h7"><?php echo $contact; ?></div>

		            <?php endwhile; wp_reset_query(); ?> 
	                
				</div><!-- .site-footer__list -->
			</div><!-- .col-md-3 -->

        <div class="large-arrow">
            <a data-easing="linear" href="#top" class="csd-icon csd-arrow-up"></a>
        </div>

		    <div class="footer-bg-img">
	        	<img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/dist/images/bottom-wave.svg" alt="eluxem Financial Services background">
	        </div><!-- .bg-img -->

		</div><!-- .row --> 
	</div><!-- .footer-main -->


		<div id="1@#%^-bottom"></div>

			<div class="site-info">
				&copy; <?php echo date("Y"); echo " "; echo bloginfo('name'); ?>
			</div><!-- .site-info -->

</footer><!-- #colophon -->

<?php wp_footer(); ?>

	</body>
</html>
