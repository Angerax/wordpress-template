<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Theme complet
 * @since Theme complet 1.0
 */
?>

    <?php get_header(); ?>

    <div id="posts">
        <?php
    if (have_posts()) : while(have_posts()) : the_post(); ?>
        <?php if(is_sticky($post_ID)) : ?>
            <div <?php post_class(); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_content(); ?>
                <p><?php comments_number('Aucun commentaire', 'Un seul commentaire', '% commentaires'); ?></p>
            </div>
        <?php else: ?>
            <div class="one-post">
                <h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <?php the_content(); ?>
                <p>
                    <?php comments_number('Aucun commentaire','Un seul commentaire', '% commentaire'); ?>
                </p>
            </div>
            <?php endif; ?>
            <?php endwhile; ?>
            <?php endif; ?>
    </div>

    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
