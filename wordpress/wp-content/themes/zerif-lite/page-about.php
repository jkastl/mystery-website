<?php

/*
Template Name: About
*/

/**
 * The template for displaying all pages.

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages

 * and that other 'pages' on your WordPress site will use a

 * different template.

 *

 * @package zerif

 */

get_header(); ?>

<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->



<div id="content" class="site-content">
	<div class="panel">
		<h1 class="container">
			<?php the_field('about-header') ?>
		</h1>
		<div class="container">
			<?php the_field('about-mission_statement') ?>
		</div>
	</div>
	<div class="panel">
		<div class="container">
			<?php the_field('about-video') ?>
		</div>
	</div>
	<div class="panel">
		<h2 class="container">
			<?php the_field('about-story_header') ?>
		</h2>
		<div class="container">
			<?php the_field('about-story_content') ?>
		</div>
	</div>
	<div class="panel">
		<div class="img-responsive">
			<?php $img = get_field('about-story_photo'); echo (!empty($img['url']) ? '<img src="' . $img['url'] . '">' : ''); ?>
		</div>
	</div>
	<div class="panel">
		<h2 class="container">
			<?php the_field('about-program_title') ?>
		</h2>
		<div class="container">
			<?php the_field('about-program_body') ?>
		</div>
	</div>
	<div class="panel">
		<div class="img-responsive">
			<?php $img = get_field('about-program_photo'); echo (!empty($img['url']) ? '<img src="' . $img['url'] . '">' : ''); ?>
		</div>
	</div>
	<div>
		<div class="container">
            <style type="text/css">
                div.emd-container .person-img {
                    padding: 25% !important;
                    width: 25% !important;
                    margin: 0 auto;
                }
                .person-tag {
                    margin: 8px 0;
                    display: inline-block;
                }
            </style>
			<?php while (have_posts()) {
				the_post();
				get_template_part( 'content', 'page' );
			} ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
