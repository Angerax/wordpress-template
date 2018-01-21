<?php
//Template Name: Page simple
//Page sans sidebar, avec une mise en forme spécifique
?>
<?php get_header(); ?><!-- appel à l'en-tête -->
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="simple-page">
    <h2><?php the_title(); ?></h2>
    <div class="my-page">
        <?php the_content(); ?>
    </div>
    
<?php endwhile;?>
<?php endif; ?>
    </div>
<?php get_footer(); ?> <!-- appel au footer -->