<!DOCTYPE html>
<!-- this auto detects language en -->
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
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
                    <!-- <div class="site-header__util">
                        <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
                        <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
                        <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
                    </div> -->
        </header>