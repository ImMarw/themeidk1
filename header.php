<?php
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="top-bar">
            <div class="container">
                <span class="contact-info">+420 605 166 702</span>
                <nav class="top-menu">
                    <a href="#">O nás</a>
                    <a href="#">Kontakt</a>
                    <a href="#">Můj účet</a>
                </nav>
            </div>
        </div>
        <div class="container main-header">
            <h1 class="logo"><a href="<?php echo home_url(); ?>">Klenoty Vondráček</a></h1>
            <nav class="main-menu">
                <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
            </nav>
            <div class="header-search-cart">
                <input type="text" placeholder="Hledat...">
                <span class="cart-info">0 Kč <i class="cart-icon"></i></span>
            </div>
        </div>
    </header>
