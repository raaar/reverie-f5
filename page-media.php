<?php
/*
Template Name: Full Width
*/
get_header(); ?>



<div class="content-area-1">

	<div class="row">

<!-- Row for main content area -->
	<div class="small-12 large-12 columns" role="main">



	<div class="row">
		<div class="small-12 medium-12 large-4 columns">
			<div class="circle-thumb-wrap">
				<div class="circle-thumb"><img src="<?php bloginfo('template_url') ?>/img/placeholder.jpg" /></div>
				<div class="circle-thumb-content">
					<h3><i class="fa fa-picture-o"></i> The construction<h3>
					<p class="hide-for-large-up">Read more</p>
				</div>
			</div>
		</div>

		<div class="small-12 medium-12 large-4 columns">
			<div class="circle-thumb-wrap">
				<div class="circle-thumb"><img src="<?php bloginfo('template_url') ?>/img/placeholder.jpg" /></div>
				<div class="circle-thumb-content">
					<h3><i class="fa fa-picture-o"></i> The Gambia<h3>
					<p class="hide-for-large-up">Read more</p>
				</div>
			</div>
		</div>

		<div class="small-12 medium-12 large-4 columns">
			<div class="circle-thumb-wrap">
				<div class="circle-thumb"><img src="<?php bloginfo('template_url') ?>/img/placeholder.jpg" /></div>
				<div class="circle-thumb-content">
					<h3><i class="fa fa-video-camera"></i> Brufut documentary<h3>
					<p class="hide-for-large-up">Read more</p>
				</div>
			</div>
		</div>


	</div>


	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php // the_title(); ?></h1>
				<?php // reverie_entry_meta(); ?>
			</header>
			<div class="entry-content">
				<?php // the_content(); ?>
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