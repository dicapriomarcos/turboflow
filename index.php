<?php get_header(); ?>
    <main id="tf__main-content" class="tf__main-content"> <!-- start web main -->
        <div class="tf__container"> <!-- start main container -->  
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
        </div> <!-- end main container -->
    </main> <!-- end web main -->
<?php get_footer(); ?>