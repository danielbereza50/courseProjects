<?php 
get_header(); 
?>


<?php  
// bring in the WYSSYWIG content
 $content = apply_filters('the_content', $post->post_content);
 echo $content;

?>


<?php get_footer(); ?>
