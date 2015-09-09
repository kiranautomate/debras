<?php
/*
	Template Name: FAQ Page
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
    
        <!-- PROJECTS LIST SECTION 
        ============================== -->
        <section id="listItems" class="animationWrapper">
        	
            <div class="container">
                
                <nav class="navbar navbar-default projectsNavbar">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed primaryColor" data-toggle="collapse" data-target="#projectsCategoriesCollapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-files-o"></i>
                      </button>
                    </div>
                
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="projectsCategoriesCollapse">
                      
					  <?php
					  
						$taxonomies =array(
							'name' => 'project-type'
						  );
					  
						$categories = get_terms( $taxonomies ); ?>
                       
                       
                        
						<ul id="category-menu" class="nav navbar-nav">
							
                            <li class="active" ><a id= "primaryBackgroundLightContentColor" class="ajax " onclick="cat_ajax_get('<?php echo implode( ',' , get_terms( 'project-type', 'orderby=count&hide_empty=0&fields=ids')); ?>');">All projects <span class="sr-only">(current)</span></a></li>
							<?php foreach ( $categories as $cat ) { ?>
							<li id="cat-<?php echo $cat->term_id; ?> "><a class="<?php echo $cat->slug; ?> ajax" id="primaryAnchorColor" onclick="cat_ajax_get('<?php echo $cat->term_id; ?>');"><?php echo $cat->name; ?></a></li>
						
							<?php } ?>
						</ul>
  
                    </div><!-- /.navbar-collapse -->
                </nav>

				
                <div class="row" id ="category-post-content">
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
                                <div class="lgBoxContent">
                                    
									<?php echo $project_image; ?>
                                    
                                    <div class="lgBoxContentTitle secondaryBackgroundColor">
                                    	
                                        <h6 ><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h6>
                                            
                                    </div>
                                    
                                    <div class="thumbHighlightText primaryBackgroundColor primaryLightColor">
                                    	<?php the_terms( $the_query->ID, 'project-type', ' ', ', ', ' ' ); ?>
                                    </div>
                                    
                                </div>
                            </div>
                            
						<?php $projects_count = $projects_count +1; ?>
                        <?php if($projects_count % 3 == 0) :  ?>
                            
                            
                          </div><div class="row">
                            
                        <?php endif; ?>
												
                        <?php endif; ?>      
                        
                        <?php endwhile; endif; ?>
                        
						<?php wp_reset_query(); ?>
        
                      </div><!-- Row -->

                </div><!-- container -->   
                
                <div id="loading-animation" class="primaryBackgroundColor"><img src="<?php echo admin_url ( 'images/loading.gif' ); ?>"/></div>     	
            
        </section>
        
        
					 
                      
<?php get_footer(); ?>      