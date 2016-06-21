<?php 
/*
Template Name: Projects Page
*/
get_header(); ?>

<!--=========== Basic Loop Start ===========-->

<div class="page-header-image col-12 group">
    <img src="<?php the_field('page_header_image'); ?>" />
</div>

<div class="page-content temp-height">
    
    <?php get_template_part('templates/loop', 'basic'); ?>
      
<!--=========== Basic Loop Fin ===========-->

<?php get_footer(); ?>