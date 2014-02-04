<?php
/*
Template Name: Support Us
*/
get_header(); ?>

<div class="page-header-3">

	<div class="row">
		<div class="large-8 columns">
				<h1 class="entry-title"><?php  the_title(); ?></h1>
		</div>
	</div>

</div>

<div class="content-area">

	<div class="row">

<!-- Row for main content area -->
	<div class="small-12 large-12 columns" role="main">


<div class="row">
	<div class="large-7 columns">

	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="the-excerpt hide">
				<?php the_excerpt(); ?>
			</div>
			
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

	<div class="large-4 large-offset-1 columns donate">
		<a href="#" class="button secondary">Support Us</a>
		<p><small>All donations are currently processed via paypal</small></p>
		<img class="paypal-logo" src="<?php bloginfo('template_url') ?>/img/paypal-logo.png" />
		<hr>
		<a href="#" class="button">Become a volunteer</a>

	</div>
</div><!-- row -->

	</div>
		
	</div><!-- row -->
</div><!-- content-area -->
<?php get_footer(); ?>