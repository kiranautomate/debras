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
        
        <!-- Google Fonts -->
        
        <link href='https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700' rel='stylesheet' type='text/css'>
        
         <?php wp_head();?>
    </head>
    <body <?php body_class(); ?>>
    
    	<!-- HEADER 
        ============================== -->
    	<header class="site-header" role="banner">
        	
            <div class="headerTop">
            	<div class="container">
                	<div class="headerTopLeft">
                        <ul>
                            <li><a href="#">Afspraak maken</a></li>
                            <li><a href="#">Veel gestelde vragen</a></li>
                            <li><a href="#">Over ons</a></li>
                        </ul>
                    </div>
                    <div class="headerTopRight">
                    	<ul>
                            <li><a href="#">Bel voor een afspraak</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-earphone"></span>015 - 3100782</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- NAVBAR 
        	============================== -->
            <div class="navbar-wrapper">
            	
                <div class="container">
                    <div class="navbar" role="navigation">
                        
                            <div class="navbar-header">
                                <a class="navbar-brand" href="/_"><img src="<?php bloginfo('template_directory');?>/img/logo.png" alt="Fysio" class="img-responsive"></a>
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigatoin</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div><!-- navbar-header -->
                            <div class="collapse navbar-collapse">
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