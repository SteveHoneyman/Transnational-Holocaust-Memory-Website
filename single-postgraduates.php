<?php get_header(); ?>

<!--============ Page Content Starts =============-->

<div class="page-header-image col-12 group">
    <img src="<?php bloginfo('template_directory'); ?>/images/rose-mem.jpg" />
</div> 

<div class="page-content temp-height">

    <?php get_template_part('templates/loop', 'cpt__single'); ?>
    
<?php get_footer(); ?>