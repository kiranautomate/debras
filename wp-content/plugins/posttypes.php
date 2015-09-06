<?php
/**
 * Plugin Name: Custom Post Types and Taxonomies
 * Plugin URI: http://acedezine.com
 * Description: A simple plugin that adds custom post types and taxonomies
 * Version: 0.1
 * Author: Kiran
 * Author URI: http://yoursite.com
 * License: GPL2
 */

/*  Copyright YEAR  YOUR_NAME  (email : your@email.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
                

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
?>				