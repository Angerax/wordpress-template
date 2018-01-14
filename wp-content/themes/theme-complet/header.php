<?php
/**
 * The template for displaying the header
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Theme complet
 * @since Theme complet 1.0
 */
?>

    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>
        <title>
            <?php bloginfo('name'); ?>
            <?php if(is_home() || is_front_page()) : ?> &mdash;
            <?php bloginfo('description'); ?>
            <?php else : ?> &mdash;
            <?php wp_title("",true); ?>
            <?php endif; ?>
        </title>
        <link rel='stylesheet' href="<?php bloginfo('stylesheet_url') ?>" type="text/css" media="screen" />
        <meta http-equiv='Content-type' content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="Generator" content="<?php bloginfo('version'); ?>" />
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
            <div id="content">


                <!--navigation principale-->
                <nav id="primary">
                    <?php wp_nav_menu(array(
                    'sort_column'=>'menu_order',
                    'theme_location'=>'primary')
                    ); ?>
                </nav>

                <!--titre et slogan du site-->
                <div id="slogan-title">
                    <h1>
                        <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
                            <?php bloginfo('name'); ?>
                        </a>
                    </h1>

                    <h2>
                        <?php bloginfo('description'); ?>
                    </h2>
                </div>

                <!--navigation secondaire-->
                <nav id="secondary">
                    <?php wp_nav_menu(array(
                    'sort_column'=>'menu_order',
                    'theme_location'=>'secondary')
                    ); ?>
                </nav>