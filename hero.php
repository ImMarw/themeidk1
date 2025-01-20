<!-- Hero Section -->
<section class="hero bg-light py-5 text-center">
    <div class="container">
        <h1 class="display-4">Welcome to <?php bloginfo('name'); ?></h1>
        <p class="lead">Discover our amazing products and learn more about us.</p>
    </div>
</section>

<!-- Product Catalog -->
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
