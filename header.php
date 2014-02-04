<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?> "> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<!--<meta name="viewport" content="width=device-width" />-->
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

	<!--  iPhone Web App Home Screen Icon -->
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-retina.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon.png" />

	<!-- Enable Startup Image for iOS Home Screen Web App -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/mobile-load.png" />

	<!-- Startup Image iPad Landscape (748x1024) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
	<!-- Startup Image iPad Portrait (768x1004) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
	<!-- Startup Image iPhone (320x460) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load.png" media="screen and (max-device-width: 320px)" />
	

	<link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah|Raleway:400,200,800,600' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>


<script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyDsJbWyiyltsWDdWkegctXPe7Cy-l2UTD4">
    </script>
</head>

<body <?php body_class('antialiased'); ?>>
<div class="off-canvas-wrap">
	<div class="inner-wrap">

<div class="top-bar-wrapper">
<div class="fix-me">
<nav class="top-bar">
              <div class="topbar-content">
                    <section class="top-bar-section">
                        <div class="left">
                        	<div class="logo name">
							    <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        	</div>
                        </div>
                    </section>

                    <section class="top-bar-section hide-for-large-up">
                        <a class=" right left-off-canvas-toggle navbar-icon"><i class="fa fa-bars"></i></a>
                    </section>

                    <section class="top-bar-section show-for-large-up">
                      <!--<div class="left"><div id="logo"></div></div>-->
	            		<?php
	        wp_nav_menu( array(
	            'theme_location' => 'primary',
	            'container' => false,
	            'depth' => 0,
	            'items_wrap' => '<ul class="right">%3$s</ul>',
	            'fallback_cb' => 'reverie_menu_fallback', // workaround to show a message to set up a menu
	            'walker' => new reverie_walker( array(
	                'in_top_bar' => true,
	                'item_type' => 'li',
	                'menu_type' => 'main-menu'
	            ) ),
	        ) );
	    				?>
	            	</section>

        </div><!-- topbar content -->
</nav>
</div><!-- fixed -->
</div><!-- top-bar-wrapper -->



	<aside class="left-off-canvas-menu">Stuff</aside>
	<a class="exit-off-canvas"></a>


<!-- Start the main container -->
<div class="container" role="document">
