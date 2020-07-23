<?php
    get_header();

    while (have_posts()) {
        the_post(); ?>
            <h1 class="page-banner__title"><?php the_title(); ?></h1>
  
                <p>
                    <a href="<?php echo site_url('/blog'); ?>">Blog Home</a>
                    <span class="metabox__main">posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y') ?> in <?php echo get_the_category_list(','); ?></span>
                </p>
   
                <?php the_content() ?>
    
    <?php
    }

    get_footer();
?>



