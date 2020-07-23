<?php
get_header(); ?>

<!-- put what doesn't change based on content here, like "welcome to the blog" -->

<!-- this is the content that is dynamic (populated by whats in the db?)  -->
<div class="container container--narrow page-section">
    <?php
    while (have_posts()) {
        the_post();
    ?>
        <div>
            <!-- heading stuff -->
            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <div class="metabox">
                <p>posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y') ?> in <?php echo get_the_category_list(','); ?></p>
            </div>
            <!-- content -->
            <div>
                <?php the_excerpt(); ?>
                <p><a href="<?php the_permalink(); ?>" class="btn btn--blue">Continue Reading</a></p>
            </div>
        </div>
    <?php
    }
    echo paginate_links();
    ?>
</div>

<?php
get_footer();
?>