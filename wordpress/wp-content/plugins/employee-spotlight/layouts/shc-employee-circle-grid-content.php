<?php global $employee_circle_grid_count;
$ent_attrs = get_option('empslight_com_attr_list');
?>
<?php echo (($employee_circle_grid_count > 1 and ($employee_circle_grid_count % 2 == 0 or $employee_circle_grid_count % 3 == 0)) ? '
<div class="clearfix ' : ''); ?> <?php echo (($employee_circle_grid_count % 2 == 0 and $employee_circle_grid_count != 0) ? 'visible-sm-block' : ''); ?> <?php echo (($employee_circle_grid_count % 3 == 0 and $employee_circle_grid_count != 0) ? 'visible-md-block' : ''); ?> <?php echo (($employee_circle_grid_count % 4 == 0 and $employee_circle_grid_count != 0) ? 'visible-lg-block' : ''); ?> <?php echo (($employee_circle_grid_count > 1 and ($employee_circle_grid_count % 2 == 0 or $employee_circle_grid_count % 3 == 0)) ? '"></div>
' : ''); ?>
<article class="col-md-6 col-sm-6 person">
    <div class="person-thumb in">
        <div class="person-img img-circle" data-backimg="<?php if (get_post_meta($post->ID, 'emd_employee_photo')) {
	echo wp_get_attachment_url(get_post_meta($post->ID, 'emd_employee_photo') [0]);
} ?>"></div>
        <div class="person-tag text-center">
            <span class="person-name"><?php echo get_the_title(); ?></span>
            <br>
        </div>
        <div class="panel-body hidden-xs hidden-sm"><?php echo $post->post_excerpt; ?></div>
    </article>