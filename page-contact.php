<?php
/*
Template Name: Plain
*/
get_header(); ?>


<div class="page-header-2 hide">
	<div class="row">
		<div class="large-8 columns">
				<h1 class="entry-title"><?php  the_title(); ?></h1>
		</div>
	</div>
</div>




<div class="page-header-map" >

	<div class="row">
		<div class="large-8 columns">
				<h1 class="entry-title"><?php  the_title(); ?></h1>
		</div>
	</div>
	
	<div id='map-canvas'></div>
</div>




<div class="content-area">

	<div class="row">

<!-- Row for main content area -->
	<div class="small-12 large-12 columns" role="main">




<div class="hide">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php  the_title(); ?></h1>
				<p>For any enqueries, fill in the form below.</p>
			</header>
			<div class="entry-content">
				<?php  the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>

		</article>
	<?php endwhile; // End the loop ?>
</div>

<div class="row">

	<div class="large-12 columns">
	  <div class="divider-title">
	    <h2>We'd love to hear from you!</h2>
	  </div>
	</div>

	<div class="large-6 columns contact-info border">
		<h2>England</h2>
		<div class="info">Name Surname</div>
		<div class="info"><a href="#"><i class="fa fa-envelope"></i> info@brufuteducationproject.com</a></div>
		<div class="info"><a href="#"><i class="fa fa-phone"></i>+44 (0) 20 3737 9777</a></div>

	</div>

	<div class="large-6 columns contact-info">
		<h2>the Gambia</h2>
		<h4 class="info">Name Surname</h4>
		<!--<div class="info"><a href="#"><i class="fa fa-envelope"></i></a></div>-->
		<div class="info"><a href="#"><i class="fa fa-phone"></i>+44 (0) 20 3737 9777</a></div>
	</div>

</div>




	</div>
		
	</div><!-- row -->
</div><!-- content-area -->


<div class="triangle-divider hide">
	<div class="triangle"></div><div class="triangle"></div><div class="triangle"></div><div class="triangle"></div>
	<div class="triangle"></div><div class="triangle"></div><div class="triangle"></div><div class="triangle"></div>
	<div class="triangle"></div><div class="triangle"></div><div class="triangle"></div><div class="triangle"></div>
	<div class="triangle"></div><div class="triangle"></div><div class="triangle"></div><div class="triangle"></div>
	<div class="triangle"></div><div class="triangle"></div><div class="triangle"></div><div class="triangle"></div>
	<div class="triangle"></div><div class="triangle"></div><div class="triangle"></div><div class="triangle"></div>
	<div class="triangle"></div><div class="triangle"></div><div class="triangle"></div><div class="triangle"></div>
	<div class="triangle"></div><div class="triangle"></div><div class="triangle"></div><div class="triangle"></div>
	<div class="triangle"></div><div class="triangle"></div><div class="triangle"></div><div class="triangle"></div>
	<div class="triangle"></div><div class="triangle"></div><div class="triangle"></div><div class="triangle"></div>
	<div class="triangle"></div><div class="triangle"></div><div class="triangle"></div><div class="triangle"></div>
	<div class="triangle"></div><div class="triangle"></div><div class="triangle"></div><div class="triangle"></div>
	<div class="triangle"></div><div class="triangle"></div><div class="triangle"></div><div class="triangle"></div>
	<div class="triangle"></div><div class="triangle"></div><div class="triangle"></div><div class="triangle"></div>
	<div class="triangle"></div><div class="triangle"></div><div class="triangle"></div><div class="triangle"></div>
	<div class="triangle"></div><div class="triangle"></div><div class="triangle"></div><div class="triangle"></div>
	<div class="triangle"></div><div class="triangle"></div><div class="triangle"></div><div class="triangle"></div>
	<div class="triangle"></div><div class="triangle"></div><div class="triangle"></div><div class="triangle"></div>
	<div class="triangle"></div><div class="triangle"></div><div class="triangle"></div><div class="triangle"></div>
	<div class="triangle"></div><div class="triangle"></div><div class="triangle"></div><div class="triangle"></div>
	<div class="triangle"></div><div class="triangle"></div><div class="triangle"></div><div class="triangle"></div>
	<div class="triangle"></div><div class="triangle"></div><div class="triangle"></div><div class="triangle"></div>
	<div class="triangle"></div><div class="triangle"></div><div class="triangle"></div><div class="triangle"></div>
	<div class="triangle"></div><div class="triangle"></div><div class="triangle"></div><div class="triangle"></div>
	<div class="triangle"></div><div class="triangle"></div><div class="triangle"></div><div class="triangle"></div>



</div>



<div class="hide content-area-small">
	<div class="row">
		<div class="large-12 columns">


				<p>Email: info@brufuteducationproject.com</p>

				<!--UK registered non-profit organisation number: 7363428 -->

				<p><i class="fa fa-phone"></i> <a href="tel:+4420 3737 9777">+44 (0) 20 3737 9777</a>

				<p>
					<a href="http://www.facebook.com/pages/Brufut-Education-Project/110378178994539"><i class="fa fa-facebook"></i></a>
				</p>
				<p>
					<a href="https://twitter.com/BrufutProject"><i class="fa fa-twitter"></i></a>
				</p>
		</div>
	</div>
</div>
<?php get_footer(); ?>