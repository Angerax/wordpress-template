<?php
/*Ajout des emplacements des barres de menus*/
if (function_exists('register_nav_menus')){
register_nav_menus(
array(
    'primary' => 'Menu principal',
    'secondary' => 'Menu secondaire'
));
}

 if ( function_exists('register_sidebar') ){
register_sidebar(array('name'=>'Sidebar',
'id' => 'first',
'name' => 'Premier emplacement',
'description' => 'Premier emplacement des widgets',
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));


register_sidebar(array('name'=>'Sidebar',
'id' => 'second',
'name' => 'Second emplacement',
'description' => 'Second emplacement des widgets',
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
 }

/*Modification du nombre de mot pour l'extrait*/
function wordsExcerpt($length) {
    return 20;
}
add_filter('excerpt_length', 'wordsExcerpt');

/*Affichage pour la fin de l'article de la page de categories*/

function endExcerpt($more){
    return '&nbsp;[&rarr;]';
}
add_filter('excerpt_more', 'endExcerpt');

/*gestion des images à la une*/
add_theme_support('post-thumbnails');

/*
 * Enable support for Post formats.
 * 
 * See: https://codex.wordpress.org/Post_Formats
 */
add_theme_support('post-formats', array(
    'quote',
    'status',
));

?>