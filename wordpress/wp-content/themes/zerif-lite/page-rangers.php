<?php

/*
Template Name: Rangers
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
	    <div style="background-color: #3daa6a; padding-bottom: 15px;">
	    	<h1>
	    		<?php the_field('rangers-announcement_header') ?>
	    	</h1>
			<?php the_field('rangers-announcement_text') ?>
		</div>
	</div>
	<div class="panel">
		<h1 class="container">
			<?php the_field('rangers-calendar_header') ?>
		</h1>
		<div class="container form-container">
			<?php the_field('rangers-calendar') ?>
		</div>
	</div>
	<div class="panel">
		<div class="container">
			<?php the_field('rangers-slideshow') ?>
		</div>
	</div>
	<div class="panel">
		<h2 class="container">
			<?php the_field('rangers-spotlight_header') ?>
		</h2>
		<div class="container">
            <style type="text/css">
                div.emd-container .person-img {
                    padding: 25% !important;
                    width: 25% !important;
                    margin: 0 auto;
                }
                @media (min-width: 992px) {
                    .emd-view-results .person:first-child {
                        margin-left: 18%;
                    }
                }
            </style>
            <?php
                $dir_url = EMPSLIGHT_COM_PLUGIN_URL;
                wp_enqueue_script('jquery');
                wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
                wp_enqueue_style('employee-circle-grid-cdn', $dir_url . 'assets/css/view-employee-circle-grid.css');
                wp_enqueue_script('employee-circle-grid-js', $dir_url . 'assets/js/employee-circle-grid.js');
                wp_enqueue_style('allview-css', EMPSLIGHT_COM_PLUGIN_URL . '/assets/css/allview.css');
            ?>
			<?php the_field('rangers-spotlight') ?>
		</div>
	</div>
	<div>
		<div class="container">
			<?php while (have_posts()) {
    the_post();
    get_template_part( 'content', 'page' );
} ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
