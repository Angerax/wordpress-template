<?php
/**
 * The template for displaying the sidebar
 *
 *
 * @package WordPress
 * @subpackage Theme complet
 * @since Theme complet 1.0
 */
?>

<aside id="rightside">
    <div id="first-place">
        <?php dynamic_sidebar('first'); ?>
    </div>
     <div id="second-place">
        <?php dynamic_sidebar('second'); ?>
    </div>
</aside>