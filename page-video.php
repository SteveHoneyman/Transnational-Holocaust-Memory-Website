<?php 
/*
Template Name: Video Page
*/
get_header(); ?>

<!--=========== Basic Loop Start ===========-->

<div class="page-header-image col-12 group">
   <img src="<?php the_field('page_header_image'); ?>" />
</div>

<div class="page-content temp-height">
   
    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

        <article class="cpt-container group">
            <h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
            <!--<?php the_post_thumbnail(); ?>-->
            <?php the_content(); ?>
        </article>

    <?php endwhile; ?>
    <?php endif; ?>
      
<!--=========== Basic Loop Fin ===========-->

<?php get_footer(); ?>