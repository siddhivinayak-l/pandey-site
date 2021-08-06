<?php
/**
 * @file
 * This file is for adding custom posts functions of theme.
 * 
 * @category  Post
 * @package   Posts
 * @author    Smit <smit.rathod@gmail.com>
 * @copyright 2021 Smit
 * @license   GNU General Public License version 2 or later; see LICENSE
 * @link      http://experimentors.local/
 */
/**
 * This function is for registering custom post type Project.
 * 
 * @return void
 */
function Experimentor_Site_Custom_post()
{
    
    // for courses post type
    register_post_type(
        'course', array(
        'supports'=>array('title', 'editor', 'excerpt', 'custom-fields', 'thumbnail'),
        'public'=>true,
        'labels'=>array('name'=>'courses', 'add_new_item'=>'Add New course', 'edit_item'=>'Edit course', 'singular_name'=>'course'),
        'taxonomies'=> array( 'category' ),
        'menu_icon'=>'dashicons-list-view',
        'show_in_rest' => true
        )
    );
    // for mentors post type
    register_post_type(
        'mentor', array(
        'supports'=>array('title', 'editor', 'excerpt', 'custom-fields', 'thumbnail'),
        'public'=>true,
        'labels'=>array('name'=>'mentors', 'add_new_item'=>'Add New mentor', 'edit_item'=>'Edit mentor', 'singular_name'=>'mentor'),
        'taxonomies'=> array( 'category' ),
        'menu_icon'=>'dashicons-list-view',
        'show_in_rest' => true
        )
    );
}

add_action('init', 'Experimentor_Site_Custom_post');
