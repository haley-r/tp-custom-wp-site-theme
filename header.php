<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
    <header>
        <h1 class="site-title">
            <a href="<?php echo site_url(); ?>">
                <span class="law-office-of">Law Office Of</span> 
                Tim Phillips
            </a>
        </h1>
        <nav>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'headerMenuLocation'
            ));
            ?>
        </nav>
    </header>
    