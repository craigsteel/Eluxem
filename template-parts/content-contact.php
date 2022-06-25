<div class="contact-form__main">
    <div class="row justify-center">

        <h1 class="heading-contact">

          <div class="heading-contact--main">Contact US</div>

          <div class="heading-contact--sub">
            Simply give us a call or send us an email. Alternatively please fill out the contact form below.​
          </div>

          </h1>
              
              <div class="contact-form__content">

            <?php while ( have_posts() ) : the_post(); ?>
              
              <?php the_content(); ?>
              
            <?php endwhile; // end of the loop ?>
          
          </div><!-- .contact-form__content -->

          
            <div class="heading-contact--link">
            <a href="<?php echo get_permalink('193'); ?>">Your personal information will remain confidential. For more information, please see our privacy policy ></a>
            </div>

    </div><!-- .row -->
</div><!-- .contact-form__main-->