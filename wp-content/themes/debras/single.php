<?php get_header(); ?>
    
        
        <!--  SINGLE SERVICE CONTENT SECTION 
        ============================== -->
        <section id="singleService">
            <div class="container">
            	
                <!--  BANNER SECTION 
       		 	============================== -->
                <section id="banner">
                <article>
                
					<?php get_template_part('banner', 'content'); ?>   
                        
                    <div class="bannerText"><section id="bannerTitle"><?php wp_title(''); ?></section></div>
    
                </article>
            </section>
            
            	<!--  SERVICE CONTENT SECTION 
       		 	============================== -->
                <section id="singleServiceContent" class="blogContent">
                    	<div class="row">
                        	
                             <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                             
                            <h1><?php the_title(); ?></h1>
                            
                            <div class="col col-lg-8 colLeft">
                            
                                <article class="post">
                                    <div class="page-header">
                                    
                                        <p class="contentColorDark"><em>
                                            By <strong><?php the_author(); ?></strong>
                                            On <strong><?php the_time('l F jS, Y');?></strong>
                                            in <strong class="primaryAnchorColor"><?php the_category(', '); ?></strong>
                                        </em></p>
                                    </div>
                                    
                                    <span class="contentColorDark"><?php the_content(); ?></span>
                                    
                                    <hr>
                                    
                                    <div class="navigation">
                                        <div class="alignleft primaryAnchorColor">
											<?php previous_post_link(); ?>
                                        </div>
                                        <div class="alignright primaryAnchorColor">
											<?php next_post_link(); ?>
                                        </div>
                                    </div> <!-- end navigation -->
                                    
                                </article>
                                
                                
                                
                              <?php endwhile; else : ?>
                                
                                <div class="page-header">
                                    <h1>Oh no!</h1>
                                </div>
                                            
                                <p>No content is appearing on this page!</p>
                                
                              <?php endif; ?>
                                
                            </div>
                            
                            <?php get_sidebar(); ?>
                            
                        </div>
                </section>
            
            </div>
        </section>
        
        
        

        
        
<?php get_footer(); ?>      