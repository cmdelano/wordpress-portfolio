<?php // stylesheet NOT enqueued because it's already written in parent theme's functions.php file 

// function that creates the new custom file type Projects

// creating the About post type

function create_custom_post_types() {

register_post_type( 'about',
        array(
           'labels' => array(
                'name' => __( 'Projects' ),
                'singular_name' => __( 'Project' ),
                'add_new' => __( 'Add Projects' ),
   
            
            
            'edit' => __( 'Edit'),
            'edit_item' => ( 'Edit About' ),
            'new_item' => __( 'New About' ),
            'view' => __( 'View About' ),
            'view_item' => __( 'View About' ),
            'search_items' => __ ( 'Search About'),
            'not_found' => __( 'No About Found'),
            'parent' => __( 'Parent About' ),
            'menu_position' => ('Menu About'),
                ),
            
            'public' => true,
            'show_ui' => true,
            'has_archive' => true,
            'hierarchical' => true,
            'menu_order' => true,
            'rewrite' => array( 'slug' => 'projects' ),
            'taxonomies' => array ( 'post_tag', 'category'),
            'supports' => array ('editor','title','author','thumbnail','excerpt','comments', 'page-attributes'),
           
 )
);  
}

// Hooks the custom post type function up to the theme
add_action( 'init', 'create_custom_post_types' );