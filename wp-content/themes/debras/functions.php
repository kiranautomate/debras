<?php

function debras_theme_styles() {
	
	wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');	
	wp_enqueue_style('fontawesome_css', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style('flexslider_css', get_template_directory_uri() . '/css/flexslider.css');		
	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');	
	
}

add_action('wp_enqueue_scripts', 'debras_theme_styles');

function debras_theme_js() {

	global $wp_scripts;

	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'flexslider_js', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'), '', true );
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );
}
add_action('wp_enqueue_scripts', 'debras_theme_js');

//add_filter('show_admin_bar', '__return_false');

add_theme_support('menus');
add_theme_support('post-thumbnails');


function create_widget($name, $id, $description) {
	
	register_sidebar( array(
		
			'name' => __( $name ),
			'id' => $id,
			'description' => __( $description ),
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		)
		
	);
	
}

create_widget('Front Page Left', 'front-left' , 'Displays on the left of the homepage');
create_widget('Front Page Center', 'front-center' , 'Displays in the center of the homepage');
create_widget('Front Page Right', 'front-right' , 'Displays on the right of the homepage');

create_widget('Page sidebar', 'page', 'Displays on the page sidebar');

create_widget('Blog sidebar', 'blog', 'Displays on the page with blog layout');

//THEME CUSTOMIZATION

//var_dump( $wp_customize );

require_once('inc/wp-customize-image-reloaded.php');

