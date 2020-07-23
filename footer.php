<!-- custom footer content -->
<footer>
    <?php
    wp_nav_menu(array(
        'theme_location' => 'headerMenuLocation'
    ));
    ?>
    <p>&copy copyright Tim Phillips Law 2020</p>
</footer>
<!-- let wordpress get what it needs for footer -->
<?php wp_footer(); ?>
<!-- close body tag -->
</body>
<!-- close html tag -->

</html>