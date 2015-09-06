							<div class="col col-sm-4 colRight" >
                            	
                                <section id="singleServiceContactForm">
									<h4>Neem contact met ons op</h4>
									<?php $contact_form_sc = get_field('service_contact_form');?>
									<?php echo do_shortcode('[contact-form-7 id="73" title="Contact form 1"]'); ?>
                                </section>
                                <section id="singleServiceContact">
                                
                                    <h4>Fysiotherapie De Bras</h4>
    
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
                                        <p id="singleServiceContactEmail"><span class="glyphicon glyphicon-envelope"></span><?php echo get_option('db_email_id');  ?> </p>
                                    <?php endif; ?>
                                    
                                    	<p>Vandaag bereikbaar tot <?php echo get_option('db_timing_' . strtolower(date('D')));  ?>  uur</p>
                                
                                </section>
                                
                            </div>