<?php get_header(); ?>

<div class="page-background-image" style="background-image: url(<?php echo get_theme_file_uri('/images/occupy_oakland.jpg'); ?>);">
    <div class="page-background-gradient">
    </div>
</div>

<?php
while (have_posts()) {
    the_post(); ?>
    <h1 class="page-title"><?php the_title(); ?></h1>
    <?php
        $thePermalink = get_permalink();
        // if it is a parent page, it will return 0 (it doesn't have a parent)
        // if it is a child page, it will return a # (the id of its parent page)
        $theParent = wp_get_post_parent_id(get_the_ID());
        // if it's the practice areas page (contains /practice-areas in permalink but isn't a subpage)
        // then return the content html differently (just the menu, no 'content') for styling purposes
        if(strstr($thePermalink, '/practice-areas') && $theParent==0){
            wp_nav_menu(array(
                'theme_location' => 'practiceAreasPage'
            ));
        } else {
            ?>
            <div class="content-block">
                <?php the_content(); ?>
            </div>
            <?php
        }
    ?>
<?php
}
?>

<?php get_footer(); ?>