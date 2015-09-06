<?php
/*
	Template Name: Projects Page
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
                
                <nav class="navbar navbar-default projectsNavbar">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#projectsCategoriesCollapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>
                
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="projectsCategoriesCollapse">
                      
					  <?php
					  
						$args=array(
							'name' => 'project-type'
						  );
					  
						$categories = get_terms( $args ); ?>
						
						<ul id="category-menu" class="nav navbar-nav">
							<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
							<?php foreach ( $categories as $cat ) { ?>
							<li id="cat-<?php echo $cat->term_id; ?>"><a class="<?php echo $cat->slug; ?> ajax" onclick="cat_ajax_get('<?php echo $cat->term_id; ?>');"><?php echo $cat->name; ?></a></li>
						
							<?php } ?>
						</ul>
  
                    </div><!-- /.navbar-collapse -->
                </nav>


                <div class="row">
                	<?php 
                            $args = array( 'post_type' => 'projects');
                            $the_query = new WP_Query( $args );
							
							$projects_count = 0;
                      ?>
                      <?php if( have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>
                      
                      <?php
                      
                      $project_image = get_the_post_thumbnail();
                      
                      
                       if( !empty($project_image) ): ?>
                                      
                            <div class="col col-sm-4 col-xs-12">
                                <div class="lgThumbnailContent">
                                    
									<?php echo $project_image; ?>
                                    
                                    <div class="lgThumbnailContentTitle">
                                    	
                                        <h6 ><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h6>
                                            
                                    </div>
                                    
                                    <div class="thumbHighlightText">
                                    	<h6><?php the_terms( $the_query->ID, 'project-type', ' ', ', ', ' ' ); ?></h6>
                                    </div>
                                    
                                </div>
                            </div>
                            
						<?php echo $projects_count = $projects_count +1; ?>
                        <?php if($projects_count % 3 == 0) :  ?>
                            
                            
                          </div><div class="row">
                            
                        <?php endif; ?>
												
                        <?php endif; ?>      
                        
                        <?php endwhile; endif; ?>
        
                      </div><!-- Row -->

                </div>        	
            </div>
        </section>
        
        <div id="loading-animation" style="display: none;"><img src="<?php echo admin_url ( 'images/loading.gif' ); ?>"/></div>
					  <div id="category-post-content"></div>
                      
<?php get_footer(); ?>      