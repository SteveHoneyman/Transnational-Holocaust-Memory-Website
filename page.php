<?php get_header(); ?>

<!--=========== Basic Loop Start ===========-->

<div class="page-header-image col-12 group">
    <img src="<?php bloginfo('template_directory'); ?>/images/" />
</div>

<div class="page-content temp-height">
    <code>This is page.php</code><br />    
    
    <?php get_template_part('templates/loop', 'basic'); ?>
      
<!--=========== Basic Loop Fin ===========-->

<?php get_footer(); ?>