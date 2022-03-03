<?php
/**
 * Created for CloudGumba Technology.
 * URL: http://cloudgumba.com
 * Author: codemadan, cloudgumba
 * Description: This creates Custom post type named "Notices
 */


/*######## Making custom page for Notices ################*/
function notice_register() {
    $args = array(
        'labels' => array(
            'name' => 'Notice',
            'singular_name' => 'Notice',
            'all_items' => 'All Notice',
            'add_new' => 'Add New Notice',
            'add_new_item' => 'Add New Notice',
            'edit' => 'Edit',
            'edit_item' => 'Edit Notice',
            'new_item' => 'New Notice',
            'view' => 'View',
            'view_item' => 'View Notice',
            'search_items' => 'Search Notice',
            'not_found' => 'No Notice found',
            'not_found_in_trash' => 'No Notice found in Trash',
            'parent' => 'Parent Notice'
        ),
        'public' => true,
        'supports' => array( 'title','thumbnail','editor','page-attributes'),
        'menu_icon' => 'dashicons-pressthis',
        'has_archive' => true
    );
    register_post_type('notices' , $args );
}
add_action('init', 'notice_register');