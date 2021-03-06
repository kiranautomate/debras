<?php get_header(); ?>

        <!-- BANNER 
        ============================== -->
        <section id="banner">
            
            <article>
            	
                <?php get_template_part('banner', 'content'); ?>              
                
                
                <?php
                if( get_option('db_banner_title') != "" ): ?>
                	
                    <div class="bannerText"><section id="bannerTitle"><?php echo get_option('db_banner_title'); ?></section></div>
                    
                <?php endif; ?>

            </article>
            

        </section>
    
        
        <?php if( get_field('primary_content_body') != "" ||  get_field('secondary_content_body') != "" ): ?>
        <!-- CONTENT SECTION 
        ============================== -->
        <section id="homeContent">
        	
            <!-- FIRST CONTENT BLOCK -->
            
            <?php if( get_field('primary_content_body') != "" ): ?>
            
            <div class="container">
                
                <?php if( get_field('primary_content_title') != "" ): ?>
                
                <h1 class="homeContentTitle">
                    <?php echo get_field('primary_content_title'); ?>
                </h1>
                
                <?php endif; ?>
                
                <div class="homeContentText contentColorDark">
                    <?php echo get_field('primary_content_body'); ?>
                </div>
                
                <div class="homeContentButton">
                
                	<?php if( get_field('primary_content_button_one') != "" ): ?>
                    
                    <input type="button" value="<?php echo get_field('primary_content_button_one'); ?>" class="btn btn-md secondaryBtnColor primaryLightColor">
                    
                    <?php endif; ?>
                    
                    <?php if( get_field('primary_content_button_two') != "" ): ?>
                    
                    <input type="button" value="<?php echo get_field('primary_content_button_two'); ?>" class="btn btn-md primaryBackgroundColor primaryLightColor">
                    
                    <?php endif; ?>
                    
                </div>
                            	
            </div>
            
            <?php endif; ?>

			<!-- SECOND CONTENT BLOCK -->

            <?php if( get_field('secondary_content_body') != "" ): ?>
            
            <div class="container">
                
                <?php if( get_field('secondary_content_title') != "" ): ?>
                
                <h1 class="homeContentTitle">
                    <?php echo get_field('secondary_content_title'); ?>
                </h1>
                
                <?php endif; ?>
                
                <div class="homeContentText contentColorDark">
                    <?php echo get_field('secondary_content_body'); ?>
                </div>
                
                <div class="homeContentButton">
                
                	<?php if( get_field('secondary_content_button_one') != "" ): ?>
                    
                    <input type="button" value="<?php echo get_field('secondary_content_button_one'); ?>" class="btn btn-md secondaryBtnColor primaryLightColor">
                    
                    <?php endif; ?>
                    
                    <?php if( get_field('secondary_content_button_two') != "" ): ?>
                    
                    <input type="button" value="<?php echo get_field('secondary_content_button_two'); ?>" class="btn btn-md primaryBackgroundColor primaryLightColor">
                    
                    <?php endif; ?>
                    
                </div>
                            	
            </div>
            
            <?php endif; ?>
                        
        </section>
        
        <?php endif; ?>
        
        <!-- SERVICES 
        ============================== -->
        <section id="services" class="primaryBackgroundColor">
        	<div class="container">
                <h3 class="primaryLightColor">Onze diensten</h3>
                
                                    
					  <?php 
                            $args = array( 'post_type' => 'services');
                            $the_query = new WP_Query( $args );
							
							$services_count = 0;
                      ?>
                      
                      <div class="row responsiveServices">
                      <?php if( have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); 
                      
                      $service_image = get_the_post_thumbnail();
                      
                      
                       if( !empty($service_image) ): ?>
                                      
                            <div class="col col-sm-3 col-xs-12">
                                <div class="mdBoxContent">
                                    <?php echo $service_image ; ?>
                                    
                                    <div class="mdBoxContentTitle contentColorDark"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></div>
                                    
                                </div>
                            </div>
                        
                       
												
                        <?php endif; ?>      
                        
                        <?php endwhile; endif; ?>
        
                      </div><!-- Row -->
                    </div><!-- Item -->
                    
                    
                 
                  </div>
                
                  
                </div>            
            </div><!-- Continer -->
                    
        </section>
        
        <!-- LOCATION 
        ============================== -->
        <section id="location">
        	<div class="container">
                <div class="row">
                    <div class="col col-sm-7">
                        <h3>Locatie en route planner</h3>
                        <section class="locationMap">
                        
						<?php if( get_option('db_google_map') != "" ): ?>
                            
                            <?php echo stripslashes(get_option('db_google_map'));  ?>
                        
                        <?php endif; ?>
                        
                        </section>
                    </div>
                    
                    <?php if( get_option('db_display_time_form') == "Contact Form" ): ?>
                    
                    <section id="customContactForm" class="col col-sm-5" >
                        <h4>Contactformulier</h4>
                        <?php $contact_form_sc = get_field('service_contact_form');?>
                        <?php echo do_shortcode('[contact-form-7 id="73" title="Contact form 1"]'); ?>
                    </section>
                    
                    <?php endif; ?>
                        
                     <?php if( get_option('db_display_time_form') != "Contact Form" ): ?>
                        
                    <div class="col col-sm-5" id="openingTime">
                        
                        <h3>Onze openingstijden</h3>
                        <ul>
                        	<?php if( get_option('db_timing_mon') != "" ): ?>
                            
                        	<li class="contentColorDark"><i class="fa fa-cog"></i>Monday<span><?php echo get_option('db_timing_mon');  ?></span></li>
                            
                        	<?php endif; ?>
                            
                            <?php if( get_option('db_timing_tue') != "" ): ?>
                            
                        	<li class="contentColorDark"><i class="fa fa-cog"></i>Tuesday<span><?php echo get_option('db_timing_tue');  ?></span></li>
                            
                        	<?php endif; ?>
                            
                            <?php if( get_option('db_timing_wed') != "" ): ?>
                            
                        	<li class="contentColorDark"><i class="fa fa-cog"></i>Wednesday<span><?php echo get_option('db_timing_wed');  ?></span></li>
                            
                        	<?php endif; ?>
                            
                            <?php if( get_option('db_timing_thu') != "" ): ?>
                            
                        	<li class="contentColorDark"><i class="fa fa-cog"></i>Thursday<span><?php echo get_option('db_timing_thu');  ?></span></li>
                            
                        	<?php endif; ?>
                            
                            <?php if( get_option('db_timing_fri') != "" ): ?>
                            
                        	<li class="contentColorDark"><i class="fa fa-cog"></i>Friday<span><?php echo get_option('db_timing_fri');  ?></span></li>
                            
                        	<?php endif; ?>
                            
                            <?php if( get_option('db_timing_sat') != "" ): ?>
                            
                        	<li class="contentColorDark"><i class="fa fa-cog"></i>Saturday<span><?php echo get_option('db_timing_sat');  ?></span></li>
                            
                        	<?php endif; ?>
                            
                            <?php if( get_option('db_timing_sun') != "" ): ?>
                            
                        	<li class="contentColorDark"><i class="fa fa-cog"></i>Sunday<span><?php echo get_option('db_timing_sun');  ?></span></li>
                            
                        	<?php endif; ?>
                            
                        </ul>
                        
                        <div class="homeContentButton">
                            
							<?php if( get_option('db_timing_btn_one_txt') != "" && get_option('db_timing_btn_one_url') != "" ): ?>
                            
                            <a href="<?php echo get_option('db_timing_btn_one_url');  ?>" class="btn btn-md secondaryBtnColor primaryLightColor"><?php echo get_option('db_timing_btn_one_txt');  ?></a>
                            
                        	<?php endif; ?>
                            
                            <?php if( get_option('db_timing_btn_two_txt') != "" && get_option('db_timing_btn_two_url') != "" ): ?>
                            
                            <a href="<?php echo get_option('db_timing_btn_two_url');  ?>" class="btn btn-md primaryBackgroundColor primaryLightColor"><?php echo get_option('db_timing_btn_two_txt');  ?></a>
                            
                        	<?php endif; ?>
                        </div> 
                    </div>
                    
                    <?php endif; ?>
                </div>  
                
                <!-- Partners carousel section -->
                <h3>Partners en referenties</h3>
                    
					 <div class="row responsivePartners">
                     
					  <?php 
                            $args = array( 'post_type' => 'partners');
                            $the_query = new WP_Query( $args );
                      		
							if( have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); 
                      
                      $partner_logo = get_field('partner_logo');
                      $partner_url = get_field('partner_url');
                      
                       if( !empty($partner_logo) ): ?>
                       
                       
                        <div class="col col-sm-15 col-xs-4">
                            <div class="partnersContent">
                                <a href="<?php echo $partner_url; ?>" target="_blank"><img src="<?php echo $partner_logo['url']; ?>" alt="<?php echo $partner_logo['alt']; ?>" class="img-responsive" /></a>
                            </div>
                        </div>
                    	
												
                        <?php endif; ?>      
                        
                        <?php endwhile; endif; ?>
                                                
                        
                      </div><!-- Row -->
                    </div>
                    
                    
                  </div>
                
                
                   <?php if($partners_count > 5) : ?>
                   
                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-partners" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left primaryLightColor" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-partners" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right primaryLightColor" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                  
                  <?php endif; ?>
                  
                </div>         
            </div><!-- Continer -->
        </section>
        
<?php get_footer(); ?>      