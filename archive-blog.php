<?php
/*
Template Name: Blog
*/
get_header(); ?>


<div class="page-header-2">

  <div class="row">
    <div class="large-8 columns">
        <h1 class="entry-title">News</h1>
    </div>
  </div>

</div>



<div class="content-area">
	<div class="row">
		<div class=" small-12 medium-12 large-12 columns">



				<div class="feature-left">
					<div class="image-meta">
						<a href="http://127.0.0.1/bep/uncategorized/brufut-benefit-fundraising-event/">
							<img src="http://placehold.it/800x350">
							<time>2 February, 2014</time>
							<div class="image-meta-over"></div>
						</a>
					</div>

					<div class="feature-content">
						<h3>Content</h3>
						<p>Paragraph</p>
					</div>

					<!--<a class="read-more">Read more</a>-->
				</div>
	

<?php



			$args = array('post_type' => 'post', 
							'offset'=> 0, 
							'category' => 1,
							'posts_per_page' => 3

				);



// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
    echo '<ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">';
	

	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		?>
				<li>

				<div class="archive-panel">
					<div class="image-meta">
						<a href="<?php the_permalink(); ?>">
							<img src="http://placehold.it/500x300" />
							<time><?php the_time('j F, Y'); ?></time>
							<div class="image-meta-over"></div>
						</a>
					</div>

					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<hr>
					<p><?php the_excerpt(); ?></p>

					<!--<a class="read-more">Read more</a>-->
				</div>
				</li>

		<?php
	}
    echo '</ul>';




  

} else {
	// no posts found
}
/* Restore original Post Data */


			wp_reset_postdata();?>




		</div><!-- columns -->
		
		<?php // get_sidebar(); ?>

	</div><!-- row -->
</div><!-- content area -->







		
<?php get_footer(); ?>