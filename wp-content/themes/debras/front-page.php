<?php get_header(); ?>

        <!-- BANNER 
        ============================== -->
        <section id="banner">
        	<article>
            
				<?php 
                      $args = array( 'post_type' => 'banners');
                      $the_query = new WP_Query( $args );
                ?>
                <?php if( have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>
        		
				<?php
				
				$image = get_field('banner_image');
				
				$video = get_field('background_video');
				
				if( !empty($image) && empty($video) ): ?>
				
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive" />
				
				<?php endif; ?>
                
                <?php
                if( !empty($video) ): ?>
					
                    <div class="videoBanner"><?php var_dump($video); echo $video['textarea']; ?></div>
				
				<?php endif; ?>
                	
                    <div class="bannerText">Fysiotherapie en Manuele Therapie De Bras</div>

                
        		<?php endwhile; endif; ?>
            </article>
        </section>
    
        <!-- CONTENT SECTION 
        ============================== -->
        <section id="homeContent">
        	<div class="container">
                <h3 class="homeContentTitle">
                    Dé praktijk voor fysiotherapie en manuele therapie in Den Haag en omstreken.
                </h3>
                <div class="homeContentText">
                    DDoor beweging bepalen we op verschillende manieren de kwaliteit van ons leven.
                    Fysiotherapeuten zijn deskundig op het gebied van het bewegingsapparaat. Wij
                    kunnen u informeren, adviseren, begeleiden en behandelen bij klachten van dit
                    bewegingsapparaat. Ook kunnen wij u helpen gezondheidsproblemen door beweging
                    te voorkomen door u te begeleiden bij het opbouwen van een actief levenspatroon.
                </div>
                <div class="homeContentButton">
                    <input type="button" value="Onze deletion" class="btn btn-md btn-primary">
                    <input type="button" value="Onze deletion" class="btn btn-md btn-warning">
                </div>            	
            </div>
        </section>
        
        <!-- SERVICES 
        ============================== -->
        <section id="services">
        	<div class="container">
                <h3>Onze diensten</h3>
                <div id="carousel-services" class="carousel slide" data-ride="carousel">
                
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <div class="row">
                        <div class="col col-sm-3 col-xs-6">
                            <div class="servicesContent">
                                <img src="<?php bloginfo('template_directory');?>/img/servicesone.png" alt="services" class="img-responsive">
                                <p class="servicesContentTitle">Behandling 1</p>
                            </div>
                        </div>
                        <div class="col col-sm-3 col-xs-6">
                            <div class="servicesContent">
                                <img src="<?php bloginfo('template_directory');?>/img/servicesone.png" alt="services" class="img-responsive">
                                <p class="servicesContentTitle">Behandling 1</p>
                            </div>
                        </div>
                        <div class="col col-sm-3 col-xs-6">
                            <div class="servicesContent">
                                <img src="<?php bloginfo('template_directory');?>/img/servicesone.png" alt="services" class="img-responsive">
                                <p class="servicesContentTitle">Behandling 1</p>
                            </div>
                        </div>
                        <div class="col col-sm-3 col-xs-6">
                            <div class="servicesContent">
                                <img src="<?php bloginfo('template_directory');?>/img/servicesone.png" alt="services" class="img-responsive">
                                <p class="servicesContentTitle">Behandling 1</p>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                       <div class="row">
                        <div class="col col-sm-3 col-xs-6">
                            <div class="servicesContent">
                                <img src="<?php bloginfo('template_directory');?>/img/servicesone.png" alt="services" class="img-responsive">
                                <p class="servicesContentTitle">Behandling 1</p>
                            </div>
                        </div>
                        <div class="col col-sm-3 col-xs-6">
                            <div class="servicesContent">
                                <img src="<?php bloginfo('template_directory');?>/img/servicesone.png" alt="services" class="img-responsive">
                                <p class="servicesContentTitle">Behandling 1</p>
                            </div>
                        </div>
                        <div class="col col-sm-3 col-xs-6">
                            <div class="servicesContent">
                                <img src="<?php bloginfo('template_directory');?>/img/servicesone.png" alt="services" class="img-responsive">
                                <p class="servicesContentTitle">Behandling 1</p>
                            </div>
                        </div>
                        <div class="col col-sm-3 col-xs-6">
                            <div class="servicesContent">
                                <img src="<?php bloginfo('template_directory');?>/img/servicesone.png" alt="services" class="img-responsive">
                                <p class="servicesContentTitle">Behandling 1</p>
                            </div>
                        </div>
                      </div> 
                    </div>
                  </div>
                
                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-services" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-services" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
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
                        	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d60896.85431750921!2d78.51391505!3d17.4571583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1441102683963" width="100%" height="260" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </section>
                    </div>
                    <div class="col col-sm-5" id="openingTime">
                    	<h3>Onze openingstijden</h3>
                        <ul>
                        	<li>Monday<span>08:00</span></li>
                            <li>Monday<span>08:00</span></li>
                            <li>Monday<span>08:00</span></li>
                            <li>Monday<span>08:00</span></li>
                            <li>Monday<span>08:00</span></li>
                            <li>Monday<span>08:00</span></li>
                            <li>Monday<span>08:00</span></li>
                        </ul>
                        <div class="homeContentButton">
                            <input type="button" value="Bel 015 - 3100782" class="btn btn-md btn-primary">
                            <input type="button" value="Afspraak maken" class="btn btn-md btn-warning">
                        </div> 
                    </div>
                </div>  
                <div id="carousel-partners" class="carousel slide" data-ride="carousel">
                	<h3>Partners en referenties</h3>
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <div class="row">
                        <div class="col col-sm-15 col-xs-4">
                            <div class="servicesContent">
                                <img src="<?php bloginfo('template_directory');?>/img/partners1.png" alt="partners" class="img-responsive">
                            </div>
                        </div>
                        <div class="col col-sm-15 col-xs-4">
                            <div class="servicesContent">
                                <img src="<?php bloginfo('template_directory');?>/img/partners1.png" alt="partners" class="img-responsive">
                            </div>
                        </div>
                        <div class="col col-sm-15 col-xs-4">
                            <div class="servicesContent">
                                <img src="<?php bloginfo('template_directory');?>/img/partners1.png" alt="partners" class="img-responsive">
                            </div>
                        </div>
						<div class="col col-sm-15 col-xs-4">
                            <div class="servicesContent">
                                <img src="<?php bloginfo('template_directory');?>/img/partners1.png" alt="partners" class="img-responsive">
                            </div>
                        </div>
                        <div class="col col-sm-15 col-xs-4">
                            <div class="servicesContent">
                                <img src="<?php bloginfo('template_directory');?>/img/partners1.png" alt="partners" class="img-responsive">
                            </div>
                        </div>
                      </div><!-- Row -->
                    </div>
                    <div class="item">
                      <div class="row">
                        <div class="col col-sm-15 col-xs-4">
                            <div class="servicesContent">
                                <img src="<?php bloginfo('template_directory');?>/img/partners1.png" alt="partners" class="img-responsive">
                            </div>
                        </div>
                        <div class="col col-sm-15 col-xs-4">
                            <div class="servicesContent">
                                <img src="<?php bloginfo('template_directory');?>/img/partners1.png" alt="partners" class="img-responsive">
                            </div>
                        </div>
                        <div class="col col-sm-15 col-xs-4">
                            <div class="servicesContent">
                                <img src="<?php bloginfo('template_directory');?>/img/partners1.png" alt="partners" class="img-responsive">
                            </div>
                        </div>
						<div class="col col-sm-15 col-xs-4">
                            <div class="servicesContent">
                                <img src="<?php bloginfo('template_directory');?>/img/partners1.png" alt="partners" class="img-responsive">
                            </div>
                        </div>
                        <div class="col col-sm-15 col-xs-4">
                            <div class="servicesContent">
                                <img src="<?php bloginfo('template_directory');?>/img/partners1.png" alt="partners" class="img-responsive">
                            </div>
                        </div>
                      </div><!-- Row -->
                    </div>
                  </div>
                
                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-partners" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-partners" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>         
            </div><!-- Continer -->
        </section>
        
<?php get_footer(); ?>      