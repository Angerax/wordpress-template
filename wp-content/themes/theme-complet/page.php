<?php
/**
 * The template for displaying the pages
 *
 *
 * @package WordPress
 * @subpackage Theme complet
 * @since Theme complet 1.0
 */
?>

<?php get_header(); ?> <!--appel à l'en-tête-->

<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
    <div id="pages">
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    </div>
<?php endwhile; ?>
<?php endif; ?>

<?php get_sidebar(); ?> <!-- appel à la colonne latérale -->
<?php get_footer(); ?> <!-- appel au pied de page -->