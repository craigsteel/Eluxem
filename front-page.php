<?php
/**
* Template Name: Home Page
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Eluxem
*
* Custome field variables
*/

// Section one
$heading                  = get_field('main_heading');
$intro_large              = get_field('introduction_large'); 
$intro_normal             = get_field('introduction_normal');
$image_desktop            = get_field('image_desktop_and_tablet');
$image_mobile             = get_field('image_mobile');  
$image_area_desktop       = get_field('image_area_desktop_tablet');
$image_area_mobile        = get_field('image_area_mobile'); 

// Section two
$heading_2                = get_field('main_heading_2');
$intro_large_2            = get_field('introduction_large_2'); 
$intro_normal_2           = get_field('introduction_normal_2');
$image_desktop_2          = get_field('image_desktop_and_tablet_2');
$image_mobile_2           = get_field('image_mobile_2');  
$image_area_desk_2        = get_field('image_area_desktop_and_tablet_2');
$image_area_mobile_2      = get_field('image_area_mobile_2');

// Section three
$heading_3                = get_field('main_heading_3');
$intro_large_3            = get_field('introduction_large_3'); 
$intro_normal_3           = get_field('introduction_normal_3');
$image_desktop_3          = get_field('image_desktop_and_tablet_3');
$image_mobile_3           = get_field('image_mobile_3');  
$image_area_desk_3        = get_field('image_area_desktop_and_tablet_3');
$image_area_mobile_3      = get_field('image_area_mobile_3'); 

// Section four
$heading_4                = get_field('main_heading_4');
$intro_large_4            = get_field('introduction_large_4'); 
$intro_normal_4           = get_field('introduction_normal_4');
$image_desktop_4          = get_field('image_desktop_and_tablet_4');
$image_mobile_4           = get_field('image_mobile_4');  
$image_area_desk_4        = get_field('image_area_desktop_and_tablet_4');
$image_area_mobile_4      = get_field('image_area_mobile_4'); 

// Section five
$heading_5a               = get_field('main_heading_5a');
$intro_5a                 = get_field('introduction_5a'); 
$heading_5b               = get_field('main_heading_5b');
$intro_5b                 = get_field('introduction_5b');
$heading_5c               = get_field('main_heading_5c');
$intro_5c                 = get_field('introduction_5c'); 
$image_desktop_5          = get_field('image_desktop_and_tablet_5');
$image_mobile_5           = get_field('image_mobile_5');

// Section six
$heading_6                = get_field('main_heading_6');
$image_desktop_6          = get_field('image_desktop_and_tablet_6');
$image_mobile_6           = get_field('image_mobile_6');  

// No direct access, please
if (!defined('ABSPATH')) exit; // Exit if accessed directly

get_header();
?>

<div id="top"></div><!-- top of the vertical page sccroll --> 

<section id="pageOne">
  <div class="row justify-center">

    <div class="text-box text-box__main">
         
      <div class="heading-primary">
        <div class="heading-primary__corner-tl"></div>            
        <div class="heading-primary--pageone">
          <?php echo $heading; ?>
        </div>        
      </div><!-- .heading-primary -->              
                        
      <div class="heading-primary__sub">               
        <?php if( !empty($intro_large) ) : echo $intro_large; ?>
          <div class="heading-primary__corner-br--p1"></div>
        <?php endif; ?>              
      </div><!-- .heading-primary__sub -->

        <div class="heading-primary__video">
					<?php if( get_option( 'page_on_front' ) ) { 
						echo apply_filters( 'the_content', 
						get_post( get_option( 'page_on_front' ) )->post_content ); } 
					?>
        </div><!-- .heading-primary__video -->
                        
        <a href="<?php echo get_page_link(24); ?>"class="btn btn--wave">Discover More</a>

    </div><!-- .text-box -->

      <div class="large-arrow">
          <a data-easing="linear" href="#pageTwo" class="csd-icon csd-arrow-down"></a>
      </div>

        <div class="bg-img">
          <?php if( !empty($image_desktop) ) : ?>       
            <img src="<?php echo $image_desktop['url']; ?>" alt="<?php echo $image_desktop['alt']; ?>">      
          <?php endif; ?>
        </div><!-- .bg-img -->

        <div class="mobile-img">      
					<?php if( !empty($image_mobile) ) : ?>
            <img src="<?php echo $image_mobile['url']; ?>" alt="<?php echo $image_mobile['alt']; ?>">   
          <?php endif; ?>
        </div><!-- .mobile-img -->

  </div><!-- .row justify-center -->
