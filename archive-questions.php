<?php get_header(); ?>

<div class="content-area">

<div class="row">

<div class="large-10 large-centered columns">


<dl class="accordion" data-accordion="">
  <dd>
    <a href="#panel1b"><i class="fa fa-question-circle"></i> What is your charity status?</a>
    <div id="panel1b" class="content">
      Panel 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
  </dd>

  <dd>
    <a href="#panel2b"><i class="fa fa-question-circle"></i> How can I volounteer for the project?</a>
    <div id="panel2b" class="content">
      Panel 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
  </dd>
  <dd>
    <a href="#panel3b"><i class="fa fa-question-circle"></i> How can I support the project?</a>
    <div id="panel3b" class="content">
      Panel 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
  </dd>
  <dd>
    <a href="#panel4b"><i class="fa fa-question-circle"></i> Where can I find your financial accounts?</a>
    <div id="panel4b" class="content">
      Panel 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
  </dd>

   <dd>
    <a href="#panel5b"><i class="fa fa-question-circle"></i> Who finances the project?</a>
    <div id="panel5b" class="content">
      Panel 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
  </dd>
</dl>



<?php while ( have_posts() ) : the_post(); ?>
				
<h1 class="entry-title"><?php //the_title(); ?></h1>

<div class="entry-content">

<?php // the_content(); ?>



</div><!-- .entry-content -->

<?php endwhile; // end of the loop. ?>


</div>
</div><!-- row -->

</div><!-- content-area -->


		
<?php get_footer(); ?>