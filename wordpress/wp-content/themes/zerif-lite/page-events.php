<?php/** * Template Name: Events */get_header(); ?><div class="clear"></div></header> <!-- / END HOME SECTION  --><div id="content" class="site-content"><div class="container">	<div>		<div id="primary" class="content-area">			<main id="main" class="site-main upcomingevents" role="main">            <div class="panel">				<h1 class="dark-text"><?php the_title() ?></h1>            </div>				<?php get_template_part( 'content', 'events' ); ?>			</main><!-- #main -->		</div><!-- #primary -->	</div></div><!-- .container --><?php get_footer(); ?>