</section><!-- #pageOne -->
    
<section id="pageTwo">
  <div class="row justify-center">

    <div class="text-box text-box__two">
         
      <div class="heading-primary">
        <div class="heading-primary__corner-tl"></div>
          <div class="heading-primary--pagetwo">
						<?php echo $heading_2; ?>
          </div>
      </div><!-- .heading-primary -->    
  
      <div class="heading-primary__sub-two">
        <?php if( !empty($intro_normal_2) ) : echo $intro_normal_2; ?>
          <div class="heading-primary__corner-br--p2"></div>      
      </div><!-- .heading-primary-sub-two-->
        <?php endif; ?>

			<div class="heading-primary__vcgs">
        <?php if( !empty($image_area_desk_2) ) : ?>
          <img src="<?php echo $image_area_desk_2['url']; ?>" alt="<?php echo $image_area_desk_2['alt']; ?>">
        <?php endif; ?>
      </div><!-- .heading-primary__vcgs -->
      
      <div class="heading-primary__vcgs--mobile">
        <?php if( !empty($image_area_mobile_2) ) : ?>
          <img src="<?php echo $image_area_mobile_2['url']; ?>" alt="<?php echo $image_area_mobile_2['alt']; ?>">
        <?php endif; ?>
      </div><!-- .heading-primary__vcgs--mobile -->
        
        <span><a href="<?php echo get_page_link(24); ?>"class="btn btn--story">Discover More</a></span>

    </div><!-- .text-box -->

      <div class="large-arrow">
        <a data-easing="linear" href="#pageThree" class="csd-icon csd-arrow-down"></a>
      </div>

        <div class="bg-img">   
					<?php if( !empty($image_desktop_2) ) : ?>
            <img src="<?php echo $image_desktop_2['url']; ?>" alt="<?php echo $image_desktop_2['alt']; ?>">
          <?php endif; ?>
        </div><!-- .bg-img -->

        <div class="mobile-img">
          <?php if( !empty($image_mobile_2) ) : ?>
            <img src="<?php echo $image_mobile_2['url']; ?>" alt="<?php echo $image_mobile_2['alt']; ?>">
          <?php endif; ?>
        </div><!-- .bg-img -->

  </div><!-- .row justify-center -->
</section><!-- #pageTwo -->

<section id="pageThree">
  <div class="row justify-center">

    <div class="text-box text-box__three">
         
      <div class="heading-primary">
        <div class="heading-primary__corner-tl"></div>
        <div class="heading-primary--pagethree">  
          <?php echo $heading_3; ?>
        </div>           
      </div><!-- .heading-primary -->   

      <div class="heading-primary__sub-two">
        <span class="heading-primary--bold">              
					<?php if( !empty($intro_normal_3) ) : echo $intro_normal_3; ?>        
				</span>   
					<?php endif; ?>
        	  <div class="heading-primary__corner-br--p2"></div>                    
			</div><!-- .heading-primary-sub-two-->
                    
        <a href="<?php echo get_page_link(24); ?>"class="btn">Discover More</a>
         
    </div><!-- .text-box -->

      <div class="large-arrow">
        <a data-easing="linear" href="#pageFour" class="csd-icon csd-arrow-down"></a>
      </div>

      <div class="bg-img">
        <?php if( !empty($image_desktop_3) ) : ?>    
          <img src="<?php echo $image_desktop_3['url']; ?>" alt="<?php echo $image_desktop_3['alt']; ?>">
        <?php endif; ?>
      </div><!-- .bg-img -->

      <div class="mobile-img">
        <?php if( !empty($image_mobile_3) ) : ?>
          <img src="<?php echo $image_mobile_3['url']; ?>" alt="<?php echo $image_mobile_3['alt']; ?>">
        <?php endif; ?> 
			</div><!-- .mobile-img -->

  </div><!-- .row justify-center -->
</section><!-- #pageThree -->

