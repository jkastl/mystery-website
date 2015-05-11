<?php
/*
Template Name: Dinner
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
        <div class="img-responsive">
            <?php $img = get_field('dinner-photo'); echo (!empty($img['url']) ? '<img src="' . $img['url'] . '">' : ''); ?>
        </div>
    </div>
    <div class="panel">
        <h2 class="container">
            <?php the_field('dinner-title') ?>
        </h2>
        <div class="container">
            <?php the_field('dinner-body') ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=FAWKKKVTTA4YY" target="_blank"><button class="btn btn-large">Dontation</button></a>
                </div>
                <div class="col-sm-4">
                    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=JL73CDUH8SYTY" target="_blank"><button class="btn btn-large">Dinner Ticket Single</button></a>
                </div>
                <div class="col-sm-4">
                    <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=3X3T8KHG4F8UA" target="_blank"><button class="btn btn-large">Dinner Ticket Table</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="panel">
       <div class="container">
            <div class="row"><?= get_field('dinner-copy-bottom') ?></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>