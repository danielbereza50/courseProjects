<?php 
   /**
    * Template Name: Reviews
    */ 
   get_header();
   ?>
<?php 
echo do_shortcode('[smartslider3 slider=18]');
?>
<script>
   jQuery(document).ready(function(){	
   	var formstatus;
   	
   	jQuery( "label[for='user-submitted-name']" ).html('Your Name' ); 
   	jQuery( "label[for='user-submitted-email']" ).html('Email' ); 
   	jQuery( "label[for='user-submitted-content']" ).html('Testimonial or Comment' ); 
   	jQuery( "#user-submitted-post" ).val('Submit' ); 
	 jQuery( "label[for='user-submitted-image']" ).html('ADD PICTURE' );   
	   
	   

   	   jQuery( "#createreview" ).click(function() {
   		    if (formstatus == 'open'){
   				jQuery( "#submit_review_form" ).css("display","none");
   		        formstatus = 'closed';
   				
   			}else{
   		    
   	        jQuery( "#submit_review_form" ).css("display","block");
   		    formstatus = 'open';
   				}
   	   });
   	
   	jQuery("#user-submitted-post").hover(function(){
   		var starrating = jQuery( '#user-submitted-custom' ).val();
    		if((starrating != '1') || (starrating != '2') || (starrating != '3') || (starrating != '4') || (starrating != '5') ){
   		   //jQuery( '#user-submitted-custom' ).val('');
   		   }
   		
       }); 	
   	
   });	
</script>



<div class = "content">
   <?php if (have_posts()) :
	
	while (have_posts()) : 
	
	the_post(); ?>
	
   <?php the_content(); ?>
   
	<?php 
	endwhile; 
	endif; ?>
</div>

<div class = "rowWrap">

<div class = "signupnow">
	<div class="sideBox">
		<?php 
 echo do_shortcode('[ninja_form id=4]')
?>
</div>
</div>


<div class = "theWrapper">	
<?php  
   $CurrentPage = get_query_var('paged');  
     
   $args = array(
       'category_name' => 'Reviews',
       'posts_per_page' => '4',
     'paged' => $CurrentPage
   );
   $arr_posts = new WP_Query( $args );
   
   if ( $arr_posts->have_posts() ) :
    // print out the posts here
       while ( $arr_posts->have_posts() ) :
		
           $arr_posts->the_post();
		
           ?>

	

<div class = "reviewsWrapper">
<li>
   <ul>
	   
<li class = "postContent" id = "" style="list-style-type: none;"><?php 
	
   echo preg_replace('/<img[^>]+./','',get_the_content());
   
   ?></li>
	   
<li class = "postImg" style="list-style-type: none;">
	<img class = "thePostImg" style="list-style-type: none;" src="<?php echo get_post_meta($post->ID, 'user_submit_image', true); ?>" />
	   </li>
	   
	   
<!-- Store the ACF field data in variable -->
<li class = "postField" style="list-style-type: none; ">
	
   <?php $starrating = get_post_meta($post->ID, 'usp_custom_field', true); 
      // print out as stars here
               for ($x = 1; $x <= $starrating; $x++) {
                       echo '<div class = "starz">&bigstar;</div>';
               }
               
	
      
               ?></li>
	</ul>
	<li class="postName" style="list-style-type: none;">- Test</li>
	<div class = "dottedline"></div>
   <div class = "clear"></div>

	
<!--<li class = "postContent" id = "hide1" style="list-style-type: none;"><?php 
   //echo preg_replace('/<img[^>]+./','',get_the_content());
   
   ?></li>-->
<div class = "clear"></div>
</div><!-- end of reviews wrapper-->
<?php
   endwhile;
   endif;
   
   // Bottom pagination (pagination arguments)
   
   echo "<div class='page-nav-container1'>" . paginate_links(array(
   'total' => $arr_posts->max_num_pages,
   'prev_text' => __('<'),
   'next_text' => __('>')
   )) . "</div>";
	
   ?>


</div>
</div>
<div class = "clear"></div>

<?php 
   get_footer(); 
   ?>

