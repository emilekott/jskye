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
            <div class="entry-content">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="video-thumb">
                            
                                <?php
                                $filename = 'wp-content/uploads/video_thumb_' . get_the_ID() . '.jpg';
                                $upload_dir = wp_upload_dir();
                                $url = $upload_dir['baseurl'].'/video_thumb_' . get_the_ID() . '.jpg';
                                if (!file_exists($filename)) {
                                    $image = wp_get_image_editor(get_video_thumbnail()); // Return an implementation that extends <tt>WP_Image_Editor</tt>

                                    if (!is_wp_error($image)) {
                                        $image->resize(406, 232, true);
                                        $image->save($filename);
                                    }
                                }
                                ?>


                                <a href="<?php the_permalink(); ?>"><img src="<?php echo $url; ?>"</a>
                            
                        </div>
                        <div class="video-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </div>
                    </article><!-- #post-<?php the_ID(); ?> -->
                <?php endwhile; // end of the loop.   ?>
            </div>
        </div><!-- #content -->
    </div><!-- #primary -->
</div>
<?php get_footer(); ?>
