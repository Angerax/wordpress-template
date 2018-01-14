<?php
/**
 * The template for displaying the single post
 *
 *
 * @package WordPress
 * @subpackage Theme complet
 * @since Theme complet 1.0
 */
?>
<?php get_header(); ?> <!--appel à l'en-tête-->
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="prev-next">
        <div class="prev-post"><?php previous_post_link(); ?></div>
        <div class="next-post"><?php next_post_link(); ?></div>
</div>
    <h2><?php the_title(); ?></h2>
<?php the_content(); ?>
<p>Les articles et le profil de <?php the_author_posts_link(); ?></p>
<p>Publié le :<?php The_date(); ?></p>
<p>Catégorie(s) : <?php the_category(); ?></p>
<p class="tags"><?php the_tags(); ?></p>
    <div id="comments">
        <h3>Les commentaires de l'article</h3>
        <?php comments_template(); ?>
    </div>
    
<?php endwhile;?>
<?php endif; ?>
<?php get_sidebar(); ?> <!-- appel à la colonne latérale -->
<?php get_footer();?> <!-- appel au pied de page -->

<!--   $format='format';-->
<!--    if(!get_post_format()) {-->
<!--        get_template_part($format)-->
<!--    }-->