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
    
            
        <!--  SINGLE SERVICE CONTENT SECTION 
        ============================== -->
        <section id="singleService">
            <div class="container">
                
            
            	<!--  SERVICE CONTENT SECTION 
       		 	============================== -->
                <section id="singleServiceContent">
                    	<div class="row">
                        	
                            <h1><?php the_title(); ?></h1>
                            
                            <div class="col col-sm-5 colLeft" >
                            	
                                <?php the_content(); ?>
                                
                            </div>
                            
                            
                            <div class="col col-sm-7 colRight">
                                
                                <?php if( have_rows('project_slide') ): ?>
                                
                                <div id="slider" class="flexslider flexslider-custom-2">
                                  <ul class="slides">
                                    
                                    <?php while( have_rows('project_slide') ): the_row(); 
									
									// vars
									$slider_image = get_sub_field('project_image');
									$slider_caption = get_sub_field('project_caption');
									
									?>
									
                                    <?php if( $slider_image ) : ?>
                                    
                                    <li>
                                      <img src="<?php echo $slider_image['url'] ; ?>" alt= "<?php echo $slider_image['alt']; ?>"/>
                                      
                                      <?php if( $slider_caption ) : ?>
                                      <p class="flex-caption"><?php echo $slider_caption;?></p>
                                      <?php endif; ?>
                                    </li>
                                    
                                    <?php endif; endwhile; ?>
                                  </ul>
                                </div>
                                
                                
                                <div id="carousel" class="flexslider flexslider-custom">
                                  <ul class="slides">
                                 	
                                    <?php while( have_rows('project_slide') ): the_row(); 
									
									// vars
									$slider_image = get_sub_field('project_image');
									$slider_caption = get_sub_field('project_caption');
									
									?>
                                    
                                    <?php if( $slider_image ) : ?>
                                    
                                    <li>
                                      <img src="<?php echo $slider_image['url'] ; ?>" alt= "<?php echo $slider_image['alt']; ?>"/>
                                    </li>
                                    
                                    <?php endif; endwhile; ?>
                                  </ul>
                                </div>
                                <?php endif;?>
                            </div>
                            
                        </div>
                </section>
            
            </div>
        </section>
        
        <?php endwhile; endif; ?>
        
        
        
        
        <!-- PROJECT NAVIGATION 
        ============================== -->
        
        
        
<?php get_footer(); ?>      