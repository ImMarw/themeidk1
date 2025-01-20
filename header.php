<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm bg-dark">
            <div class="container">
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <?php if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        bloginfo('name');
                    } ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'navbar-nav ms-auto p-4', // Apply Bootstrap's navbar class
                        'container' => 'ul',
                        'container_class' => 'collapse navbar-collapse', // Bootstrap collapsible menu class
                        'container_id' => 'navbarNav', // ID for the collapsible menu
                    ));
                    ?>
                </div>
            </div>
        </nav>
    </header>
