<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
$device = 'mobile';
}
?>
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
        
        
         <?php wp_head();?>
    </head>
    <body <?php body_class(); ?>>
    
    	<!-- HEADER 
        ============================== -->
    	<div id="pre-header" class="group">
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
                            <?php if( get_option('db_telephone_one') != "" ): ?>
                            <li>
                                <a href="#"><span class="glyphicon glyphicon-earphone"></span>
                                	
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
                    <div class="navbar navbar-default" role="navigation">
                        
                            <div class="navbar-header">
                                
                                <!--<hgroup id="header-title"  <?php /* if ( $header_image ) { echo 'class="header-image-true"'; } */ ?>>
                                    <h1 id="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                    <h4 id="site-description"><?php bloginfo( 'description' ); ?></h2>
                                </hgroup>-->
                                
                                <?php if( get_theme_mod( 'wpt_logo') != "" && get_option('db_logo') == "" ): ?>
                                    <a class="navbar-brand" href="<?php echo home_url( '/' ); ?>"><img id="logo" src="<?php echo get_theme_mod( 'wpt_logo' ); ?>" alt="Fysio" class="img-responsive"></a>
                                <?php endif; ?>
                                
                                <?php if( get_option('db_logo') != "" ): ?>
                                    <a class="navbar-brand" href="/_"><img id="logo" src="<?php echo get_option('db_logo');  ?>" alt="Fysio" class="img-responsive"></a>
                                <?php endif; ?>
                                
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