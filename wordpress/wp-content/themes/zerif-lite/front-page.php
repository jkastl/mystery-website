<?php get_header(); ?>


<?php
if ( get_option( 'show_on_front' ) == 'page' ) {
    ?>
	<div class="clear"></div>

	</header> <!-- / END HOME SECTION  -->

<div id="content" class="site-content">

	<div class="content-left-wrap col-md-9">

		<div id="primary" class="content-area">

			<main id="main" class="site-main" role="main">



			<?php if ( have_posts() ) : ?>



        <?php /* Start the Loop */ ?>

        <?php while ( have_posts() ) : the_post(); ?>



            <?php

            /* Include the Post-Format-specific template for the content.

             * If you want to override this in a child theme, then include a file

             * called content-___.php (where ___ is the Post Format name) and that will be used instead.

             */

            get_template_part( 'content', get_post_format() );

            ?>



        <?php endwhile; ?>



			<?php else : ?>



        <?php get_template_part( 'content', 'none' ); ?>



    <?php endif; ?>



			</main><!-- #main -->

		</div><!-- #primary -->



	</div><!-- .content-left-wrap -->




	<?php
} ?>
	<div class="container" style="text-transform: uppercase;
  position: absolute;
  top: 200px;
  left: 285px;
  width: 700px;
  text-shadow: 3px 3px 1px black;
  color: white;
  z-index: 900;
  font-weight: bold;
  font-size: 42px;
">Guiding the young men of Kansas City's Urban Core</div>
	<div class="video">
		<iframe width="1280" height="720" src="https://www.youtube.com/embed/v0AJplcP3SA?rel=0&controls=0&autoplay=1&showinfo=0&loop=1" frameborder="0" allowfullscreen></iframe>

		<div class="home-cta">
			<a href="/donate" class="btn btn-primary custom-button red-btn">Donate</a>
			<a href="/apply" class="btn btn-primary custom-button green-btn">Apply</a>
		</div>
	</div>

</header> <!-- / END HOME SECTION  -->


<div id="content" class="site-content">


<section class="about-us" id="aboutus">
	<div class="container">


		<!-- SECTION HEADER -->

		<div class="section-header">


			<!-- SECTION TITLE -->

			<h2 class="white-text">Overview</h2>

			<!-- SHORT DESCRIPTION ABOUT THE SECTION -->

			<?php



				$zerif_aboutus_subtitle = get_theme_mod('zerif_aboutus_subtitle',__('Add a subtitle in Customizer, "About us section"','zerif-lite'));


				if( !empty($zerif_aboutus_subtitle) ):


					echo '<h6 class="white-text">';


						echo __($zerif_aboutus_subtitle,'zerif-lite');


    $zerif_aboutus_show = get_theme_mod('zerif_aboutus_show');

				endif;
			?>
		</div><!-- / END SECTION HEADER -->
		<section>
			<h2>Spotlight</h2>
			<hr />
			<?= do_shortcode('[employee_circle_grid filter="attr::emd_employee_featured::is::1"]'); ?>
		</section>
	</div>
</section>
<div class="img-responsive">
	<img src="<?php bloginfo('template_url'); ?>/images/home-image.jpg">
</div>

<section class="upcomingevents" id="upcomingevents">
<?php

	$args = array(
		'post_type'=>'event',
		'order' => 'ASC',
		'posts_per_page'=> 3
	);
	$the_query = new WP_Query($args); ?>
	<div class="container">
		<div class="section-header">
		<h2><a href="/events" class="dark-text">Upcoming Events</a></h2>

			<?php if (have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				<section id="<?php post_class(); ?>" class="event">
					<h6><?php the_title(); ?></h6>
					<h6><?php echo get_field('month'); ?></h6>
					<p><?php the_excerpt(); ?></p>
				</section>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>

	<!-- <section class="our-sponsors" id="sponsors">
		<div class="container">
			<div class="section-header">
				<h2 class="dark-text">Sponsors</h2>
			</div>
		</div>
	</section> -->
<?php

get_footer(); ?>

