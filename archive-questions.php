<?php get_header(); ?>



<div class="page-header-2">

  <div class="row">
    <div class="large-8 columns">
        <h1 class="entry-title">Info</h1>
    </div>
  </div>

</div>



<div class="content-area">


<div class="row hide">


  <div class="large-4 columns">
    <div data-magellan-expedition="fixed" class="fixed-sidebar">
          <dl class="sub-nav">
            <dd data-magellan-arrival="arrival" class="first"><a href="#arrival">Build with HTML</a></dd>
            <dd data-magellan-arrival="destination"><a href="#destination">Arrival 2</a></dd>
          </dl>
    </div>
  </div>

  <div class="large-8 columns">
      <a name="arrival"></a>
      <h3 data-magellan-destination="arrival">Arrival</h3>
      <p>
        Panel 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>

      <a name="destination"></a>
      <h3 data-magellan-destination="destination">Destination</h3>
      <p>
        Panel 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
  </div>

</div>

<div class="row">

<div class="large-10 large-centered columns">

  <div class="divider-title">
    <h2>Frequently asked questions</h2>
  </div>


<dl class="accordion" data-accordion="">
  <dd>
    <a class="accordion-title" href="#panel1b"><i class="fa fa-question-circle"></i> What is your charity status?</a>
    <div id="panel1b" class="content">
      Panel 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
  </dd>

  <dd>
    <a class="accordion-title" href="#panel2b"><i class="fa fa-question-circle"></i> How can I volounteer for the project?</a>
    <div id="panel2b" class="content">
      Panel 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
  </dd>
  <dd>
    <a class="accordion-title" href="#panel3b"><i class="fa fa-question-circle"></i> How can I support the project?</a>
    <div id="panel3b" class="content">
      Panel 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
  </dd>
  <dd>
    <a class="accordion-title" href="#panel4b"><i class="fa fa-question-circle"></i> Where can I find your financial accounts?</a>
    <div id="panel4b" class="content">
      Panel 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
  </dd>

   <dd>
    <a class="accordion-title" href="#panel5b"><i class="fa fa-question-circle"></i> Who finances the project?</a>
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