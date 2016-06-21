<?php 
/*
Template Name: Custom Post Type Homepage
*/
get_header(); ?>

<!--=========== custom page content starts ================-->

<div class="page-header-image col-12 group">
    <img src="<?php the_field('page_header_image'); ?>" />
</div> 
    
<div class="page-content">

    <section class="site-intro group">

        <h1>About</h1>

        <div class="intro-text col-8">
            <?php the_field('intro'); ?>
        </div>
            <div class="intro-call-to-action col-4 mobile">
            <h2 class="small-title">Small Title</h2>    
            <img src="<?php the_field('call_to_action'); ?>" class="clear-right"/>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </section>
                
    <section class="featured-content-home group">

        <h1>Featured</h1>
        
        <?php
            $args = array(
            //  'post_type' => 'featured',
                'category_name' => 'featured',
                'order' => 'DSC',
                'posts_per_page' => 4
                );
            $the_query = new WP_Query( $args ); ?>

            <?php if (have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <article class="featured-article-home col-6 group">
                    
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <?php the_post_thumbnail(); ?>
                    <?php the_excerpt(); ?>
                    
                </article>

            <?php endwhile; ?>

            <!-- pagination functions go here -->
            <?php wp_reset_postdata(); ?>  

        <?php endif;?>


    </section>  

<!--========= latest from the blog section starts ==========-->
            
    <section class="recent-posts-home col-12 group">
            
        <h1>Latest from the Blog</h1>

        <?php
            $args = array(
                'category_name' => 'temp',
                'post_type' => 'post',
                'posts_per_page' => 3
                );

            $the_query = new WP_Query( $args ); ?>

            <?php if (have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>"><?php the_title() ;?></a>
                <?php the_excerpt(); ?>
                <a href="<?php echo get_permalink(); ?>"></a>
            
            <?php endwhile; ?>
            <!-- pagination functions go here -->
            <?php wp_reset_postdata(); ?>  

        <?php endif; ?>
            
    </section>  

<!--=========== Basic Loop Fin ===========-->

<?php get_footer(); ?>