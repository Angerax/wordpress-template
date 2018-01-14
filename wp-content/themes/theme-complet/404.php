<?php
/**
 * The template for displaying 404
 *
 *
 * @package WordPress
 * @subpackage Theme complet
 * @since Theme complet 1.0
 */
?>

<?php get_header(); ?> <!-- appel à l'en-tête-->
<div id="error404">
    <h2>Erreur de page</h2>
        <p>Oups, il semble que la page que vous avez demandée n'existe pas !</p>
        <p>Revenez sur la <a href="index.php">page d'accueil</a> du site</p>
</div>

<?php get_sidebar(); ?> <!--appel à la colonne latérale-->
<?php get_footer(); ?> <!--appel au pied de page-->