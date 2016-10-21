<?php // stylesheet NOT enqueued because it's already written in parent theme's functions.php file 

// function that creates the new custom file type Projects

function create_custom_post_types() {

register_post_type( 'projects',
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


// Adding PT Sans and Cookie to theme
// PT Sans: https://fonts.google.com/specimen/PT+Sans
// Cookie: https://fonts.google.com/specimen/Cookie

function google_fonts() {
    $query_args = array(
        'family' => 'PT+Sans:400,400i,700,700i|Cookie|Lobster'
        );

    wp_register_style( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
            }
            
add_action('wp_enqueue_scripts', 'google_fonts');