<?php get_header();

while (have_posts()) {
    the_post(); ?>
    
    <!-- get the title of the page and put it at the top -->
    <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <!-- this content comes from the wp admin in-browser -->
        <?php the_content(); ?>
<?php
}
?>

<?php get_footer(); ?>