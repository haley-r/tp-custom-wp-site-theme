<?php get_header(); ?>

<div class="page-background-image" style="background-image: url(<?php echo get_theme_file_uri('/images/occupy_oakland.jpg'); ?>);">
    <div class="page-background-gradient">
    </div>
</div>

<?php
while (have_posts()) {
    the_post(); ?>
    <h1 class="page-title"><?php the_title(); ?></h1>
        <div class="content-block">
            <?php the_content(); ?>
        </div>
<?php
}
?>

<?php get_footer(); ?>