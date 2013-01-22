<?php
/**
 * Template Name: Full Width
 */
get_header();
?>

<div id="primary" class="showcase">
    <div id="content" role="main">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php the_content(); ?>
                    <?php wp_link_pages(array('before' => '<div class="page-link"><span>' . __('Pages:', 'twentyeleven') . '</span>', 'after' => '</div>')); ?>
                </div><!-- .entry-content -->
                <footer class="entry-meta">
                    <?php edit_post_link(__('Edit', 'twentyeleven'), '<span class="edit-link">', '</span>'); ?>
                </footer><!-- .entry-meta -->
            </article><!-- #post-<?php the_ID(); ?> -->
        <?php endwhile; // end of the loop. ?>

    </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>