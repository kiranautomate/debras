        
        <!-- FOOTER 
        ============================== -->
        <footer>
        	<div class="footerTop">
            	<div class="container">
                	<div class="row">
                    
                        <?php if( get_option('db_telephone_two') != "" ): ?>
                        
                        <div class="col col-sm-4 col-xs-12">
                            <a href="#"><span class="glyphicon glyphicon-earphone"></span><?php echo get_option('db_telephone_two');  ?></a>
                        </div>
                        
                        <?php endif; ?>
                        
                        <?php if( get_option('db_email_id') != "" ): ?>
                        
                        <div class="col col-sm-4 col-xs-12">
                            <a href="#"><span class="glyphicon glyphicon-envelope"></span><?php echo get_option('db_email_id');  ?></a>
                        </div>
                        
                        <?php endif; ?>
                        
                        <div class="col col-sm-4 col-xs-12">
                            <a href="#"><span class="glyphicon glyphicon-calendar"></span>Afspraak maken</a>
                        </div>
                        
                    </div>
                </div>
            </div><!-- footerTop -->
            <div class="footerContent">
            	<div class="container">
                	<div class="row">
                    	<div class="col col-sm-15 col-xs-6">
                        	<h3>Hoofdmenu</h3>
                            
							<?php
							$args = array(
								'menu' => 'header-menu',
								'conatiner' => 'false'
							);
						  
						   wp_nav_menu( $args );
                            ?>
                            
                        </div>
                        <?php
									$type = 'services';
									$args=array(
									  'post_type' => $type,
									  'post_status' => 'publish',
									  'posts_per_page' => -1,
									  'caller_get_posts'=> 1 );
									
									$my_query = null;
									$my_query = new WP_Query($args);
									if( $my_query->have_posts() ) {
						?>				
                        <div class="col col-sm-15 col-xs-6">
                        	<h3>Onze diensten</h3>
                            <ul>
                                
                                	<?php
									  while ($my_query->have_posts()) : $my_query->the_post(); ?>
										
                                        <li><a href= "<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                        
										<?php
									  endwhile;
									}
									?>
							</ul>
                        </div>
								<?php
                                	wp_reset_query();  // Restore global post data stomped by the_post().
								?>
                                
                                
                            
                        <div class="col col-sm-15 col-xs-6">
                        	<h3>Hoofdmenu</h3>
                            <ul>
                            	<li><a href="#">Home</a></li>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Home</a></li>
                            </ul>
                        </div>
                        
                        
						<?php 
						$args = array( 'post_type' => 'post');
						$the_query = new WP_Query( $args );
						  
						if( have_posts()) : ?>
							
							
						<div class="col col-sm-15 col-xs-6">
                        	<h3>Hoofdmenu</h3>
                            <ul>	
                            
							  <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
                                  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                              <?php endwhile; ?>
                              
                            </ul>
                        </div>
                        <?php endif; ?>
                        <div class="col col-sm-15 col-xs-6">
                        	<h3>Contact</h3>
                           		 
								 <?php if( get_option('db_custom_address') != "" ): ?>
                                    <p id="contactAddress"> <?php echo get_option('db_custom_address');  ?> </p>
                                <?php endif; ?>
                                
                                <?php if( get_option('db_telephone_one') != "" ): ?>
                                    <p>T: <?php echo get_option('db_telephone_one');  ?> </p>
                                <?php endif; ?>
                                
                                <?php if( get_option('db_telephone_two') != "" ): ?>
                                    <p>T: <?php echo get_option('db_telephone_two');  ?> </p>
                                <?php endif; ?>
                                
                                <?php if( get_option('db_email_id') != "" ): ?>
                                    <p>E: <?php echo get_option('db_email_id');  ?> </p>
                                <?php endif; ?>
                                
                                <!-- Social icons -->
								<?php if( get_option('db_facebook_id') != "" ): ?>
                                    <a href="//<?php echo get_option('db_facebook_id');  ?>" target= "_blank"><img src="<?php echo get_template_directory_uri();?>/img/fb_soc.png" alt="Social icons" /></a>
                                <?php endif; ?>
                                
                                <?php if( get_option('db_twitter_handle') != "" ): ?>
                                    <a href="//<?php echo get_option('db_twitter_handle');  ?>" target= "_blank"><img src="<?php echo get_template_directory_uri();?>/img/tw_soc.png" alt="Social icons" /></a>
                                <?php endif; ?>
                                
                                <?php if( get_option('db_linkedin_profile') != "" ): ?>
                                    <a href="//<?php echo get_option('db_linkedin_profile');  ?>" target= "_blank"><img src="<?php echo get_template_directory_uri();?>/img/li_soc.png" alt="Social icons" /></a>
                                <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div><!-- footerContent -->
            
            <div class="footerBottom">
            		
                    <?php if( get_theme_mod( 'wpt_footer_text') == "" ): ?>
                    	<span id="footertext">&copy; Copyright <?php echo date('Y');?> <?php bloginfo('name');?> </span>
                    <?php endif; ?>  
                    
                    <?php if( get_theme_mod( 'wpt_footer_text') != "" ): ?>
                        <p id="footertext">
                            <?php echo get_theme_mod( 'wpt_footer_text'); ?>
                        </p>
                    <?php endif; ?>  
            
            </div><!-- footerBottom -->   
    
        </footer> 
        
        <?php wp_footer(); ?>      
        
        
		<script type="text/javascript">
        function cat_ajax_get(catID) {
            jQuery("a.ajax").removeClass("current");
            jQuery("a.ajax").addClass("current"); //adds class current to the category menu item being displayed so you can style it with css
            jQuery("#loading-animation").show();
            var ajaxurl = '<?php echo admin_url( 'admin-ajax.php' ); //must echo it ?>';
			
            jQuery.ajax({
                type: 'POST',
                url: ajaxurl,
                data: {"action": "load-filter", cat: catID },
                success: function(response) {
                    alert(response);
					jQuery("#category-post-content").html(response);
                    jQuery("#loading-animation").hide();
                    return false;
                }
            });
        }
        </script>
        
    </body>
</html>
