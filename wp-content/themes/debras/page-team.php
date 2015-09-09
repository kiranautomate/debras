<?php
/*
	Template Name: Teams Page
*/
?>
<?php get_header(); ?>

		<!-- BANNER 
        ============================== -->
        <section id="banner">
        	<article>
            
				<?php get_template_part('banner', 'content'); ?>   
                
                <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                	
                    <div class="bannerText"><section id="bannerTitle"><?php the_title(); ?></section></div>
                    
                <?php endwhile;  endif; ?>

            </article>
        </section>
    
        <!-- SERVICES LIST SECTION 
        ============================== -->
        <section id="listItems">
        	<div class="container">
                
                <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                
                <h1 class="homeContentTitle">
                    <?php the_title(); ?>
                </h1>
                    <span class="contentColorDark"><?php the_content(); ?></span>
                <?php endwhile; else : ?>
                
                <h1 class="homeContentTitle">
                    No page title
                </h1>
                <p class="contentColorDark">
                    No content is appearing on the page!
                </p> 
                <?php endif; ?>
                 
                
                <div class="row">
                	<?php 
                            $args = array( 'post_type' => 'members');
                            $the_query = new WP_Query( $args );
							
							$services_count = 0;
                      ?>
                      <?php if( have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>
                      
                      <?php
                      
                      $service_image = get_the_post_thumbnail();
                      
                      
                       if( !empty($service_image) ): ?>
                                      
                            <div class="col col-sm-3 col-xs-12">
                                <div class="mdBoxContent">
                                    <?php echo $service_image; ?>
                                    
                                    <div class="mdBoxContentTitle" id="secondaryBackgroundColor">
                                    	
                                        <h5><?php the_title(); ?></h5>
                                        
                                        <p class="contentColorDark"><strong><?php echo get_field('member_designation');?></strong></p>
                                        
                                        <p id="memberProfile" class="contentColorDark"><?php echo get_field('job_profile');?></p>
                                        
                                        <p class="contentColorDark">
                                        	<a href="<?php echo get_field('linkedin_profile');?>" target="_blank"><i class="fa fa-linkedin fak-circle primaryBackgroundColor primaryLightColor"></i></a>
                                            <a href="<?php echo get_field('email_id');?>" target="_blank"><i class="fa fa-envelope-o fak-circle primaryBackgroundColor primaryLightColor"></i></a>
                                            <i class="fa fa-phone primaryColor"></i>06 - 53792028</p>
                                            
                                    </div>
                                    
                                </div>
                            </div>
                            
						<?php $services_count = $the_query->current_post +1; ?>
                        <?php if($services_count % 4 == 0) :  ?>
                            
                            
                          </div><div class="row">
                            
                        <?php endif; ?>
												
                        <?php endif; ?>      
                        
                        <?php endwhile; endif; ?>
        
                      </div><!-- Row -->
                    
                </div>        	
            </div>
        </section>
        
<?php get_footer(); ?>      