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
                    
                <?php endwhile;  endif; ?>

            </article>
        </section>
    
        <!-- SERVICES LIST SECTION 
        ============================== -->
        <section id="listServices">
        	<div class="container">
                
                <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                
                <h1 class="homeContentTitle">
                    <?php the_title(); ?>
                </h1>
                    <?php the_content(); ?>
                <?php endwhile; else : ?>
                
                <h1 class="homeContentTitle">
                    No page title
                </h1>
                <p>
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
                                <div class="servicesContent">
                                    <?php echo $service_image; ?>
                                    
                                    <div class="servicesContentTitle">
                                    	
                                        <h5><?php the_title(); ?></h5>
                                        
                                        <p><strong><?php echo get_field('member_designation');?></strong></p>
                                        
                                        <p id="memberProfile"><?php echo get_field('job_profile');?></p>
                                        
                                        <p>
                                        	<a href="<?php echo get_field('linkedin_profile');?>" target="_blank"><i class="fa fa-linkedin fak-circle fak-white"></i></a>
                                            <a href="<?php echo get_field('email_id');?>" target="_blank"><i class="fa fa-envelope-o fak-circle fak-white"></i></a>
                                            <i class="fa fa-phone fak-orange"></i>06 - 53792028</p>
                                            
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