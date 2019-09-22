<?php 
/**
 * Template Name: Home 
 */ 
get_header();?>


<!--Start Coding Here -->

<?php  
// bring in the WYSSYWIG content
$content = apply_filters('the_content', $post->post_content);
echo $content;

?>




<!-- Start of custom block -->
<div class = "">
<div class = "">
</div>  

<div class = "">
	 <img src="" alt="" title = "">
	 <h1></h1> 
	 <strong></strong>
</div>  
</div>
<!-- End of end block -->


<!-- To clear the floats -->
<div class = "clear"></div>







<?php 
   get_footer(); 
?>


