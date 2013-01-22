<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
get_header();
?>
<div class="singular">
    <div id="primary" class="showcase">
        <div id="content" role="main">
            <h1 class="entry-title">Videos</h1>
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="video-thumb">
                    <?php if (has_post_thumbnail()) { ?>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('vimeo-thumb'); ?></a>
                    <?php } else { ?>
                        <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/missing-video.jpg" alt="News Item" /></a>
                    <?php } ?>
                    </div>
                    <div class="video-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                </article><!-- #post-<?php the_ID(); ?> -->
            <?php endwhile; // end of the loop. ?>

        </div><!-- #content -->
    </div><!-- #primary -->
</div>
<?php get_footer(); ?>
