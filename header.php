<!DOCTYPE html>
<!-- this auto detects language en -->
<html <?php language_attributes(); ?>>
    <head>
        <!-- this auto detects utf-8 -->
        <meta charset="<?php bloginfo('charset'); ?>">
        <!-- this helps w accessible styling actually be applied, I think -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- this gets the wp admin toolbar when logged in (among other things?) -->
        <?php wp_head(); ?>
    </head>
    <!-- this starts out the body tag, which is closed in footer.php -->
    <!-- it also detects the class of the body -->
    <body <?php body_class() ?>>
        <header>
            <h1>
                <!-- this means the title is a link that goes to the site url -->
                <a href="<?php echo site_url(); ?>">
                    Law Office of Tim Phillips
                </a>
            </h1>
            <nav>
                <p>put header navigation here</p>
            </nav>
            <p>maybe add login/sign up buttons here</p>
        </header>