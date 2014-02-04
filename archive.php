<?php get_header(); ?>

<div class="page-header-2">
  <div class="row">
    <div class="large-8 columns">
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </div>
  </div>
</div>

<div class="row">

<div class="large-12 columns">

<?php while ( have_posts() ) : the_post(); ?>
				
<h1 class="entry-title"><?php the_title(); ?></h1>

<div class="entry-content">

<?php the_content(); ?>



</div><!-- .entry-content -->

<?php endwhile; // end of the loop. ?>


</div>
</div><!-- row -->



		
<?php get_footer(); ?>