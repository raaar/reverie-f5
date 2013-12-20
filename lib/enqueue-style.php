<?php
/*********************
Enqueue the proper CSS
if you use Sass.
*********************/
function reverie_enqueue_style()
{

	// foundation stylesheet
	//wp_register_style( 'reverie-foundation-stylesheet', get_template_directory_uri() . '/css/app.css', array(), '' );

	// Register the main style
	wp_register_style( 'stylesheet', get_template_directory_uri() . '/css/style.css', array(), '', 'all' );
    
    global $is_IE;
    if ($is_IE) {
		wp_register_style( 'style-ie8', get_template_directory_uri() . '/css/style-ie8.css', array(), '', 'all' );
    }


//	wp_enqueue_style( 'reverie-foundation-stylesheet' );
	wp_enqueue_style( 'stylesheet' );
	wp_enqueue_style( 'style-ie8' );


}
add_action( 'wp_enqueue_scripts', 'reverie_enqueue_style' );
?>