<?php get_header(); ?>

        <!--  BANNER SECTION 
        ============================== -->
        <section id="banner">
        <article>
        
			<?php get_template_part('banner', 'content'); ?>   
            
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
                            	
                                <span class="contentColorDark"><?php the_content(); ?></span>
                                
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
                        
                        <div class="row singleProjectNav secondaryBackgroundColor secondaryContentColor">
                        	<div class="col col-xs-3">
                            	<a href=""><span class="glyphicon glyphicon-th-large secondaryContentColor largeIcon"></span></a>
                                <p>Bekijk alle projecten</p>
                            </div>
                            <div class="col col-xs-3">
                            	<a href=""><span class="glyphicon glyphicon-chevron-left secondaryContentColor largeIcon"></span></a>
                                 <p><?php previous_post_link('%link', 'Vorige project', false); ?></p>
                            </div>
                            <div class="col col-xs-3">
                            	<a href=""><span class="glyphicon glyphicon-chevron-right secondaryContentColor largeIcon"></span></a>
                                <p><?php next_post_link('%link', 'Volgend project', false); ?></p>
                            </div>
                            <div class="col col-xs-3">
                            	<a href=""><span class="glyphicon glyphicon-list-alt secondaryContentColor largeIcon"></span></a>
                                <p>Offerte aanvragen</p>
                            </div>
                        </div>
                        
                </section>
            
            </div>
        </section>
        
        <?php endwhile; endif; ?>
        
        
        
        
        <!-- PROJECT NAVIGATION 
        ============================== -->
        
        
        
<?php get_footer(); ?>      