function wpt_register_theme_customizer( $wp_customize ) {

  // Customize Header Image Settings  
  $wp_customize->add_section( 'header_text_styles' , array(
	  'title'      => __('Header Text Styles','wptthemecustomizer'), 
	  'priority'   => 30    
  ) );
  
  $wp_customize->get_control('display_header_text')->section = 'header_text_styles';  
  $wp_customize->get_control('header_textcolor')->section = 'header_text_styles'; 
  $wp_customize->get_control('header_textcolor')->label = __('Site Title Color', 'wptthemecustomizer');
  $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage'; 
	
  // Customize title and tagline sections and labels
  $wp_customize->get_section('title_tagline')->title = __('Site Name and Description', 'wptthemecustomizer');  
  $wp_customize->get_control('blogname')->label = __('Site Name', 'wptthemecustomizer');  
  $wp_customize->get_control('blogdescription')->label = __('Site Description', 'wptthemecustomizer');  
  $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
  $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
		
  // Customize the Front Page Settings
  $wp_customize->get_section('static_front_page')->title = __('Homepage Preferences', 'wptthemecustomizer');
  $wp_customize->get_section('static_front_page')->priority = 20;
  $wp_customize->get_control('show_on_front')->label = __('Choose Homepage Preference', 'wptthemecustomizer');  
  $wp_customize->get_control('page_on_front')->label = __('Select Homepage', 'wptthemecustomizer');  
  $wp_customize->get_control('page_for_posts')->label = __('Select Blog Homepage', 'wptthemecustomizer'); 
	 	  
  // Create custom panels
  $wp_customize->add_panel( 'general_settings', array(
      'priority' => 10,
      'theme_supports' => '',
      'title' => __( 'General Settings', 'wptthemecustomizer' ),
      'description' => __( 'Controls the basic settings for the theme.', 'wptthemecustomizer' ),
  ) );
  $wp_customize->add_panel( 'design_settings', array(
      'priority' => 20,
      'theme_supports' => '',
      'title' => __( 'Design Settings', 'wptthemecustomizer' ),
      'description' => __( 'Controls the basic design settings for the theme.', 'wptthemecustomizer' ),
  ) ); 
  
  // Assign sections to panels
  $wp_customize->get_section('title_tagline')->panel = 'general_settings';
  $wp_customize->get_section('static_front_page')->panel = 'general_settings';
  $wp_customize->get_section('header_text_styles')->panel = 'design_settings';
  $wp_customize->get_section('background_image')->panel = 'design_settings';
  $wp_customize->get_section('background_image')->priority = 1000;
  $wp_customize->get_section('header_image')->panel = 'design_settings';  
  
  // Add Custom Logo Settings
  $wp_customize->add_section( 'custom_logo' , array(
    'title'      => __('Change Your Logo','wptthemecustomizer'), 
    'panel'      => 'design_settings',
    'priority'   => 20    
  ) );  
  $wp_customize->add_setting(
      'wpt_logo',
      array(
          'default'         => get_template_directory_uri() . '/img/logo.png',
          'transport'       => 'postMessage'
      )
  );
  $wp_customize->add_control(
       new My_Customize_Image_Reloaded_Control(
           $wp_customize,
           'custom_logo',
           array(
               'label'      => __( 'Change Logo', 'wptthemecustomizer' ),
               'section'    => 'custom_logo',
               'settings'   => 'wpt_logo',
               'context'    => 'wpt-custom-logo' 
           )
       )
   ); 
   
  // Add Custom Footer Text
  $wp_customize->add_section( 'custom_footer_text' , array(
    'title'      => __('Change Footer Text','wptthemecustomizer'), 
    'panel'      => 'general_settings',
    'priority'   => 1000    
  ) );  
  $wp_customize->add_setting(
      'wpt_footer_text',
      array(
          'default'           => __( 'Custom footer text', 'wptthemecustomizer' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_footer_text',
            array(
                'label'          => __( 'Footer Text', 'wptthemecustomizer' ),
                'section'        => 'custom_footer_text',
                'settings'       => 'wpt_footer_text',
                'type'           => 'text'
            )
        )
   );
   
  // Add H3 Style Settings
  $wp_customize->add_section( 'h3_styles' , array(
    'title'      => __('H3 Styles','wptthemecustomizer'), 
    'panel'      => 'design_settings',
    'priority'   => 100    
  ) );  
  $wp_customize->add_setting(
      'wpt_h3_color',
      array(
          'default'         => '#D87A00',
          'transport'       => 'postMessage'
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Color_Control(
           $wp_customize,
           'custom_h3_color',
           array(
               'label'      => __( 'Color', 'wptthemecustomizer' ),
               'section'    => 'h3_styles',
               'settings'   => 'wpt_h3_color' 
           )
       )
   ); 
  $wp_customize->add_setting(
      'wpt_h3_font_size',
      array(
          'default'         => '24px',
          'transport'       => 'postMessage'
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_h3_font_size',
            array(
                'label'          => __( 'Font Size', 'wptthemecustomizer' ),
                'section'        => 'h3_styles',
                'settings'       => 'wpt_h3_font_size',
                'type'           => 'select',
                'choices'        => array(
                  '22px'   => '22px',
                  '28px'   => '28px',
                  '32px'   => '32px',
                  '42px'   => '42px'
                )
            )
        )       
   );   
	
}

add_action( 'customize_register', 'wpt_register_theme_customizer' );


// Sanitize text 
function sanitize_text( $text ) {
    
    return sanitize_text_field( $text );

}

// Sanitize textarea 
function sanitize_textarea( $text ) {
    
    return esc_textarea( $text );

}

// Custom js for theme customizer
function wpt_customizer_js() {
  wp_enqueue_script(
    'wpt_theme_customizer',
    get_template_directory_uri() . '/js/theme-customizer.js',
    array( 'jquery', 'customize-preview' ),
    '',
    true
);
}
add_action( 'customize_preview_init', 'wpt_customizer_js' );

// Add theme support for Custom Header Image
$defaults = array(
  'default-image'          => get_template_directory_uri() . '/images/header.png', 
  'default-text-color'     => '#36b55c',
  'header-text'            => true,
  'uploads'                => true,
  'wp-head-callback'       => 'wpt_style_header'
);
add_theme_support( 'custom-header', $defaults );

// Add theme menus
function wpt_theme_menus() {

  register_nav_menus(
    array(
      'header-menu'   => __( 'Header Menu', 'wptthemecustomizer' ),
    )
  );

}
add_action( 'init', 'wpt_theme_menus' );

// Callback function for updating header h3 styles
function wpt_style_header() {

  $text_color = get_header_textcolor();
  
  ?>
  
  <style type="text/css">
 
  h3 {
    font-size: <?php echo get_theme_mod('wpt_h3_font_size'); ?> !important;
  }
  h3{
    color: <?php echo get_theme_mod('wpt_h3_color'); ?> !important;
  }

  </style>
  <?php 

}
?>

<?php

//Create a Better WordPress Options Panel
$themename = "debras";
$shortname = "db";

$categories = get_categories('hide_empty=0&orderby=name');
$wp_cats = array();
foreach ($categories as $category_list ) {
       $wp_cats[$category_list->cat_ID] = $category_list->cat_name;
}
array_unshift($wp_cats, "Choose a category");


$options = array (
  
array( "name" => $themename." Options",
    "type" => "title"),
  
 
array( "name" => "General",
    "type" => "section"),
array( "type" => "open"),

array( "name" => "Logo URL",
    "desc" => "Enter the link to your logo image",
    "id" => $shortname."_logo",
    "type" => "text",
    "std" => ""),
 
array( "name" => "Colour Scheme",
    "desc" => "Select the colour scheme for the theme",
    "id" => $shortname."_color_scheme",
    "type" => "select",
    "options" => array("blue", "red", "green"),
    "std" => "blue"),


array( "type" => "close"),
array( "name" => "Banner",
    "type" => "section"),
array( "type" => "open"),

array( "name" => "Banner image",
    "desc" => "Paste the link to appear in the banner sections of your website.",
    "id" => $shortname."_banner_image",
    "type" => "text",
    "std" => ""),  

array( "name" => "Banner video",
    "desc" => "Paste the youtube video URL to show the video and overwrite the background image. Note: You do not need to use the iframe embed link/ Just URL is enough.",
    "id" => $shortname."_banner_video",
    "type" => "text",
    "std" => ""),  
	
array( "name" => "Banner title",
    "desc" => "Give a title to your banner.",
    "id" => $shortname."_banner_title",
    "type" => "text",
    "std" => ""),  

array( "type" => "close"),
array( "name" => "Homepage",
    "type" => "section"),
array( "type" => "open"),
 
array( "name" => "Homepage content title (Primary)",
    "desc" => "Enter the title for the Primary content section of home page.",
    "id" => $shortname."_home_content_title_primary",
    "type" => "text",
    "std" => ""),
     
array( "name" => "Homepage content (Primary)",
    "desc" => "Paste the content for the Primary content section of home page.",
    "id" => $shortname."_home_content_body_primary",
    "type" => "textarea",
    "std" => ""),

array( "name" => "Homepage Button one text (Primary)",
    "desc" => "Text for button one of primary content.",
    "id" => $shortname."_home_content_button1_primary",
    "type" => "text",
    "std" => ""),   

array( "name" => "Homepage Button two text (Primary)",
    "desc" => "Text for button two of primary content.",
    "id" => $shortname."_home_content_button2_primary",
    "type" => "text",
    "std" => ""),   

array( "name" => "Homepage content title (Secondary)",
    "desc" => "Enter the title for the Primary content section of home page.",
    "id" => $shortname."_home_content_title_secondary",
    "type" => "text",
    "std" => ""),
     
array( "name" => "Homepage content (Secondary)",
    "desc" => "Paste the content for the Primary content section of home page.",
    "id" => $shortname."_home_content_body_secondary",
    "type" => "textarea",
    "std" => ""),

array( "name" => "Homepage Button one text (Secondary)",
    "desc" => "Text for button one of primary content.",
    "id" => $shortname."_home_content_button1_secondary",
    "type" => "text",
    "std" => ""),   

array( "name" => "Homepage Button two text (Secondary)",
    "desc" => "Text for button two of primary content.",
    "id" => $shortname."_home_content_button2_secondary",
    "type" => "text",
    "std" => ""),  
		   
array( "type" => "close"),
array( "name" => "Contact Details",
    "type" => "section"),
array( "type" => "open"),
     
array( "name" => "Address",
    "desc" => "Want to change your custom address? Put in here, and the rest is taken care of. This will display in the footer section and contact us page.",
    "id" => $shortname."_custom_address",
    "type" => "textarea",
    "std" => ""),     
	
array( "name" => "Telephone Number(Primary)",
    "desc" => "Enter the primary telephone number to add in pre-header section, under footer contact section and contact us page.",
    "id" => $shortname."_telephone_one",
    "type" => "text",
    "std" => ""),   
	
array( "name" => "Telephone Number(Secondary)",
    "desc" => "Enter the secondary telephone number to add only under footer contact section and contact us page. Note that this will not appear in the pre-header section.",
    "id" => $shortname."_telephone_two",
    "type" => "text",
    "std" => ""), 
	
array( "name" => "Email",
    "desc" => "Enter your business email id here.",
    "id" => $shortname."_email_id",
    "type" => "text",
    "std" => ""),   
	
array( "name" => "Facebook ID",
    "desc" => "Enter the Facebook id of your business/service page.",
    "id" => $shortname."_facebook_id",
    "type" => "text",
    "std" => ""),
	
array( "name" => "Twitter handle",
    "desc" => "Enter the twiitter handle for your business/service here.",
    "id" => $shortname."_twitter_handle",
    "type" => "text",
    "std" => ""),  	  

array( "name" => "Linkedin profile",
    "desc" => "Enter the linkedin profile for your business/service.",
    "id" => $shortname."_linkedin_profile",
    "type" => "text",
    "std" => ""),   

array( "type" => "close"),
array( "name" => "Map and timings",
    "type" => "section"),
array( "type" => "open"),

array( "name" => "Google Map",
    "desc" => "Paste the embed iframe link of your google map to appear in your website.",
    "id" => $shortname."_google_map",
    "type" => "textarea",
    "std" => ""), 
	
array( "name" => "Monday timings",
    "desc" => "Enter the timings for your service/blusiness.",
    "id" => $shortname."_timing_mon",
    "type" => "text",
    "std" => ""), 
	
array( "name" => "Tuesday timings",
    "desc" => "Enter the timings for your service/blusiness.",
    "id" => $shortname."_timing_tue",
    "type" => "text",
    "std" => ""), 

array( "name" => "Wednesday timings",
    "desc" => "Enter the timings for your service/blusiness.",
    "id" => $shortname."_timing_wed",
    "type" => "text",
    "std" => ""), 

array( "name" => "Thursday timings",
    "desc" => "Enter the timings for your service/blusiness.",
    "id" => $shortname."_timing_thu",
    "type" => "text",
    "std" => ""), 

array( "name" => "Friday timings",
    "desc" => "Enter the timings for your service/blusiness.",
    "id" => $shortname."_timing_fri",
    "type" => "text",
    "std" => ""), 
	
array( "name" => "Saturday timings",
    "desc" => "Enter the timings for your service/blusiness.",
    "id" => $shortname."_timing_sat",
    "type" => "text",
    "std" => ""), 
	
array( "name" => "Sunday timings",
    "desc" => "Enter the timings for your service/blusiness.",
    "id" => $shortname."_timing_sun",
    "type" => "text",
    "std" => ""), 

array( "name" => "Timings section button one text",
    "desc" => "Enter the text to appear on button one in timing section.",
    "id" => $shortname."_timing_btn_one_txt",
    "type" => "text",
    "std" => ""), 
	
array( "name" => "Timings section button one URL",
    "desc" => "Enter the URL to link from button one.",
    "id" => $shortname."_timing_btn_one_url",
    "type" => "textarea",
    "std" => ""),

array( "name" => "Timings section button two text",
    "desc" => "Enter the text to appear on button two in timing section.",
    "id" => $shortname."_timing_btn_two_txt",
    "type" => "text",
    "std" => ""), 
	
array( "name" => "Timings section button two URL",
    "desc" => "Enter the URL to link from button two.",
    "id" => $shortname."_timing_btn_two_url",
    "type" => "textarea",
    "std" => ""),
											     
array( "type" => "close"),
array( "name" => "USP",
    "type" => "section"),
array( "type" => "open"),

array( "name" => "Unique selling point one",
    "desc" => "Enter text for the first unique selling point of your service.",
    "id" => $shortname."_usp_one",
    "type" => "text",
    "std" => ""), 
	
array( "name" => "Unique selling point two",
    "desc" => "Enter text for the second unique selling point of your service.",
    "id" => $shortname."_usp_two",
    "type" => "text",
    "std" => ""), 		     

array( "name" => "Unique selling point three",
    "desc" => "Enter text for the third unique selling point of your service.",
    "id" => $shortname."_usp_three",
    "type" => "text",
    "std" => ""), 

array( "name" => "Unique selling point four",
    "desc" => "Enter text for the fourth unique selling point of your service.",
    "id" => $shortname."_usp_four",
    "type" => "text",
    "std" => ""), 	
		 		
array( "type" => "close"),
array( "name" => "Footer",
    "type" => "section"),
array( "type" => "open"),
     
array( "name" => "Footer copyright text",
    "desc" => "Enter text used in the right side of the footer. It can be HTML",
    "id" => $shortname."_footer_text",
    "type" => "text",
    "std" => ""),
     
array( "name" => "Google Analytics Code",
    "desc" => "You can paste your Google Analytics or other tracking code in this box. This will be automatically added to the footer.",
    "id" => $shortname."_ga_code",
    "type" => "textarea",
    "std" => ""),    
     
array( "name" => "Custom Favicon",
    "desc" => "A favicon is a 16x16 pixel icon that represents your site; paste the URL to a .ico image that you want to use as the image",
    "id" => $shortname."_favicon",
    "type" => "text",
    "std" => get_bloginfo('url') ."/favicon.ico"),   
     
array( "name" => "Feedburner URL",
    "desc" => "Feedburner is a Google service that takes care of your RSS feed. Paste your Feedburner URL here to let readers see it in your website",
    "id" => $shortname."_feedburner",
    "type" => "text",
    "std" => get_bloginfo('rss2_url')),
 
  
array( "type" => "close")
  
);

function mytheme_add_init() {
	$file_dir=get_bloginfo('template_directory');
	wp_enqueue_style("functions", $file_dir."/css/functions.css", false, "1.0", "all");
	wp_enqueue_script("rm_script", $file_dir."/js/rm_script.js", false, "1.0");
}

function mytheme_add_admin() {
 
global $themename, $shortname, $options;
  
if ( $_GET['page'] == basename(__FILE__) ) {
  
    if ( 'save' == $_REQUEST['action'] ) {
  
        foreach ($options as $value) {
        update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }
  
foreach ($options as $value) {
    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
  
    header("Location: admin.php?page=functions.php&saved=true");
die;
  
} 
else if( 'reset' == $_REQUEST['action'] ) {
  
    foreach ($options as $value) {
        delete_option( $value['id'] ); }
  
    header("Location: admin.php?page=functions.php&reset=true");
die;
  
}
}
  
add_menu_page($themename, $themename, 'administrator', basename(__FILE__), 'mytheme_admin');
}
 
function mytheme_admin() {
  
global $themename, $shortname, $options;
$i=0;
  
if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
  
?>
<div class="wrap rm_wrap">
<h2><?php echo $themename; ?> Settings</h2>
  
<div class="rm_opts">
<form method="post">
<?php foreach ($options as $value) {
switch ( $value['type'] ) {
  
case "open":
?>
  
<?php break;
  
case "close":
?>
  
</div>
</div>
<br />
 
  
<?php break;
  
case "title":
?>
<p>To easily use the <?php echo $themename;?> theme, you can use the menu below.</p>
 
  
<?php break;
  
case 'text':
?>
 
<div class="rm_input rm_text">
    <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
    <input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
  
 </div>
<?php
break;
  
case 'textarea':
?>
 
<div class="rm_input rm_textarea">
    <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
    <textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } else { echo $value['std']; } ?></textarea>
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
  
 </div>
   
<?php
break;
  
case 'select':
?>
 
<div class="rm_input rm_select">
    <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
     
<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
<?php foreach ($value['options'] as $option) { ?>
        <option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?>
</select>
 
    <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
</div>
<?php
break;
  
case "checkbox":
?>
 
<div class="rm_input rm_checkbox">
    <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
     
<?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
 
 
    <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 </div>
<?php break;
case "section":
 
$i++;
 
?>
 
<div class="rm_section">
<div class="rm_title"><h3><img src="<?php bloginfo('template_directory')?>/img/Add.png" class="inactive" alt="""><?php echo $value['name']; ?></h3><span class="submit"><input name="save<?php echo $i; ?>" type="submit" value="Save changes" />
</span><div class="clearfix"></div></div>
<div class="rm_options">
 
  
<?php break;
  
}
}
?>

<input type="hidden" name="action" value="save" />
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>
 </div> 
  
 
<?php
}
 
?>
<?php
add_action('admin_init', 'mytheme_add_init');
add_action('admin_menu', 'mytheme_add_admin');
?>

<?php


$pages = get_posts(array(
  'post_type' => 'page',
  'numberposts' => -1,
  'tax_query' => array(
    array(
      'taxonomy' => 'taxonomy-name',
      'field' => 'id',
      'terms' => 1, // Where term_id of Term 1 is "1".
      'include_children' => false
    )
  )
));


//AJAX PAGE CALL
add_action( 'wp_ajax_nopriv_load-filter', 'prefix_load_cat_posts' );
add_action( 'wp_ajax_load-filter', 'prefix_load_cat_posts' );

function prefix_load_cat_posts () {
    
	$cat_id = explode(',' , $_POST[ 'cat' ]);
    
 $args = array(
	'post_type' => 'projects',
	'post_status' => 'publish',
	'tax_query' => array(
		array(
			'taxonomy' => 'project-type',
			'field'    => 'term_id',
			'terms'    =>  $cat_id 
		),
	),
 );
 


    $posts = get_posts( $args );

    ob_start ();?>
	<?php
	
	$projects_count = 0;
	
    foreach ( $posts as $post ) {
    setup_postdata( $post ); 
	
	$project_image = get_the_post_thumbnail( $post ->ID );
	
	if( !empty($project_image)):
	?>
	
    <div class="col col-sm-4 col-xs-12" id="post-<?php echo $post->ID; ?>">
        <div class="lgThumbnailContent">
            
            <?php echo $project_image; ?>
            
            <div class="lgThumbnailContentTitle">
                
                <h6 ><a href="<?php echo get_permalink( $post ->ID ); ?>" ><?php echo get_the_title( $post ->ID ); ?></a></h6>
                    
            </div>
            
            <div class="thumbHighlightText">
                <h6><?php the_terms( $post->ID, 'project-type', ' ', ', ', ' ' ); ?></h6>
            </div>
            
        </div>
    </div>
   
   <?php $projects_count = $projects_count +1; ?>
	
	<?php if($projects_count % 3 == 0) :  ?>
        
        
      </div><div class="row">
        
    <?php endif; endif; ?>

   <?php } wp_reset_postdata();

   $response = ob_get_contents();
   ob_end_clean();

   echo $response;
   die(1);
   }
?>

