

<!--=========== Loop Start ===========-->

<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

    <section class="cpt-single group"> 
        <article class="group">
            <header>   
                <h1 class="cpt-single-title"><?php the_title(); ?></h1>
            </header>
                <?php the_post_thumbnail(); ?>
                <?php the_content(); ?>
        </article>
    </section>    

<?php endwhile; ?>
<?php endif; ?>    

<!--=========== Loop Fin ===========-->

