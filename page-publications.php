<?php 
/*
Template Name: Publications Page
*/
get_header(); ?>

<!--=========== WP_Query Loop Starts ===========-->

<div class="page-header-image col-12 group">
    <img src="<?php the_field('page_header_image'); ?>" />
</div> 

<div class="page-content">

    <?php get_template_part('templates/loop', 'basic'); ?>

    <?php $args = array(
        'post_type' => 'publication',
        'order' => 'ASC'
        ); 
    $the_query = new WP_Query( $args ); ?>       
             
    <div class="publications">

        <?php if (have_posts () ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <article class="cpt-container group">
            <h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
            <?php the_post_thumbnail(); ?>
            <?php the_content(); ?>
        </article>
                
        <?php endwhile; ?><!-- end of custom query loop -->

        <!-- pagination functions go here -->
        <?php wp_reset_postdata(); ?>   

        <?php endif; ?> 
   
    </div><!-- end publications div -->

<!--======== WP_Query Loop Fin ===========-->

<?php get_footer(); ?>