<section id="pageFour">
  <div class="row justify-center">

    <div class="text-box text-box__four">
         
      <div class="heading-primary">
          <div class="heading-primary__corner-tl"></div>
        <div class="heading-primary--pagefour">  
          <?php echo $heading_4; ?>
        </div>
			</div><!-- .heading-primary -->      

      <h3 class="heading-primary__sub-two">
        <span class="heading-primary--bold">         
					<?php if( !empty($intro_normal_4) ) : echo $intro_normal_4; ?>
       	</span> 
					<?php endif; ?>         
						
          <div class="heading-primary__corner-br--p2"></div>               
      </h3>

        <a href="<?php echo get_page_link(24); ?>"class="btn">Discover More</a>
         
    </div><!-- .text-box -->

      <div class="large-arrow">
        <a data-easing="linear" href="#pageFive" class="csd-icon csd-arrow-down"></a>
      </div>

      <div class="bg-img">              
				<?php if( !empty($image_desktop_4) ) : ?>
          <img src="<?php echo $image_desktop_4['url']; ?>" alt="<?php echo $image_desktop_4['alt']; ?>">
        <?php endif; ?>       
			</div><!-- .bg-img -->

      <div class="mobile-img">
        <?php if( !empty($image_mobile_4) ) : ?>
					<img src="<?php echo $image_mobile_4['url']; ?>" alt="<?php echo $image_mobile_4['alt']; ?>">
        <?php endif; ?>
      </div><!-- .bg-img -->

  </div><!-- .row justify-center -->
</section><!-- #pageFour -->

<section id="pageFive">
  <div class="row justify-center">
              
    <div class="services">

			<div class="services__boxes">             
				<div class="services__boxes--corner-tl-small"></div>           
			    <span> <?php echo $heading_5a; ?></span>  
            <h3 class="services__boxes--sub">
              <span> <?php echo $intro_5a; ?></span>
              <div class="heading-primary__corner-br--p2"></div>               
            </h3>
					  <a href="<?php echo get_page_link(22); ?>" class="btn btn-xs">Discover More</a>           
			</div><!-- .service__boxes-->

      <div class="services__boxes">                      
				<div class="services__boxes--corner-tl-small"></div>    
          <span> <?php echo $heading_5b; ?></span>
            <h3 class="services__boxes--sub">
              <span><?php echo $intro_5b; ?></span>
              <div class="heading-primary__corner-br--p2"></div>     
            </h3>                  
						<a href="<?php echo get_page_link(22); ?>" class="btn btn-xs">Discover More</a>            
			</div><!-- .service-boxes-->
                    
      <div class="services__boxes">  
        <div class="services__boxes--corner-tl-small"></div>
          <span><?php echo $heading_5c; ?></span>
            <h3 class="services__boxes--sub">
              <span> <?php echo $intro_5c; ?></span>
						  <div class="heading-primary__corner-br--p2"></div>               
            </h3>            
						<a href="<?php echo get_page_link(22); ?>" class="btn btn-xs">Discover More</a>           
			</div><!-- .service-boxes-->

    </div><!-- .services -->

        <div class="large-arrow">
          <a data-easing="linear" href="#pageSix" class="csd-icon csd-arrow-down"></a>
        </div>

        <div class="bg-img">    
					<?php if( !empty($image_desktop_5) ) : ?>
            <img src="<?php echo $image_desktop_5['url']; ?>" alt="<?php echo $image_desktop_5['alt']; ?>">
          <?php endif; ?>
        </div><!-- .bg-img -->

        <div class="mobile-img">              
					<?php if( !empty($image_mobile_5) ) : ?>
            <img src="<?php echo $image_mobile_5['url']; ?>" alt="<?php echo $image_mobile_5['alt']; ?>">
          <?php endif; ?>        
				</div><!-- .mobile-img -->

  </div><!-- .row justify-center -->
</section><!-- #pageFive-->

