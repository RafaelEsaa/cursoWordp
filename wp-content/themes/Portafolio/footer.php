<footer>
    <h1>Footer</h1>
    <?php
        wp_nav_menu(
            array(
                'theme_location' => 'bottom-menu'
            )
        )
    ?>
</footer>
<?php get_footer(); ?>
<?php wp_footer();?>
</body>
</html>