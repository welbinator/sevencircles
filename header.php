<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sevencircles
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'empower-iowa'); ?></a>

        <header id="masthead" class="site-header">
            <div class="container">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'primary-left',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'navbarNavDropdownLeft',
                        'menu_class'      => 'navbar-nav mr-auto',
                        'fallback_cb'     => '',
                        'menu_id'         => 'main-menu',
                        'depth'           => 2,
                        // 'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                    )
                );
                ?>

                <!-- Your site title as branding in the menu -->
                <?php if (!has_custom_logo()) { ?>

                    <?php if (is_front_page() && is_home()) : ?>

                        <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url"><?php bloginfo('name'); ?></a></h1>

                    <?php else : ?>

                        <a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url"><?php bloginfo('name'); ?></a>

                    <?php endif; ?>

                <?php
                } else {
                    the_custom_logo();
                }
                ?>
                <!-- end custom logo -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'underscores'); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- The WordPress Menu goes here -->

                <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'primary-mobile',
                        'container_class' => 'collapse navbar-collapse d-lg-none',
                        'container_id'    => 'navbarNavDropdown',
                        'menu_class'      => 'navbar-nav ml-auto',
                        'fallback_cb'     => '',
                        'menu_id'         => 'main-menu',
                        'depth'           => 2,
                        // 'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                    )
                );
                ?>



                <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'primary-right',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'navbarNavDropdownRight',
                        'menu_class'      => 'navbar-nav ml-auto',
                        'fallback_cb'     => '',
                        'menu_id'         => 'main-menu',
                        'depth'           => 2,
                        // 'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                    )
                );
                ?>

            </div><!-- .container -->
        </header><!-- #masthead -->