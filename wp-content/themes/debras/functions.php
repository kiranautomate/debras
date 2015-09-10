<?php

function debras_theme_styles() {
	
	wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');	
	wp_enqueue_style('fontawesome_css', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style('flexslider_css', get_template_directory_uri() . '/css/flexslider.css');	
	wp_enqueue_style('slick_css', get_template_directory_uri() . '/css/slick.css');	
	wp_enqueue_style('slick_theme_css', get_template_directory_uri() . '/css/slick-theme.css');	
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
	wp_enqueue_script( 'slick_js', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );
}
add_action('wp_enqueue_scripts', 'debras_theme_js');

add_theme_support('menus');
add_theme_support('post-thumbnails');

//CREATING CUSTOM POST TYPES
function my_custom_posttypes() {

//Services custom post type    
    $labels = array(
        'name'               => 'Services',
        'singular_name'      => 'Service',
        'menu_name'          => 'Services',
        'name_admin_bar'     => 'Service',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Service',
        'new_item'           => 'New Service',
        'edit_item'          => 'Edit Service',
        'view_item'          => 'View Services',
        'all_items'          => 'All Services',
        'search_items'       => 'Search Services',
        'parent_item_colon'  => 'Parent Services:',
        'not_found'          => 'No Services found.',
        'not_found_in_trash' => 'No Services found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-hammer',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'services' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'thumbnail' )
    );
    register_post_type( 'services', $args );

//Partners custom post type

    $labels = array(
        'name'               => 'Partners',
        'singular_name'      => 'Partner',
        'menu_name'          => 'Partners',
        'name_admin_bar'     => 'Partner',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Partner',
        'new_item'           => 'New Partner',
        'edit_item'          => 'Edit Partner',
        'view_item'          => 'View Partners',
        'all_items'          => 'All Partners',
        'search_items'       => 'Search Partners',
        'parent_item_colon'  => 'Parent Partners:',
        'not_found'          => 'No Partners found.',
        'not_found_in_trash' => 'No Partners found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-universal-access',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'partners' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'thumbnail' )
    );
    register_post_type( 'partners', $args );

//Team Member custom post type

    $labels = array(
        'name'               => 'Members',
        'singular_name'      => 'Member',
        'menu_name'          => 'Members',
        'name_admin_bar'     => 'Member',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Member',
        'new_item'           => 'New Member',
        'edit_item'          => 'Edit Member',
        'view_item'          => 'View Members',
        'all_items'          => 'All Members',
        'search_items'       => 'Search Members',
        'parent_item_colon'  => 'Parent Members:',
        'not_found'          => 'No Members found.',
        'not_found_in_trash' => 'No Members found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-universal-access',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Members' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'thumbnail' )
    );
    register_post_type( 'members', $args );

//Projects custom post type

    $labels = array(
        'name'               => 'Projects',
        'singular_name'      => 'Project',
        'menu_name'          => 'Projects',
        'name_admin_bar'     => 'Project',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Project',
        'new_item'           => 'New Project',
        'edit_item'          => 'Edit Project',
        'view_item'          => 'View Projects',
        'all_items'          => 'All Projects',
        'search_items'       => 'Search Projects',
        'parent_item_colon'  => 'Parent Projects:',
        'not_found'          => 'No Projects found.',
        'not_found_in_trash' => 'No Projects found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-clipboard',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'projects' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );
    register_post_type( 'projects', $args );
			
}
add_action( 'init', 'my_custom_posttypes' );

// Flush rewrite rules to add "review" as a permalink slug
function my_rewrite_flush() {
    my_custom_posttypes();
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );


// Custom Taxonomies
function my_custom_taxonomies() {
	
    // Type of Product/Service taxonomy
    $labels = array(
        'name'              => 'Type of Projects',
        'singular_name'     => 'Type of Project',
        'search_items'      => 'Search Types of Projects',
        'all_items'         => 'All Types of Projects',
        'parent_item'       => 'Parent Type of Project',
        'parent_item_colon' => 'Parent Type of Project:',
        'edit_item'         => 'Edit Type of Project',
        'update_item'       => 'Update Type of Project',
        'add_new_item'      => 'Add New Type of Project',
        'new_item_name'     => 'New Type of Project Name',
        'menu_name'         => 'Type of Projects',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'project-type' ),
    );

    register_taxonomy( 'project-type', array( 'projects' ), $args );
	
}

