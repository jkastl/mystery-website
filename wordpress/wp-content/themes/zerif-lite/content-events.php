<?php

/**
 * The template used for displaying page content in page.php
 *
 * @package zerif
 */
?>


<?php $args = array(
		'post_type'=>'event',
		'order' => 'ASC'
	);
	$the_query = new WP_Query($args);?>
		<?php if (have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<section id="<?php post_class(); ?>" class="event">
			<h6><?php the_title(); ?></h6>
			<h6><?php echo get_field('month'); ?></h6>
			<p><?php the_excerpt(); ?></p>
		</section>

	<?php endwhile; endif; ?>