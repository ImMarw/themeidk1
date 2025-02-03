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
                        'menu_class' => 'navbar-nav ms-auto p-4',
                    ));
                    ?>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero bg-light py-5 text-center">
            <div class="container">
                <h1 class="display-4">Welcome to <?php bloginfo('name'); ?></h1>
                <p class="lead">Discover our amazing products and learn more about us.</p>
            </div>
        </section>

        <section id="products" class="py-5">
            <div class="container">
                <h2 class="text-center mb-4">Our Products</h2>
                <div class="row g-4">
                    <?php if (have_posts()):
                        while (have_posts()):
                            the_post(); ?>
                            <div class="col-md-4">
                                <div class="card h-100 shadow-sm">
                                    <?php if (has_post_thumbnail()): ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top"
                                                alt="<?php the_title(); ?>">
                                        </a>
                                    <?php endif; ?>
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <a href="<?php the_permalink(); ?>"
                                                class="text-dark text-decoration-none"><?php the_title(); ?></a>
                                        </h5>
                                        <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; else: ?>
                        <p class="text-center">No products found >:3.</p>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-dark text-light py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center mb-3 mb-md-0">
                    <h5><?php bloginfo('name'); ?></h5>
                    <?php if (has_custom_logo()) {
                        the_custom_logo();
                    } ?>
                </div>
                <div class="col-md-4 text-center mb-3 mb-md-0">
                    <h5>Follow Us</h5>
                    <a href="https://www.instagram.com" class="text-light me-3" target="_blank">Instagram</a>
                    <a href="https://www.facebook.com" class="text-light me-3" target="_blank">Facebook</a>
                    <a href="https://www.discord.com" class="text-light" target="_blank">Discord</a>
                </div>
                <div class="col-md-4 text-center">
                    <h5>Contact Us</h5>
                    <p>123 Street Name, City, Country</p>
                    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>

</html>