<section id="pageSix">
	<div class="row justify-center">

    <div class="text-box text-box__six">

      <div class="heading-primary">
        <div class="heading-primary__corner-tl"></div>              
          <div class="heading-primary--pagesix">  
            <?php echo $heading_6; ?>
          </div>    
        </div><!-- .heading-primary -->     

        <div class="team">
					<?php $loop = new WP_Query( 
						array(
							'post_type' => 'team_members',
							'orderby'   =>  'post_id',
							'order'     =>  'ASC'
							)
						); 

						while ($loop->have_posts() ) : $loop->the_post();
              $profile_image  = get_field('profile_image');
              $full_name   = get_field('full_name');
              $position    = get_field('position');   
          ?>

          <div class="team__boxes">
            <div class="team__boxes--corner-tl"></div>
            <div class="team__back">
              <a href="<?php echo get_page_link(14); ?>">
                <span class="team__back--text">
                  <?php echo $full_name ?>
                  <?php echo $position ?>
            </div>
                <img src="<?php echo $profile_image['url']; ?>" alt="<?php echo $profile_image['alt']; ?>"> 
              </a>
                <div class="team__boxes--corner-br"></div>
          </div><!--team-boxes-->
					<?php endwhile; wp_reset_query(); ?>       
            <!-- <div class="team__boxes--corner-br"></div> -->
        </div><!-- .team -->    
          <a href="<?php echo get_page_link(14); ?>"class="btn btn--team">Discover More</a>
                
		</div><!-- .text-box -->  

      <div class="large-arrow">
        <a data-easing="linear" href="#1@#%^-bottom" class="csd-icon csd-arrow-down"></a>
      </div>
            
      <div class="bg-img">
				<?php if( !empty($image_desktop_6) ) : ?>
          <img src="<?php echo $image_desktop_6['url']; ?>" alt="<?php echo $image_desktop_6['alt']; ?>">
        <?php endif; ?>        
			</div><!-- .bg-img -->

      <div class="mobile-img">
        <?php if( !empty($image_mobile_6) ) : ?>
        	<img src="<?php echo $image_mobile_6['url']; ?>" alt="<?php echo $image_mobile_6['alt']; ?>">
				<?php endif; ?>
			</div><!-- .mobile-img -->

  </div><!-- .row justify-center -->          
</section><!-- #pageSix -->

<?php get_footer(); ?>

  <script>
    // Instantiate Scrolls
    var scroll = new SmoothScroll('a[href*="#"]:not([data-easing])');
    var linear = new SmoothScroll('[data-easing="linear"]', {easing: 'linear'});
		var easeInQuad = new SmoothScroll('[data-easing="easeInQuad"]', {easing: 'easeInQuad'});
    var easeInCubic = new SmoothScroll('[data-easing="easeInCubic"]', {easing: 'easeInCubic'});
    var easeInQuart = new SmoothScroll('[data-easing="easeInQuart"]', {easing: 'easeInQuart'});
    var easeInQuint = new SmoothScroll('[data-easing="easeInQuint"]', {easing: 'easeInQuint'});
    var easeInOutQuad = new SmoothScroll('[data-easing="easeInOutQuad"]', {easing: 'easeInOutQuad'});
    var easeInOutCubic = new SmoothScroll('[data-easing="easeInOutCubic"]', {easing: 'easeInOutCubic'});
    var easeInOutQuart = new SmoothScroll('[data-easing="easeInOutQuart"]', {easing: 'easeInOutQuart'});
    var easeInOutQuint = new SmoothScroll('[data-easing="easeInOutQuint"]', {easing: 'easeInOutQuint'});
    var easeOutQuad = new SmoothScroll('[data-easing="easeOutQuad"]', {easing: 'easeOutQuad'});
    var easeOutCubic = new SmoothScroll('[data-easing="easeOutCubic"]', {easing: 'easeOutCubic'});
    var easeOutQuart = new SmoothScroll('[data-easing="easeOutQuart"]', {easing: 'easeOutQuart'});
    var easeOutQuint = new SmoothScroll('[data-easing="easeOutQuint"]', {easing: 'easeOutQuint'});

    // Log scroll events
    var logScrollEvent = function (event) {
  		console.log('type:', event.type);
  		console.log('anchor:', event.detail.anchor);
  		console.log('toggle:', event.detail.toggle);
    };
     	document.addEventListener('scrollStart', logScrollEvent, false);
     	document.addEventListener('scrollStop', logScrollEvent, false);
     	document.addEventListener('scrollCancel', logScrollEvent, false);
  </script>
