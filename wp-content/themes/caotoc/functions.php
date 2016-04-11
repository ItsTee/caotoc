<?php

//include('widget/widget.php');
if (!function_exists('PG_Foundation_Walker14102015_setup')) :

    function PG_Foundation_Walker14102015_setup() {

        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         */
        load_theme_textdomain('PG_Foundation_Walker14102015', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         */
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(825, 510, true);

        // Add menus.
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'PG_Foundation_Walker14102015'),
            'social' => __('Social Links Menu', 'PG_Foundation_Walker14102015'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ));

        /*
         * Enable support for Post Formats.
         */
        add_theme_support('post-formats', array(
            'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
        ));
    }

endif; // PG_Foundation_Walker14102015_setup

add_action('after_setup_theme', 'PG_Foundation_Walker14102015_setup');


if (!function_exists('PG_Foundation_Walker14102015_init')) :

    function PG_Foundation_Walker14102015_init() {


        // Use categories and tags with attachments
        register_taxonomy_for_object_type('category', 'attachment');
        register_taxonomy_for_object_type('post_tag', 'attachment');

        /*
         * Register custom post types. You can also move this code to a plugin.
         */
        /* Pinegrow generated Custom Post Types Begin */

        /* Pinegrow generated Custom Post Types End */

        /*
         * Register custom taxonomies. You can also move this code to a plugin.
         */
        /* Pinegrow generated Taxonomies Begin */

        /* Pinegrow generated Taxonomies End */
    }

endif; // PG_Foundation_Walker14102015_setup

add_action('init', 'PG_Foundation_Walker14102015_init');


if (!function_exists('PG_Foundation_Walker14102015_widgets_init')) :

    function PG_Foundation_Walker14102015_widgets_init() {

        /*
         * Register widget areas.
         */
        /* Pinegrow generated Register Sidebars Begin */

        /* Pinegrow generated Register Sidebars End */
    }

    add_action('widgets_init', 'PG_Foundation_Walker14102015_widgets_init');
endif; // PG_Foundation_Walker14102015_widgets_init

/*
 * Tạo sidebar cho theme
 */
$sidebar = array(
    'name' => __('Main Sidebar', 'caotoc'),
    'id' => 'main-sidebar',
    'description' => 'Main sidebar for Caotoc site',
    'class' => 'main-sidebar',
    'before_title' => '<h3 class="widgettitle">',
    'after_sidebar' => '</h3>'
);
register_sidebar($sidebar);

if (!function_exists('PG_Foundation_Walker14102015_customize_register')) :

    function PG_Foundation_Walker14102015_customize_register($wp_customize) {
        // Do stuff with $wp_customize, the WP_Customize_Manager object.

        /* Pinegrow generated Customizer Controls Begin */

        /* Pinegrow generated Customizer Controls End */
    }

    add_action('customize_register', 'PG_Foundation_Walker14102015_customize_register');
endif; // PG_Foundation_Walker14102015_customize_register


if (!function_exists('PG_Foundation_Walker14102015_enqueue_scripts')) :

    function PG_Foundation_Walker14102015_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

        wp_deregister_script('modernizr');
        wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js', false, null, false);

        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', get_template_directory_uri() . '/js/vendor/jquery.js', false, null, true);

        wp_deregister_script('foundation');
        wp_enqueue_script('foundation', get_template_directory_uri() . '/js/foundation.min.js', false, null, true);

        wp_deregister_script('foundation_init');
        wp_enqueue_script('foundation_init', get_template_directory_uri() . '/js/foundation_init.js', false, null, true);

        /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

        wp_deregister_style('foundation');
        wp_enqueue_style('foundation', get_template_directory_uri() . '/css/foundation.css', false, null, 'all');
        wp_deregister_style('foundation-icons');
        wp_enqueue_style('foundation-icons', get_template_directory_uri() . '/css/foundation-icons.css', false, null, 'all');

        wp_deregister_style('style');
        wp_enqueue_style('style', get_bloginfo('stylesheet_url'), false, null, 'all');

        /* Pinegrow generated Enqueue Styles End */
    }

    add_action('wp_enqueue_scripts', 'PG_Foundation_Walker14102015_enqueue_scripts');
endif;

/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */

/* Pinegrow generated Include Resources End */

/* Foundation Navwalker Begin */
require_once "inc/foundation-walker-nav-menu.php";
/* Foundation Navwalker End */

class top_bar_walker extends Walker_Nav_Menu {

    function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) {
        $element->has_children = !empty($children_elements[$element->ID]);
        $element->classes[] = ( $element->current || $element->current_item_ancestor ) ? 'active' : '';
        $element->classes[] = ( $element->has_children ) ? 'has-dropdown not-click' : '';
        parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }

    function start_el(&$output, $object, $depth = 0, $args = array(), $current_object_id = 0) {
        $item_html = '';
        parent::start_el($item_html, $object, $depth, $args);
        $output .= ( $depth == 0 ) ? '<li class="divider"></li>' : '';
        $classes = empty($object->classes) ? array() : (array) $object->classes;
        if (in_array('label', $classes)) {
            $output .= '<li class="divider"></li>';
            $item_html = preg_replace('/<a[^>]*>(.*)<\/a>/iU', '<label>$1</label>', $item_html);
        }
        if (in_array('divider', $classes)) {
            $item_html = preg_replace('/<a[^>]*>( .* )<\/a>/iU', '', $item_html);
        }
        $output .= $item_html;
    }

    function start_lvl(&$output, $depth = 0, $args = array()) {
        $output .= "\n<ul class=\"sub-menu dropdown\">\n";
    }

}

?>