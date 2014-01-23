<?php
/*
Template Name: Plain
*/
get_header(); ?>



<div class="content-area-1">

	<div class="row">

<!-- Row for main content area -->
	<div class="small-12 large-12 columns" role="main">




	
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

<div class="row">
	<div class="large-12 large-centered columns">
					<form>
					  <div class="row">
					    <div class="small-10 columns">
					      <div class="row">
					        <div class="small-3 columns">
					          <label for="right-label" class="right">Name</label>
					        </div>
					        <div class="small-9 columns">
					          <input type="text" id="right-label" placeholder="Inline Text Input">
					        </div>
					      </div>


					      <div class="row">
					        <div class="small-3 columns">
					          <label for="right-label" class="right">Email</label>
					        </div>
					        <div class="small-9 columns">
					          <input type="text" id="right-label" placeholder="Inline Text Input">
					        </div>
					      </div>


					      <div class="row">
					        <div class="small-3 columns">
					          <label for="right-label" class="right">Subject</label>
					        </div>
					        <div class="small-9 columns">
					          <input type="text" id="right-label" placeholder="Inline Text Input">
					        </div>
					      </div>

					      <div class="row">
					        <div class="small-3 columns">
					          <label for="right-label" class="right">Message</label>
					        </div>
					        <div class="small-9 columns">
						      <textarea placeholder="Your message"></textarea>
					        </div>
					      </div>

					    </div>
					  </div>
					</form>
	</div>


</div>




	</div>
		
	</div><!-- row -->
</div><!-- content-area -->

<div class="content-area-small">
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