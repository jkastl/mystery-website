<?php

/*
Template Name: Get Involved
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
	    <div class="container form-container">
	    	<h1>
	    		<?php the_field('get-involved_header') ?>
	    	</h1>
			<?php the_field('get-involved_content') ?>
		</div>
	</div>
	<div class="panel khaki-bg">
	<div class="container form-container">
		<h1>
			<?php the_field('donate-header') ?>
		</h1>
			<h3>
			    <?php the_field('donate-paypal_header') ?>
		    </h3>
		    <div>
			    <?php the_field('donate-paypal_content') ?>
            </div>
			<h3>
			    <?php the_field('donate-amazon_header') ?>
		    </h3>
		    <div>
			    <?php the_field('donate-amazon_content') ?>
            </div>
			<h3>
			    <?php the_field('donate-pledge_forms') ?>
		    </h3>
		    <div>
			    <?php the_field('donate-pledge_content') ?>
            </div>
		</div>
		</div>
	<div class="panel">
	<div class="container form-container">
		<h1>
			<?php the_field('volunteer-header') ?>
		</h1>
		<div>
			<h3>
			    <?php the_field('volunteer-individual_header') ?>
		    </h3>
		    <div>
			    <?php the_field('volunteer-individual_content') ?>
            </div>
		</div>
		<div>
			<h3>
			    <?php the_field('volunteer-business_header') ?>
		    </h3>
		    <div>
			    <?php the_field('volunteer-business_content') ?>
            </div>
		</div>
	</div>
	</div>
	<div class="panel khaki-bg">
		<div class="container form-container">
			<?php the_field('ranger-photo') ?>
		</div>
	</div>
	<div class="panel">
	<div class="container form-container">
		<h1>
		    <?php the_field('need-ranger_header') ?>
	    </h1>
		<div>
			<h3>
			    <?php the_field('need-ranger_community_header') ?>
		    </h3>
		    <div>
			    <?php the_field('need-ranger_community_content') ?>
            </div>
		</div>
	</div>
	</div>
	<div class=khaki-bg">
		<div class="container">
			<?php while (have_posts()) {
    the_post();
    get_template_part( 'content', 'page' );
} ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
