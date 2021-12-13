<?php

namespace WP_Rplg_Google_Reviews\Includes;

class Post_Types {

    const FEED_POST_TYPE = 'grw_feed';

    public function register() {
        add_action('init', array($this, 'register_post_types'));
    }

    public function register_post_types() {
        $this->register_feed_post_type();
    }

    public function register_feed_post_type() {
        $labels = array(
            'name'                  => _x('Reviews widgets', 'Post Type General Name', 'grw'),
            'singular_name'         => _x('Reviews widget', 'Post Type Singular Name', 'grw'),
            'menu_name'             => __('Reviews widgets', 'grw'),
            'name_admin_bar'        => __('Reviews widget', 'grw'),
            'archives'              => __('Reviews Feed Archives', 'grw'),
            'attributes'            => __('Reviews Feed Attributes', 'grw'),
            'parent_item_colon'     => __('Parent Reviews Feed:', 'grw'),
            'all_items'             => __('Widgets', 'grw'),
            'add_new_item'          => __('Add New Reviews Feed', 'grw'),
            'add_new'               => __('Add Reviews Feed', 'grw'),
            'new_item'              => __('New Reviews Feed', 'grw'),
            'edit_item'             => __('Edit Reviews Feed', 'grw'),
            'update_item'           => __('Update Reviews Feed', 'grw'),
            'view_item'             => __('View Reviews Feed', 'grw'),
            'view_items'            => __('View Reviews Feeds', 'grw'),
            'search_items'          => __('Search Reviews Widgets', 'grw'),
            'not_found'             => __('Not found', 'grw'),
            'not_found_in_trash'    => __('Not found in Trash', 'grw'),
            'featured_image'        => __('Featured Image', 'grw'),
            'set_featured_image'    => __('Set featured image', 'grw'),
            'remove_featured_image' => __('Remove featured image', 'grw'),
            'use_featured_image'    => __('Use as featured image', 'grw'),
            'insert_into_item'      => __('Insert into item', 'grw'),
            'uploaded_to_this_item' => __('Uploaded to this item', 'grw'),
            'items_list'            => __('Reviews Feeds list', 'grw'),
            'items_list_navigation' => __('Reviews Feeds list navigation', 'grw'),
            'filter_items_list'     => __('Filter items list', 'grw'),
        );

        $args = array(
            'label'               => __('Reviews Feed', 'grw'),
            'labels'              => $labels,
            'supports'            => array('title'),
            'taxonomies'          => array(),
            'hierarchical'        => false,
            'public'              => false,
            'show_in_rest'        => false,
            'show_ui'             => true,
            'show_in_menu'        => 'grw',
            'show_in_admin_bar'   => false,
            'show_in_nav_menus'   => false,
            'can_export'          => true,
            'has_archive'         => false,
            'exclude_from_search' => true,
            'publicly_queryable'  => false,
            'capabilities'        => array('create_posts' => 'do_not_allow'),
            'map_meta_cap'        => true,
        );

        register_post_type(self::FEED_POST_TYPE, $args);
    }
}
