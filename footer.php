    <footer>
        <nav>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footerMenuLocation'
            ));
            ?>
        </nav>
        <p>&copy copyright Tim Phillips Law 2020</p>
    </footer>

    <?php wp_footer(); ?>

</body>
</html>