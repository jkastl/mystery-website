<?php

/**
 * The template used for displaying page content in page.php
 *
 * @package zerif
 */
?> 

<div class="panel">
	<div class="container">
		<?php the_field('events-_lideshow') ?>
	</div>
</div>

<?php $args = array(
		'post_type'=>'event',
		'order' => 'ASC'
	);
	$the_query = new WP_Query($args);?>
		<?php if (have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<section id="<?php post_class(); ?>">
			<h5><?php the_title(); ?></h5>
			<h6><?php echo get_field('month'); ?></h6>
			<p><?php the_content(); ?></p>
		</section>

	<?php endwhile; endif; ?>