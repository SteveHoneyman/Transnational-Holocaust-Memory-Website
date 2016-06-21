<?php get_header(); ?>

<!--=========== Basic Loop Start ===========-->

<div class="page-header-image col-12 group">
    <img src="<?php bloginfo('template_directory'); ?>/images/rails.jpg" />
</div>

<div class="page-content temp-height">

    <!--<h1>Blog</h1>-->
    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

    <article>
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <?php the_excerpt(); ?>
    </article>      
    
    <?php endwhile; ?>
    <?php endif; ?>
   
      
<!--=========== Basic Loop Fin ===========-->

<?php get_footer(); ?>