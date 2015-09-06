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
    
        
        <!--  SINGLE SERVICE CONTENT SECTION 
        ============================== -->
        <section id="singleService">
            <div class="container">
            	
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
            
            	<!--  SERVICE CONTENT SECTION 
       		 	============================== -->
                <section id="singleServiceContent">
                    	<div class="row">
                        	
                            <h1><?php the_title(); ?></h1>
                            <div class="col col-sm-8 colLeft">
                                
                                <?php if( have_rows('service_slides') ): ?>
                                
                                <div id="slider" class="flexslider flexslider-custom">
                                  <ul class="slides">
                                    
                                    <?php while( have_rows('service_slides') ): the_row(); 
									
									// vars
									$slider_image = get_sub_field('slider_image');
									$slider_caption = get_sub_field('slider_caption');
									
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
                                 	
                                    <?php while( have_rows('service_slides') ): the_row(); 
									
									// vars
									$slider_image = get_sub_field('slider_image');
									$slider_caption = get_sub_field('slider_caption');
									
									?>
                                    
                                    <?php if( $slider_image ) : ?>
                                    
                                    <li>
                                      <img src="<?php echo $slider_image['url'] ; ?>" alt= "<?php echo $slider_image['alt']; ?>"/>
                                    </li>
                                    
                                    <?php endif; endwhile; ?>
                                  </ul>
                                </div>
                                <?php endif;?>
                                
                                <?php the_field('service_content'); ?>
                                
                                <!-- CONTACT MEMBER 
                                ============================== -->
                                
                                <?php $teamMember = get_field('team_member'); ?>
                                
								<?php if( $teamMember ): ?>
                                <?php foreach( $teamMember as $member ): ?>	
                                
                                <div id="contactMember">
                                	<section class="row">
									
                                    <div class="col col-xs-2 memberThumbnail">
										<?php echo get_the_post_thumbnail($member->ID); ?>
                                    </div>
                                    <div class="col col-xs-10">
                                    	<h4>Meer informatie? Neem contact op met Bas den Hoed</h4>
                                        <span class="glyphicon glyphicon-earphone"></span>
										<span class="secondSpanColor"><strong><?php  $memberTelephone = get_post_meta($member->ID, 'telephone');echo $memberTelephone['0'];?></strong></span>
                                    </div>
                                    
                                    </section>
                                </div>
                                
                                <?php endforeach; ?>
                                <?php endif; ?>
                                
                            </div>
                            
                            
                            
                            <?php get_sidebar(); ?>
                            
                        </div>
                </section>
            
            </div>
        </section>
        
        <?php endwhile; endif; ?>
        
        
        
        
        <!-- SERVICES 
        ============================== -->
        <section id="services">
        	<div class="container">
                <h3>Onze diensten</h3>
                <div id="carousel-services" class="carousel slide" data-ride="carousel">

                
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                      
					  <?php 
                            $args = array( 'post_type' => 'services');
                            $the_query = new WP_Query( $args );
							
							$services_count = 0;
                      ?>
                      <?php if( have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>
                      
                      
                      <?php if($services_count % 4 == 0 || $services_count == 0) :  ?>
                      
                      <div class="item <?php if( $services_count < 4 ) : ?>active <?php endif; ?>">
                      <div class="row">
                      
                      <?php endif; ?>
                      
                      <?php
                      
                      $service_image = get_the_post_thumbnail();
                      
                      
                       if( !empty($service_image) ): ?>
                                      
                            <div class="col col-sm-3 col-xs-6">
                                <div class="servicesContent">
                                
                                    <?php echo $service_image; ?>
                                    
                                    <div class="servicesContentTitle"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></div>
                                    
                                </div>
                            </div>
						<?php $services_count = $the_query->current_post +1; ?>
                        <?php if($services_count % 4 == 0) :  ?>
                            
                            
                          </div></div>
                            
                        <?php endif; ?>
												
                        <?php endif; ?>      
                        
                        <?php endwhile; endif; ?>
        
                      </div><!-- Row -->
                    </div><!-- Item -->
                    
                  </div>
                
                  <?php if($services_count > 4) : ?>
                  
                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-services" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-services" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                  
                  <?php endif; ?>
                  
                </div>            
            </div><!-- Continer -->
        </section>
        
        
<?php get_footer(); ?>      