add_action( 'init', 'my_custom_taxonomies' );          

//Create a Better WordPress Options Panel
$themename = "Debras";
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

array( "name" => "Display contact form or timing details",
    "desc" => "Choose whether you want to display timing details or contact form in the location section of your home page.",
    "id" => $shortname."_display_time_form",
    "type" => "select",
	"options" => array("Timing details", "Contact Form"),
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

array( "name" => "Contact form shortcode",
    "desc" => "Enter text shortcode for the contact form.",
    "id" => $shortname."_contact_form",
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
  
add_menu_page($themename, $themename, 'administrator', 'debras_theme_settings', 'mytheme_admin', get_template_directory_uri().'/img/themeIcon.png', 35 );
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
//CREATING A THEME OPTIONS PAGE FOR COLOR SETTINGS

//Creating a Theme Options Page
function my_admin_menu() {
    $page = add_submenu_page( 'debras_theme_settings', 'Color Options', 'Color Options', 'edit_theme_options', 'debras-color-options', 'my_theme_options' );
    add_action( 'admin_print_styles-' . $page, 'my_admin_scripts' );
}
add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_scripts() {
    wp_enqueue_style( 'farbtastic' );
    wp_enqueue_script( 'farbtastic' );
    wp_enqueue_script( 'debras-color-options', get_template_directory_uri() . '/js/theme-options.js', array( 'farbtastic', 'jquery' ) );
}

//Theme Options Page Contents
function my_theme_options() {
    ?>
    <div class="wrap">
        <div id="icon-themes" class="icon32" ><br></div>
        <h2>Debras Color Options</h2>

        <form method="post" action="options.php">
            <?php wp_nonce_field( 'update-options' ); ?>
            <?php settings_fields( 'debras-color-options' ); ?>
            <?php do_settings_sections( 'debras-color-options' ); ?>
            <p class="submit">
                <input name="Submit" type="submit" class="button-primary" value="Save Changes" />
            </p >
        </form>
    </div>
    <?php
}

//Settings, Sections and Fields
function my_admin_init() {
    
	register_setting( 'debras-color-options', 'debras-color-options' );
    add_settings_section( 'section_general', 'Color Settings', 'color_section_general', 'debras-color-options' );
	
	//Primary color 
    add_settings_field( 'primaryColor', 'Primary Color', 'primary_setting_color', 'debras-color-options', 'section_general' );
    
	//Secondary Button 2 color
    add_settings_field( 'secondaryBtnColor', 'Secondary Button Color', 'secondary_btn_setting_color', 'debras-color-options', 'section_general' );
	
	//Titles color
    add_settings_field( 'titleColor', 'Titles Color', 'title_setting_color', 'debras-color-options', 'section_general' );	
	
	//Content texts color
    add_settings_field( 'contentColor', 'Content texts Color', 'content_setting_color', 'debras-color-options', 'section_general' );		
}
add_action( 'admin_init', 'my_admin_init' );

function color_section_general() {
    _e( 'Primary color applies to a major section of this theme which includes major background color, primary button color and some text colors too.' );
}

//The Color Field
function primary_setting_color() {
    $colorArray = get_option( 'debras-color-options' );
    ?>
    <div class="color-picker" style="position: relative;">
        
        <input type="text" name="debras-color-options[primaryColor]" value="<?php if( $colorArray['primaryColor'] ) { echo esc_attr( $colorArray['primaryColor'] ); } else { echo '#d87a00'; } ?>" />
        <input type='button' class='pickcolor button-secondary' value='Select Color'>
        <div id='colorpicker' style='z-index: 100; background:#eee; border:1px solid #ccc; position:absolute; display:none;'></div>

    </div>
    <?php
}

function secondary_btn_setting_color() {
    $colorArray = get_option( 'debras-color-options' );
    ?>
    <div class="color-picker" style="position: relative;">
        
        <input type="text" name="debras-color-options[secondaryBtnColor]" value="<?php if( $colorArray['secondaryBtnColor'] ) { echo esc_attr( $colorArray['secondaryBtnColor'] ); } else { echo '#f2f2f2'; } ?>" />
        <input type='button' class='pickcolor button-secondary' value='Select Color'>
        <div id='colorpicker' style='z-index: 100; background:#eee; border:1px solid #ccc; position:absolute; display:none;'></div>
        
    </div>
    <?php
}

function title_setting_color() {
    $colorArray = get_option( 'debras-color-options' );
    ?>
    <div class="color-picker" style="position: relative;">
        
        <input type="text" name="debras-color-options[titleColor]" value="<?php if( $colorArray['titleColor'] ) { echo esc_attr( $colorArray['titleColor'] ); } else { echo '#d87a00'; } ?>" />
        <input type='button' class='pickcolor button-secondary' value='Select Color'>
        <div id='colorpicker' style='z-index: 100; background:#eee; border:1px solid #ccc; position:absolute; display:none;'></div>
        
    </div>
    <?php
}

function content_setting_color() {
    $colorArray = get_option( 'debras-color-options' );
    ?>
    <div class="color-picker" style="position: relative;">
        
        <input type="text" name="debras-color-options[contentColor]" value="<?php if( $colorArray['contentColor'] ) { echo esc_attr( $colorArray['contentColor'] ); } else { echo '#000'; } ?>" />
        <input type='button' class='pickcolor button-secondary' value='Select Color'>
        <div id='colorpicker' style='z-index: 100; background:#eee; border:1px solid #ccc; position:absolute; display:none;'></div>
        
    </div>
    <?php
}

//Adding theme options style to head
function my_wp_head() {
    $colorArray = get_option( 'debras-color-options' );
	
    $primaryColor = $colorArray['primaryColor'];
    $secondaryBtnColor = $colorArray['secondaryBtnColor'];
	$titleColor = $colorArray['titleColor'];
	$contentColor = $colorArray['contentColor'];
    
	?>
	<style type="text/css"> 
	
    .primaryColor,#primaryColor,.primaryColor:hover,#primaryColor:hover, #bannerTitle{ color:<?php echo $primaryColor; ?> ;}
	.primaryBackgroundColor,#primaryBackgroundColor{ background-color:<?php echo $primaryColor; ?> ;} 
    
    .secondaryBtnColor { background-color:<?php echo $secondaryBtnColor; ?> ;}
    
     h1, h2, h3, h4, h5, h6{ color:<?php echo $titleColor; ?> }
    
    .contentColorDark, .contentColorDark a{color: <?php echo $contentColor; ?> ;}
	
    .wpcf7 input[type="submit"] {
       background-color:<?php echo $primaryColor; ?>  ; 
       color:#fff ;
    }

    li.active a#primaryAnchorColor{
        background-color: <?php echo $primaryColor; ?> ;  
        color:#fff;
    }    
    .primaryLightColor, .primaryLightColor p, .primaryLightColor:hover, .primaryLightColor a,#primaryLightColor,  #primaryLightColor a{
      color: #fff ;   
    }
    #primaryLightBackgroundColor,.primaryLightBackgroundColor{
      background-color:#fff;
    }	
    #primaryBackgroundLightContentColor{
      background-color: <?php echo $primaryColor; ?> ; 
      color: #fff ;  
    }
    h1, h1 a, h1 a:hover,h2, h2 a, h2 a:hover,h3, h3 a, h3 a:hover,h4, h4 a, h4 a:hover,h5, h5 a, h5 a:hover,h6, h6 a, h6 a:hover{
      color: <?php echo $titleColor; ?>;
    } 
    .primaryAnchorColor, .primaryAnchorColor a,#primaryAnchorColor, #primaryAnchorColor a{
      color: #000; ?> ;
    }
    .secondaryBackgroundColor,#secondaryBackgroundColor{
      background-color: #e6e6e6 ;  
    }
    .secondaryContentColor,.secondaryContentColor:hover, .secondaryContentColor a{
      color: #4d4d4d ;  
    }
	</style>
    <?php
}
add_action( 'wp_head', 'my_wp_head' );

?>

