<?php
/*
	Template Name: Services Page
*/
?>
<?php get_header(); ?>

        <!-- USP  
        ============================== -->
        <section id="usp">
            	<div class="container clearfix">
                	
                    <div class="row">
                    	
                        <?php if( get_option('db_usp_one') != "" ): ?>
                        
                        <div class="col col-sm-6 col-xs-12 col-md-3">
                        	<img src="<?php echo get_template_directory_uri();?>/img/tick.png" class="beforeIcon" alt="tick icon"/><span><?php echo get_option('db_usp_one');?></span>
                        </div>
                        
                        <?php endif; ?>
                        
                        <?php if( get_option('db_usp_two') != "" ): ?>
                        
                        <div class="col col-sm-6 col-xs-12 col-md-3">
                        	<img src="<?php echo get_template_directory_uri();?>/img/tick.png" class="beforeIcon" alt="tick icon"/><span><?php echo get_option('db_usp_two');?></span>
                        </div>
                        
                        <?php endif; ?>
                        
                        <?php if( get_option('db_usp_three') != "" ): ?>
                        
                        <div class="col col-sm-6 col-xs-12 col-md-3">
                        	<img src="<?php echo get_template_directory_uri();?>/img/tick.png" class="beforeIcon" alt="tick icon"/><span><?php echo get_option('db_usp_three');?></span>
                        </div>
                        
                        <?php endif; ?>
                        
                        <?php if( get_option('db_usp_four') != "" ): ?>
                        
                        <div class="col col-sm-6 col-xs-12 col-md-3">
                        	<img src="<?php echo get_template_directory_uri();?>/img/tick.png" class="beforeIcon" alt="tick icon"/><span><?php echo get_option('db_usp_four');?></span>
                        </div>
                        
                        <?php endif; ?>
                        
                    </div>
                    
                </div><!-- container -->
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
                            $args = array( 'post_type' => 'services');
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
                                    
                                    <div class="servicesContentTitle"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></div>
                                    
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