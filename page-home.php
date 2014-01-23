<?php get_header(); ?>

<!-- Row for main content area -->

<style type="text/css">

 * {
                margin:0;
                padding:0;
        }

        html, body {
                width:100%;
                height:100%;
        }


.foo , .bar, .xx {
                  position:fixed;
                top:0;
                left:0;
                width:100%;
                height:100%;
                background:transparent center no-repeat;
                background-size:cover;
}

        .foo {
background-image: url("<?php bloginfo('template_url') ?>/img/hero/hero-one.jpg");
        }





        .xx	{
               background:#f0f0f0;
                overflow:hidden;
              background-image: url("<?php bloginfo('template_url') ?>/img/hero/hero-one.jpg");
              background-size: cover;
        }

        .box {
                position:absolute;
                left:0;
                height:100%;
                overflow: hidden;
        }

        .box-inner {
			background-image: url("<?php bloginfo('template_url') ?>/img/hero/hero-two.jpg");
			background-size: cover;
			width: 2000px;
			height: 100%;
        }

       .bar {
background-image: url("<?php bloginfo('template_url') ?>/img/hero/hero-three.jpg");
        }
</style>

<!--<div class="foo" data-0="transform:translate(0,0%);" data-100p="transform:translate(0,-100%);"></div>-->

        <div class="xx" data-0="transform:translate(0,0%);" data-100p="transform:translate(0,0%)" data-_box-100p="" data-_box-200p="transform:translate(0,-100%)">
                <div class="box" data-100p="width:0%;" data-_box-100p="width:100%">
                	<div class="box-inner"></div>
                </div>
        </div>

<div class="bar" data-_box-100p="transform:translate(0,100%);" data-_box-200p="transform:translate(0,0%);"></div>

	<!--
<div class="hero-one" data-0="transform:translate(0,0%);" data-100p="transform:translate(0,-100%);" >

	<div class="row">
		<div class="small-12 medium-8 large-6 columns">
			<div class="panel">
				<h2>The Project</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id sollicitudin est.</p>
				<a href="#" class="button">Support Us</a>
			</div>
		</div>
	</div>
	<img class="hero-image" src="<?php bloginfo('template_url') ?>/img/hero/hero-one.jpg" />

</div>
	-->

	<!--
<div class="hero-two" data-_box-100p="transform:translate(0,100%);" data-_box-200p="transform:translate(0,0%);" >

	<div class="row">
		<div class="small-12 medium-8 large-6  large-offset-6 columns">
			<div class="panel">
				<h2>Our aim</h2>
				<p>is to give the youth of Brufut access to knowledge, skills and tools that empower them on their own terms.</p>
				<a href="#" class="button">Learn more</a>
			</div>
		</div>
	</div>
	<img class="hero-image" src="<?php bloginfo('template_url') ?>/img/hero/hero-two.jpg" />

</div>
	-->
<!--
<div class="hero-three">
	<div class="row">
		<div class="small-12 medium-8 large-6 columns">
			<div class="panel">
				<h2>Support Us</h2>
				<p>The BEP is run by a deticated volunteers and a small team of payed staff. Support us with a small donation.</p>
				<a href="#" class="button">Support Us</a>
			</div>
		</div>
	</div>
	<img class="hero-image" src="<?php bloginfo('template_url') ?>/img/hero/hero-three.jpg" />
</div>

-->


<!--

<div class="content-area-1">
	<div class="row">
		<div class="small-12 medium-12 large-4 columns">
			<div class="circle-thumb-wrap">
				<div class="circle-thumb"></div>
				<div class="circle-thumb-content">
					<h3>The team<h3>
					<p class="hide-for-large-up">Read more</p>
				</div>
			</div>
		</div>

		<div class="small-12 medium-12 large-4 columns">
			<div class="circle-thumb-wrap">
				<div class="circle-thumb"></div>
				<div class="circle-thumb-content">
					<h3>The Gambia<h3>
					<p class="hide-for-large-up">Read more</p>
				</div>
			</div>
		</div>

		<div class="small-12 medium-12 large-4 columns">
			<div class="circle-thumb-wrap">
				<div class="circle-thumb"></div>
				<div class="circle-thumb-content">
					<h3>Our aim<h3>
					<p class="hide-for-large-up">Read more</p>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="row">
	<div class="small-12 medium-12 large-12 columns">
		<h1 class="home-title">News</h1>

		<div class="large-list">
			<ul>
				<li>
					<div class="row">
						<div class="large-4 columns">
							<img src="http://placehold.it/600x300" />
						</div>

						<div class="large-8 columns">
							<h3>Title of the latest news item</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et consequat sem. Aenean rhoncus vitae enim vitae malesuada. Ut ac ante malesuada, luctus diam ut, blandit metus. Nulla a justo et velit euismod aliquet eu non leo. Integer urna leo, convallis sed venenatis nec, posuere ut metus.</p>
							<button class="tiny button">Read more</button>
						</div>
					</div>
				</li>

				<li>
					<div class="row">
						<div class="large-4 columns">
							<img src="http://placehold.it/600x300" />
						</div>

						<div class="large-8 columns">
							<h3>Title of the latest news item</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et consequat sem. Aenean rhoncus vitae enim vitae malesuada. Ut ac ante malesuada, luctus diam ut, blandit metus. Nulla a justo et velit euismod aliquet eu non leo. Integer urna leo, convallis sed venenatis nec, posuere ut metus.</p>
							<button class="tiny button">Read more</button>
						</div>
					</div>
				</li>

				<li>
					<div class="row">
						<div class="large-4 columns">
							<img src="http://placehold.it/600x300" />
						</div>

						<div class="large-8 columns">
							<h3>Title of the latest news item</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et consequat sem. Aenean rhoncus vitae enim vitae malesuada. Ut ac ante malesuada, luctus diam ut, blandit metus. Nulla a justo et velit euismod aliquet eu non leo. Integer urna leo, convallis sed venenatis nec, posuere ut metus.</p>
							<button class="tiny button">Read more</button>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>



<div class="content-area-1">
	<div class="row l-home-gallery">
		<div class="small-12 medium-12 large-12 columns">
			<h1>Media</h1>
		</div>

		<div class="large-3 columns">
			<img src="http://placehold.it/300x300" />
		</div>
		<div class="large-3 columns">
			<img src="http://placehold.it/300x300" />
		</div>
		<div class="large-3 columns">
			<img src="http://placehold.it/300x300" />
		</div>
		<div class="large-3 columns">
			<img src="http://placehold.it/300x300" />
		</div>
		<div class="large-3 columns">
			<img src="http://placehold.it/300x300" />
		</div>
		<div class="large-3 columns">
			<img src="http://placehold.it/300x300" />
		</div>
		<div class="large-3 columns">
			<img src="http://placehold.it/300x300" />
		</div>
		<div class="large-3 columns">
			<img src="http://placehold.it/300x300" />
		</div>
	</div>
</div>

-->

<!--
<div class="row">
	<div class="small-12 large-8 columns" id="content" role="main">
	
	<?php ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php reverie_entry_meta(); ?>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
			</footer>
		</article>
	<?php endwhile; ?>

	</div>
</div>
-->
		
<?php get_footer(); ?>