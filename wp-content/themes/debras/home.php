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
                        	
                            <h1><?php wp_title(''); ?></h1>
                            <div class="col col-lg-8 colLeft">
                                
                              <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                                
                                <article class="post">
                                    <div class="page-header">
                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <p class="contentColorDark"><em>
                                            By <strong><?php the_author(); ?></strong>
                                            On <strong><?php the_time('l F jS, Y');?></strong>
                                            in <strong class="primaryAnchorColor"><?php the_category(', '); ?></strong>
                                        </em></p>
                                    </div>
                                    
                                    <span class="contentColorDark"><?php the_excerpt(); ?></span>
                                    
                                    <hr>
                                    
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