<?php
/*
Template Name: Full Width
*/
get_header(); ?>

<div class="page-header-3">

	<div class="row">
		<div class="large-8 columns">
				<h1><?php  the_title(); ?></h1>

				<!--
				<div class="header-strap hide">
					<p><?// php the_excerpt(); ?></p>
				</div>
				-->
		</div>
	</div>

</div>

<div class="content-area two-columns">

	<div class="row">

<!-- Row for main content area -->
	<div class="small-12 large-12 columns" role="main">



	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			
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
		
	</div><!-- row -->
</div><!-- content-area -->

<div class="row">
	<div class="large-12 columns">
	  <div class="divider-title">
	    <h2>We currently provide:</h2>
	  </div>
	</div>
</div>

<div class="content-image-row">

	<ul>

	<li>
		<img src="<?php bloginfo('template_url') ?>/img/placeholders/class.jpg" />
		<div class="hover-state">
			<i class="fa fa-play"></i>
		</div>
	</li>
	
	<li>
		<img src="<?php bloginfo('template_url') ?>/img/placeholders/kids.jpg" />
		<div class="hover-state">
			<i class="fa fa-play"></i>
		</div>	
	</li>
	

	<li>
		<img src="<?php bloginfo('template_url') ?>/img/placeholders/class-2.jpg" />
		<div class="hover-state">
			<i class="fa fa-play"></i>
		</div>
	</li>
	

	<li>
		<img src="<?php bloginfo('template_url') ?>/img/placeholders/brufut-sewing-mom.jpg" />
		<div class="hover-state">
			<i class="fa fa-play"></i>
		</div>
	</li>
	

	<li>
		<img src="<?php bloginfo('template_url') ?>/img/placeholders/student.jpg" />
		<div class="hover-state">
			<i class="fa fa-play"></i>
		</div>	
	</li>

	</ul>
</div>


<div class="content-area-quote">

	<div class="flexslider quote-slider">
	  <ul class="slides">
	    <li>
			<blockquote>
This is a testimonial by one of our friends. Testimonials are a powerful way to communicate feedback to people viewing the website. 
This is a testimonial by one of our friends. 

			</blockquote>

			<div class="signature">Mustapha</div>
			<div class="signature-extra">Project founder</div>
	    </li>
	    <li>
	    	<blockquote>
This is a testimonial by one of our friends. Testimonials are a powerful way to communicate feedback to people viewing the website. 
This is a testimonial by one of our friends. 

			</blockquote>

			<div class="signature">Ibrahima Danjo</div>
			<div class="signature-extra">Project founder</div>
	    </li>
	    <li>
			<blockquote>
This is a testimonial by one of our friends. Testimonials are a powerful way to communicate feedback to people viewing the website. 
This is a testimonial by one of our friends. 

			</blockquote>

			<div class="signature">Bakaramo Jerju</div>
			<div class="signature-extra">Project founder</div>
	    </li>
	  </ul>
	</div>

</div>
<?php get_footer(); ?>