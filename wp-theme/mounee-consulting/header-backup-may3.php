<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'mounee-consulting' ); ?></a>

    <header id="masthead" class="site-header">
        <nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Main Menu', 'mounee-consulting' ); ?>">
            <div class="container">
                <div class="nav-wrapper">
                    <div class="site-branding">
                        <?php mounee_consulting_logo(); ?>
                    </div>

                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                        <span class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <span class="screen-reader-text"><?php esc_html_e( 'Menu', 'mounee-consulting' ); ?></span>
                    </button>

                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'menu_id'        => 'primary-menu',
                            'menu_class'     => 'nav-menu',
                            'container'      => 'div',
                            'container_class'=> 'nav-menu-wrapper',
                            'fallback_cb'    => false,
                        )
                    );
                    ?>
                </div>
            </div>
        </nav>
    </header>

    <main id="primary" class="site-main">
