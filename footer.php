<!-- Footer -->
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
