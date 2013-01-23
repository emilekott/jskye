<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
get_header();
include_once(ABSPATH . WPINC . '/feed.php');
$url = "http://skyeboy.blogspot.com/feeds/posts/default";
//$url ='http://vimeo.com/johnskye/videos/rss';
$rss = fetch_feed($url);
if (!is_wp_error($rss)) : // Checks that the object is created correctly 
    // Figure out how many total items there are, but limit it to 5. 
    $maxitems = $rss->get_item_quantity(5);

    // Build an array of all the items, starting with element 0 (first element).
    $rss_items = $rss->get_items(0, $maxitems);
endif;
?>

<div id="primary" class="showcase">
    <div id="content" role="main">
        <iframe id="blogframe" src="http://skyeboy.blogspot.co.uk/" width="100%" height="6000" scrolling="no" frameborder="0"></iframe>


        <footer class="blog-link">
            <a href="http://skyeboy.blogspot.co.uk/" target="_blank" >Read older items...</a>
        </footer>

    </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>