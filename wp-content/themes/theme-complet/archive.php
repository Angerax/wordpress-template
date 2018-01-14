<?php
/**
 * The template for displaying archives
 *
 *
 * @package WordPress
 * @subpackage Theme complet
 * @since Theme complet 1.0
 */
?>

<?php get_header(); ?> <!-- appel à l'en-tête-->
<div id="archives">
    <h2>Articles publiés au moi de : <?php echo(get_the_date('F y')) ?></h2>
    <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
        <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> - <?php the_date(); ?></p>
        <?php the_excerpt(); ?>
        <?php the_post_thumbnail('thumbnail'); ?>
    <?php endwhile; ?>
</div>
<?php endif; ?>
<?php get_sidebar(); ?> <!--appel à la colonne latérale-->
<?php get_footer(); ?> <!--appel au pied de page-->