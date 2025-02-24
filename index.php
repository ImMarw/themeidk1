<?php get_header(); ?>

<div class="container">
    <nav class="breadcrumbs">
        <?php if (function_exists('bcn_display')) { bcn_display(); } ?>
    </nav>
    
    <div class="product-page">
        <div class="product-image">
            <?php if (has_post_thumbnail()) { the_post_thumbnail('large'); } ?>
        </div>
        <div class="product-details">
            <h1 class="product-title"><?php the_title(); ?></h1>
            <span class="product-price"><?php echo get_post_meta(get_the_ID(), '_price', true); ?> Kč</span>
            <div class="product-meta">
                <strong>Výrobce:</strong> <?php the_terms(get_the_ID(), 'product_brand'); ?><br>
                <strong>Kategorie:</strong> <?php the_terms(get_the_ID(), 'product_cat'); ?>
            </div>
            <div class="product-description">
                <?php the_content(); ?>
            </div>
            <button class="add-to-cart">Přidat do košíku</button>
        </div>
    </div>
</div>

<?php get_footer(); ?>
