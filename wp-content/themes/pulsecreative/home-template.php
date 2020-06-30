<?php 
/**
 * Template Name: Home 
 */ 
get_header();

echo do_shortcode('[slider]');

$content = apply_filters('the_content', $post->post_content);
echo $content;
get_footer(); 
?>


