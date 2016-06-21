<?php get_header(); ?>

<!--=========== Basic Loop Start ===========-->

<div class="page-header-image col-12 group">
    <img src="<?php bloginfo('template_directory'); ?>/images/rails.jpg" />
</div>

<div class="page-content temp-height">
    
    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>

    <?php endwhile; ?>
    <?php endif; ?>

<!--=========== Basic Loop Fin ===========-->

<?php get_footer(); ?>