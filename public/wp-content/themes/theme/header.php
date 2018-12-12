<?php
/**
 * The template for displaying the header
 *
 * @package Theme
 * @since Theme 2018
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="profile" href="http://gmpg.org/xfn/11">

        <?php if (is_singular() && pings_open(get_queried_object())) : ?>
            <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php endif; ?>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <header class="nav-header">

            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">
                    <div class="nav-header__logo">
                        <a routerLink="/"><img src="<?php echo get_template_directory_uri();?>/images/sis-logo.png"/>
                            <h3 class="web-title">Security And Intelligence Services</h3>
                        </a>
                    </div>
                    <div class="nav-header__right">
                        <div class="mobile-menu" onclick="toggleMenu()">
                            <div class="mobile-menu__node"></div>
                            <div class="mobile-menu__node"></div>
                            <div class="mobile-menu__node"></div>
                        </div>
                        <div class="navigation">
                            <?php
                                $args = array(
                                    'theme_location' => 'nav-top',
                                        'menu_class' => '',
                                        'container_class' => 'wp-menu'
                                );
                                wp_nav_menu($args);
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <div id="mobile-menu" class="menu">

            <div class="menu-left">
                <div class="menu-left-content">
                    <?php
                    $args = array(
                        'theme_location' => 'short-menu',
                        'menu_class' => '',
                        'container_class' => 'wp-menu'
                    );
                    wp_nav_menu($args);
                    ?>
                </div>
            </div>

        </div>

        <main class="main">
