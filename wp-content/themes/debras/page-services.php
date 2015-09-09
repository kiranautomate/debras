<?php
/*
	Template Name: Services Page
*/
?>
<?php get_header(); ?>

        <!-- USP  
        ============================== -->
        <section id="usp" class="primaryBackgroundColor primaryLightColor">
            	<div class="container clearfix">
                	
                    <div class="row">
                    	
                        <?php if( get_option('db_usp_one') != "" ): ?>
                        
                        <div class="col col-lg-3">
                        	<i class="fa fa-check"></i><span><?php echo get_option('db_usp_one');?></span>
                        </div>
                        
                        <?php endif; ?>
                        
                        <?php if( get_option('db_usp_two') != "" ): ?>
                        
                        <div class="col col-lg-3">
                        	<i class="fa fa-check"></i><span><?php echo get_option('db_usp_two');?></span>
                        </div>
                        
                        <?php endif; ?>
                        
                        <?php if( get_option('db_usp_three') != "" ): ?>
                        
                        <div class="col col-lg-3">
                        	<i class="fa fa-check"></i><span><?php echo get_option('db_usp_three');?></span>
                        </div>
                        
                        <?php endif; ?>
                        
                        <?php if( get_option('db_usp_four') != "" ): ?>
                        
                        <div class="col col-lg-3">
                        	<i class="fa fa-check"></i><span><?php echo get_option('db_usp_four');?></span>
                        </div>
                        
                        <?php endif; ?>
                        
                    </div>
                    
                </div><!-- container -->
        </section>
    
        <!-- SERVICES LIST SECTION 
        ============================== -->
        <section id="listItems">
        	<div class="container">
                
                <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                
                <h1 class="homeContentTitle">
                    <?php the_title(); ?>
                </h1>
                   <span class="contentColorDark"> <?php the_content(); ?></span>
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
                                <div class="mdBoxContent">
                                
                                    <?php echo $service_image; ?>
                                    
                                    <div class="mdBoxContentTitle contentColorDark" id="secondaryBackgroundColor"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></div>
                                    
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