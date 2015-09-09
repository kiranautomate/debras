<!DOCTYPE html>

<html>
	<head>
    	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        
        <meta name="viewport" content="width = device-width,initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="<?php bloginfo('template_directory');?>/<?php bloginfo('template_directory');?>/img/favicon.png">
        
        <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name');?></title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        
        <!-- Google Fonts -->
        
        <link href='https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700' rel='stylesheet' type='text/css'>
        
        <!-- Favicon icon -->
        <?php if( get_theme_mod( 'wpt_favicon') != "" ): ?>
        
        <link rel="icon" href="<?php echo get_theme_mod( 'wpt_favicon'); ?>" sizes="16x16">
        
		<?php endif; ?>
        
        
        <?php wp_head();?>
    </head>
    <body <?php body_class(); ?>>
    
    	<!-- HEADER 
        ============================== -->
    	<div id="pre-header" class="group">
        	<div class="headerTop secondaryBackgroundColor">
            	<div class="container">
                	<div class="headerTopLeft">
                        <ul>
                            <li><a href="#" class="secondaryContentColor">Afspraak maken</a></li>
                            <li><a href="#" class="secondaryContentColor">Veel gestelde vragen</a></li>
                            <li><a href="#" class="secondaryContentColor">Over ons</a></li>
                        </ul>
                    </div>
                    <div class="headerTopRight">
                    	<ul>
                            <li><a href="#" class="primaryColor">Bel voor een afspraak</a></li>
                            <?php if( get_option('db_telephone_one') != "" ): ?>
                            <li>
                                <a href="#" class="primaryColor"><span class="glyphicon glyphicon-earphone"></span>
                                	
                                        <?php echo get_option('db_telephone_one');  ?>
                                    
                                </a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- PRE HEADER -->
        
        <header class="site-header" role="banner">
            <!-- NAVBAR 
        	============================== -->
            <div class="navbar-wrapper">
            	
                <div class="container">
                    <div class="navbar navbar-default " role="navigation">
                        
                            <div class="navbar-header">
                                
                                <?php if( get_theme_mod( 'wpt_logo') != "" && get_option('db_logo') == "" ): ?>
                                    <a class="navbar-brand" href="<?php echo home_url( '/' ); ?>"><img id="logo" src="<?php echo get_theme_mod( 'wpt_logo' ); ?>" alt="Fysio" class="img-responsive"></a>
                                <?php endif; ?>
                                
                                <?php if( get_option('db_logo') != "" ): ?>
                                    <a class="navbar-brand" href="/_"><img id="logo" src="<?php echo get_option('db_logo');  ?>" alt="Fysio" class="img-responsive"></a>
                                <?php endif; ?>
                                
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar" id="primaryBackgroundColor"></span>
                                    <span class="icon-bar" id="primaryBackgroundColor"></span>
                                    <span class="icon-bar" id="primaryBackgroundColor"></span>
                                </button>
                                
                            </div><!-- navbar-header -->
                            <div class="collapse navbar-collapse rightNavbar" id="primaryAnchorColor">
                                  <?php
                                    $args = array(
                                        'menu' => 'header-menu',
                                        'menu_class' => 'nav navbar-nav navbar-right',
                                        'conatiner' => 'false'
                                    );
                                  
                                  wp_nav_menu( $args );
                                  
                                  ?>
                            </div><!-- navbar-collapse -->
                        
                        
                    </div><!-- navbar -->
                </div><!-- container -->
            </div><!-- navbar-wrapper -->
        
        </header>    