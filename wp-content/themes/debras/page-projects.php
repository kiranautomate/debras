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
            
				<?php get_template_part('banner', 'content'); ?>   
                
                <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                	
                    <div class="bannerText"><section id="bannerTitle"><?php the_title(); ?></section></div>
                    
                <?php endwhile;  endif; ?>

            </article>
        </section>
    
        <!-- PROJECTS LIST SECTION 
        ============================== -->
        <section id="listItems">
        	
            <div class="container">
      	

          <?php
        
          $taxonomies =array(
              'name' => 'project-type'
            );
        
          $categories = get_terms( $taxonomies ); 
		  
		  ?>



        <nav class="navbar navbar-default projectsNavbar">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed primaryColor" data-toggle="collapse" data-target="#projectsCategoriesCollapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="projectsCategoriesCollapse">
                
                <ul class="filter-options nav navbar-nav" id="category-menu">
                 
                 <li data-group="all" class="active"><a id="primaryAnchorColor">All Projecten</a></li>
                 
                 <?php foreach ( $categories as $cat ) { ?>
                                    
                  <li data-group="<?php echo $cat->name; ?>"><a id="primaryAnchorColor"><?php echo $cat->name; ?></a></li>
                  
                  <?php } ?>
                  
                  
                </ul>
              
            </div><!-- /.navbar-collapse -->
        </nav>
       
	    <div id="grid" class="row">
			
			<?php
			
			foreach ( $categories as $cat ) {
				
             $args = array(
                'post_type' => 'projects',
                'post_status' => 'publish',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'project-type',
                        'field'    => 'term_id',
                        'terms'    =>  $cat 
                    ),
                ),
             );
			 
			 $posts = get_posts( $args );
			 
			 foreach ( $posts as $post ) {
    		 setup_postdata( $post ); 
			 
			 $project_image = get_the_post_thumbnail( $post ->ID );
			 
			 if( !empty($project_image)):
             ?>
             
		    <div class="col-xs-6 col-sm-4 col-md-4" data-groups='["<?php echo $cat->name; ?>"]'>
			   
               <div class="lgBoxContent">
               		
                    <?php echo $project_image; ?>
                    
                    <div class="lgBoxContentTitle lightGreyBack">
                                    	
                        <h6 ><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h6>
                            
                    </div>
                    
                    <div class="thumbHighlightText primaryBackgroundColor primaryLightColor">
						<?php echo $cat->name; ?>
                    </div>
                   
               </div>
               
		    </div>
            
            <?php endif;}  } ?>
		    
          <!-- sizer -->
      <div class="col-xs-6 col-sm-4 col-md-4 shuffle_sizer"></div>          
          
          
	    </div><!-- /#grid -->
    </div><!-- /.container -->
    
    	</section>

                    
<?php get_footer(); ?>