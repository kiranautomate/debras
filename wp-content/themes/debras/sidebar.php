							<div class="col col-lg-4 colRight" >
                            	
                                <?php if( get_option('db_contact_form') != "" ): ?>
                                
                                <section id="customContactForm" class="secondaryBackgroundColor">
									<h4>Neem contact met ons op</h4>
									<?php  $contact_form_sc = get_option('db_contact_form');;?>
                            		<?php  echo do_shortcode($contact_form_sc); ?>
                                </section>
                                
                                <?php endif; ?>
                                
                                <section id="sidebarContact" class="primaryBackgroundColor primaryLightColor">
                                
                                    <h4 class="primaryLightColor">Fysiotherapie De Bras</h4>
    
                                    <?php if( get_option('db_custom_address') != "" ): ?>
                                        <p id="contactAddress"><span class="glyphicon glyphicon-map-marker"></span><?php echo get_option('db_custom_address');  ?> </p>
                                    <?php endif; ?>
                                    
                                    <?php if( get_option('db_telephone_one') != "" ): ?>
                                        <p><span class="glyphicon glyphicon-earphone"></span><?php echo get_option('db_telephone_one');  ?> (telefoon 1) </p>
                                    <?php endif; ?>
                                    
                                    <?php if( get_option('db_telephone_two') != "" ): ?>
                                        <p><span class="glyphicon glyphicon-earphone"></span><?php echo get_option('db_telephone_two');  ?> (telefoon 2)  </p>
                                    <?php endif; ?>
                                    
                                    <?php if( get_option('db_email_id') != "" ): ?>
                                        <p id="sidebarContactEmail"><span class="glyphicon glyphicon-envelope"></span><?php echo get_option('db_email_id');  ?> </p>
                                    <?php endif; ?>
                                    
                                    	<p>Vandaag bereikbaar tot <?php echo get_option('db_timing_' . strtolower(date('D')));  ?>  uur</p>
                                
                                </section>
                                
                            </div>