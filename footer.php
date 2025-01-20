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
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_class'     => 'list-inline',
                    'container'      => false,
                    'fallback_cb'    => false,
                ));
                ?>
            </div>
            <div class="col-md-4 text-center">
                <h5>Contact Us</h5>
                <p><?php echo get_theme_mod('contact_address', '123 Street Name, City, Country'); ?></p>
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
