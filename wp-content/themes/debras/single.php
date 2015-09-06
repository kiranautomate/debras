<?php get_header(); ?>
    
        
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
                        
                    <div class="bannerText"><section id="bannerTitle"><?php wp_title(''); ?></section></div>
    
                </article>
            </section>
            
            	<!--  SERVICE CONTENT SECTION 
       		 	============================== -->
                <section id="singleServiceContent" class="blogContent">
                    	<div class="row">
                        	
                             <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                             
                            <h1><?php the_title(); ?></h1>
                            
                            <div class="col col-sm-8 colLeft">
                            
                                <article class="post">
                                    <div class="page-header">
                                    
                                        <p><em>
                                            By <?php the_author(); ?>
                                            On <?php the_time('l F jS, Y');?>
                                            in <?php the_category(', '); ?>
                                            <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
                                        </em></p>
                                    </div>
                                    
                                    <?php the_content(); ?>
                                    
                                    <hr>
                                    
                                    <?php comments_template(); ?>
                                    
                                    <div class="navigation">
                                        <div class="alignleft">
											<?php previous_post_link(); ?>
                                        </div>
                                        <div class="alignright">
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