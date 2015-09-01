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
    
    $labels = array(
        'name'               => 'Banner',
        'singular_name'      => 'Banner',
        'menu_name'          => 'Banners',
        'name_admin_bar'     => 'Banner',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Banner',
        'new_item'           => 'New Banner',
        'edit_item'          => 'Edit Banner',
        'view_item'          => 'View Banner',
        'all_items'          => 'All Banners',
        'search_items'       => 'Search Banners',
        'parent_item_colon'  => 'Parent Banners:',
        'not_found'          => 'No banners found.',
        'not_found_in_trash' => 'No banners found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-format-image',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'banners' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'thumbnail' )
    );
    register_post_type( 'banners', $args );
	
}
add_action( 'init', 'my_custom_posttypes' );

// Flush rewrite rules to add "review" as a permalink slug
function my_rewrite_flush() {
    my_custom_posttypes();
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );
                       
?>				