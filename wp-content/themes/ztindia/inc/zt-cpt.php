<?php 
if ( !class_exists( 'zt_service_post_type' ) ){
    class zt_service_post_type{
        public function __construct(){
            add_action( 'init', array( $this, 'register_service_post_type' ) );
        }

        public function register_service_post_type(){
            // labels
                $labels = array(
                    'name'                  => _x( 'Services', 'Post type general name', 'ztindia' ),
                    'singular_name'         => _x( 'Service', 'Post type singular name', 'ztindia' ),
                    'menu_name'             => _x( 'Services', 'Admin Menu text', 'ztindia' ),
                    'name_admin_bar'        => _x( 'Service', 'Add New on Toolbar', 'ztindia' ),
                    'add_new'               => __( 'Add New', 'ztindia' ),
                    'add_new_item'          => __( 'Add New Service', 'ztindia' ),
                    'new_item'              => __( 'New Service', 'ztindia' ),
                    'edit_item'             => __( 'Edit Service', 'ztindia' ),
                    'view_item'             => __( 'View Service', 'ztindia' ),
                    'all_items'             => __( 'All Services', 'ztindia' ),
                    'search_items'          => __( 'Search Services', 'ztindia' ),
                );
             
                $args = array(
                    'labels'             => $labels,
                    'public'             => true,
                    'publicly_queryable' => true,
                    'show_ui'            => true,
                    'show_in_menu'       => true,
                    'query_var'          => true,
                    'rewrite'            => array( 'slug' => 'book' ),
                    'capability_type'    => 'post',
                    'has_archive'        => true,
                    'hierarchical'       => false,
                    'menu_position'      => null,
                    'supports'           => array( 'title', 'thumbnail', 'excerpt' ),
                );
             
                register_post_type( 'service', $args );
        }
    }
    new zt_service_post_type();
}