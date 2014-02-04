<?php
/*
Author: Zhen Huang
URL: http://themefortress.com/

This place is much cleaner. Put your theme specific codes here,
anything else you may wan to use plugins to keep things tidy.

*/

/*
1. lib/clean.php
  - head cleanup
	- post and images related cleaning
*/
require_once('lib/clean.php'); // do all the cleaning and enqueue here

/*
2. lib/enqueue-style.php
    - enqueue Foundation and Reverie CSS
*/
require_once('lib/enqueue-style.php');

/*
3. lib/foundation.php
	- add pagination
*/
require_once('lib/foundation.php'); // load Foundation specific functions like top-bar
/*
4. lib/nav.php
	- custom walker for top-bar and related
*/
require_once('lib/nav.php'); // filter default wordpress menu classes and clean wp_nav_menu markup
/*
5. lib/presstrends.php
    - add PressTrends, tracks how many people are using Reverie
*/
require_once('lib/presstrends.php'); // load PressTrends to track the usage of Reverie across the web, comment this line if you don't want to be tracked

/**********************
Add theme supports
 **********************/
function reverie_theme_support() {
    // Add language supports.
    load_theme_textdomain('reverie', get_template_directory() . '/lang');

    // Add post thumbnail supports. http://codex.wordpress.org/Post_Thumbnails
    add_theme_support('post-thumbnails');
    // set_post_thumbnail_size(150, 150, false);
    add_image_size( 'fd-lrg', 1024, 99999);
    add_image_size( 'fd-med', 768, 99999);
    add_image_size( 'fd-sm', 320, 9999);

    // rss thingy
    add_theme_support('automatic-feed-links');

    // Add post formarts supports. http://codex.wordpress.org/Post_Formats
    add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

    // Add menu supports. http://codex.wordpress.org/Function_Reference/register_nav_menus
    add_theme_support('menus');
    register_nav_menus(array(
        'primary' => __('Primary Navigation', 'reverie'),
        'additional' => __('Additional Navigation', 'reverie'),
        'utility' => __('Utility Navigation', 'reverie')
    ));

    // Add custom background support
    add_theme_support( 'custom-background',
        array(
            'default-image' => '',  // background image default
            'default-color' => '', // background color default (dont add the #)
            'wp-head-callback' => '_custom_background_cb',
            'admin-head-callback' => '',
            'admin-preview-callback' => ''
        )
    );
}
add_action('after_setup_theme', 'reverie_theme_support'); /* end Reverie theme support */

// create widget areas: sidebar, footer
$sidebars = array('Sidebar');
foreach ($sidebars as $sidebar) {
    register_sidebar(array('name'=> $sidebar,
        'before_widget' => '<article id="%1$s" class=" widget %2$s">',
        'after_widget' => '</article>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}
$sidebars = array('Footer');
foreach ($sidebars as $sidebar) {
    register_sidebar(array('name'=> $sidebar,
        'before_widget' => '<div class="large-3 columns"><article id="%1$s" class="panel widget %2$s">',
        'after_widget' => '</article></div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}

// return entry meta information for posts, used by multiple loops.
if(!function_exists('reverie_entry_meta')) :
    function reverie_entry_meta() {
        echo '<span class="byline author">'. __('Written by', 'reverie') .' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .', </a></span>';
        echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. get_the_time('F jS, Y') .'</time>';
    }
endif;



// Add new post type for Recipes
add_action('init', 'questions_init');
function questions_init() 
{
    $questions_labels = array(
        'name' => _x('Questions', 'post type general name'),
        'singular_name' => _x('Question', 'post type singular name'),
        'all_items' => __('All questions'),
        'add_new' => _x('Add new question', 'recipes'),
        'add_new_item' => __('Add new question'),
        'edit_item' => __('Edit question'),
        'new_item' => __('New question'),
        'view_item' => __('View question'),
        'search_items' => __('Search in question'),
        'not_found' =>  __('No questions found'),
        'not_found_in_trash' => __('No questions found in trash'), 
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $questions_labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true, 
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title','editor','author','thumbnail','excerpt','comments','custom-fields'),
        'has_archive' => 'questions'
    ); 
    register_post_type('questions',$args);
}


/* THE EXCERPT -------------------------------
---------------------------------------------*/
add_action('init', 'my_custom_init');
function my_custom_init() {
    add_post_type_support( 'page', 'excerpt' );
}

function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

?>