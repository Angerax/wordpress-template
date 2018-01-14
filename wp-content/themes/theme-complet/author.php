<?php
/**
 * The template for displaying authors
 *
 *
 * @package WordPress
 * @subpackage Theme complet
 * @since Theme complet 1.0
 */
?>

<?php get_header(); ?> <!-- appel à l'en-tête-->
<?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>

<div id="author">
    <h2><?php echo $curauth->display_name; ?></h2>
    <p>Renseignements biographieque : <?php echo $curauth->description; ?></p>
    <p>Site Web :<a href='<?php echo $curaith->user_url; ?>'><?php echo $curauth->user_url; ?></a></p>
    <p>E-mail : <a href="mailto<?php $curauth->user_email; ?>"><?php echo $curauth->user_email; ?></a></p>
    <h3>Les articles de <?php echo $curauth->first_name; ?><?php echo$curauth->last_name; ?></h3>
    <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
        <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> - <?php the_date(); ?></p>
        <?php the_excerpt(); ?>
    <?php endwhile; ?>
<?php endif; ?>
    </div>
<?php get_sidebar(); ?> <!--appel à la colonne latérale-->
<?php get_footer(); ?> <!--appel au pied de page-->