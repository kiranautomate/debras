<?php
/*
	Template Name: Contact Page
*/
?>
<?php get_header(); ?>

        <!--  BANNER SECTION 
        ============================== -->
        <section id="banner">
        <article>
        
            <?php if( get_option('db_banner_image') != "" && get_option('db_banner_video') == "" ): ?>
            
                <img src="<?php echo get_option('db_banner_image'); ?>" class="img-responsive" />
            
            <?php endif; ?>
            
            <?php if( get_option('db_banner_image') == "" && get_option('db_banner_video') == "" ): ?>
            
                <img src="<?php echo get_template_directory_uri(); ?>/img/hero-bg.jpg" class="img-responsive" />
            
            <?php endif; ?>
            
            <?php
            if( get_option('db_banner_video') != "" ): ?>
                
                <div class="videoBanner">
                
                
                <iframe width="560" height="315" src="<?php echo stripslashes(get_option('db_banner_video')); ?>?autoplay=1" frameborder="0" allowfullscreen></iframe>
                
                
                
                </div>
            
            <?php endif; ?>
            
            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                
                <div class="bannerText"><section id="bannerTitle"><?php the_title(); ?></section></div>
                
            

        </article>
    </section>
    
            
        <!--  CONTACT US PAGE 
        ============================== -->
        <section id="contactUs">
            <div class="container">
                
                <div class="row removeRowMargin">
                	<div class="col col-lg-3 contentColorDark">
                    	<section class="pullCenter contactLocation">
                            <h3>Contact</h3>
                             
                                     
                             <?php if( get_option('db_custom_address') != "" ): ?>
                                <p id="contactAddress"> <?php echo get_option('db_custom_address');  ?> </p>
                            <?php endif; ?>
                            
                            <?php if( get_option('db_telephone_one') != "" ): ?>
                                <p>T: <?php echo get_option('db_telephone_one');  ?> </p>
                            <?php endif; ?>
                            
                            <?php if( get_option('db_email_id') != "" ): ?>
                                <p>E: <span class="primaryColor"><?php echo get_option('db_email_id');  ?></span> </p>
                            <?php endif; ?>
                            
                            <!-- Social icons -->
                            <?php if( get_option('db_facebook_id') != "" ): ?>
                                <a href="//<?php echo get_option('db_facebook_id');  ?>" target= "_blank"><i class="fa fa-facebook primaryBackgroundColor"></i></a>
                            <?php endif; ?>
                            
                            <?php if( get_option('db_twitter_handle') != "" ): ?>
                                <a href="//<?php echo get_option('db_twitter_handle');  ?>" target= "_blank"><i class="fa fa-twitter primaryBackgroundColor"></i></a>
                            <?php endif; ?>
                            
                            <?php if( get_option('db_linkedin_profile') != "" ): ?>
                                <a href="//<?php echo get_option('db_linkedin_profile');  ?>" target= "_blank"><i class="fa fa-linkedin primaryBackgroundColor"></i></a>
                            <?php endif; ?>
                            
                        </section>
                        
                    </div>
                    
                    <?php if( get_option('db_contact_form') != "" ): ?>
                                        
                    <div class="col col-lg-9">
                    	<section id="customContactForm" class="lightGreyBack pullCenter">
                            <h4>Contactformulier</h4>
                            <?php  $contact_form_sc = get_option('db_contact_form');;?>
                            <?php  echo do_shortcode('[contact-form-7 id="73" title="Contact form 1"]'); ?>
                        </section>
                    </div>
                    
                    <?php endif; ?>
                    
                </div>
            
            </div>
        </section>
        
        <?php endwhile; endif; ?>
        
        
        
        
        <!-- PROJECT NAVIGATION 
        ============================== -->
        
        
        
<?php get_footer(); ?>      