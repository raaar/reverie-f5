<?php
/*
Template Name: Full Width
*/
get_header(); ?>

<div class="page-header-3">

	<div class="row">
		<div class="large-8 columns">
				<h1 class="entry-title"><?php  the_title(); ?></h1>
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
		
	</div><!-- row -->
</div><!-- content-area -->
<?php get_footer(); ?>