<?php 
/*Template Name: Reviews
 * 
 * */
get_header();

global $wpdb;
?>
<script>
   jQuery(document).ready(function(){	
	   
   	var formstatus;
   	
   	jQuery( "label[for='user-submitted-name']" ).html('Name' ); 
   	jQuery( "label[for='user-submitted-email']" ).html('Email' ); 
   	jQuery( "label[for='user-submitted-content']" ).html('Message' ); 
	   
   	jQuery( "#user-submitted-post" ).val('Submit Review' ); 
	   
	   
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
	if (window.location.href.indexOf("success") != -1) {
	jQuery("#submit_review_form").css("display","block");		
}
   });	
</script>
<div>
   <?php 
	if (have_posts()) : 
	while (have_posts()) : the_post(); 
	
   the_content(); 

	endwhile; 
	endif; ?>
</div>

<?php 
 $CurrentPage = get_query_var('paged');  

   $args = array(
       'category_name' => 'Reviews',
       'posts_per_page' => '3',
     'paged' => $CurrentPage
   );

   $arr_posts = new WP_Query( $args );
    
   if ( $arr_posts->have_posts() ) :
       while ( $arr_posts->have_posts() ) :
           $arr_posts->the_post();

           ?>

<div class = "reviewsWrapper">

	<li style="list-style-type: none;">
   <ul>
	   <li class = "postContent" id = "show" style="list-style: none;"><?php 
   echo preg_replace('/<img[^>]+./','',get_the_content());
   
   ?></li>
	   <li class = "postImg" style="list-style: none;">
		   	<?php do_shortcode('[default]');?>
	   </li>
	   <!--<li class = "postImg" style="list-style: none;"><img class = "thePostImg" src="<?php //echo get_post_meta($post->ID, 'user_submit_image', true); ?>" alt = "" title = "Three Brothers Services"/></li>-->

	   <li class = "postContent" id = "hide" style="list-style: none;"><?php 
   echo preg_replace('/<img[^>]+./','',get_the_content());
   
   ?></li>
<div class = "clear"></div>
<li class = "postName" style="list-style: none;">- <?php echo get_post_meta($post->ID, 'user_submit_name', true); ?></li>
	   
	   
<!-- Store the ACF field data in variable -->
<li class = "postField" style="list-style: none;">
	
   <?php 
	$starrating = get_post_meta($post->ID, 'usp_custom_field', true); 
      // print out as stars here
               for ($x = 1; $x <= $starrating; $x++) {
                       echo '<div class = "starz">&bigstar;</div>';
               }
               ?>
	</ul>
   <div class = "clear"></div>
		
</li>
	
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
<div class="specialty">
   <div class="table">
      <div class="tr">
         <a href="/carpentry/">
            <div class="specialtybox bluebg1">
               <div class="txt1">Carpentry</div>
            </div>
         </a>
         <a href="/windows-doors/" style="color: white;">
            <div class="specialtybox bluebg2">
               <div class="txt3">Windows & Doors</div>
            </div>
         </a>
           <a href="/exterior-home-projects/" style="color: white;">
            <div class="specialtybox greenbg2">
               <div class="txt4">Exterior Home Projects</div>
            </div>
         </a>
         <a href="/siding-gutters/" style="color: white;">
            <div class="specialtybox greenbg1">
               <div class="txt1">Siding & Gutters</div>
            </div>
         </a>
         
       <a href="/home-remodeling/" style="color: white;">
            <div class="specialtybox graybg1">
               <div class="txt4">Home Remodeling</div>
            </div>
         </a>
         
      </div>
   </div>
   <div class="servicestxt">
      <a href="/services/">Services</a>          
      <center>
         <hr style="width:20%;margin-top:3%;color:white;">
      </center>
   </div>
</div>





   <div class="thirdSlide">
       <img src = "/wp-content/uploads/2020/02/Three-Brothers-Logo_FINAL.png" />
        <div class="porttxt"><i>View Our Work</i></div>
 
<div class = "btnunderneath">
<button class="btnPort"><a href="../portfolio/" style="color:white;">Portfolio ></a></button></div>
             
         </div>

<div class="thirdSlide1" id = "hide">
              <img src="/wp-content/uploads/2020/02/Three-Brothers-Logo_FINAL.png">
        <div class="porttxt"><i>View Our Work</i></div>
 
<button class="btnPort"><a href="../portfolio/" style="color:white;">See More &gt;</a></button>
             
         </div>

<?php echo do_shortcode('[slick-carousel-slider image_fit = "true" sliderheight = "350" rtl = true" arrow = "false" dots = "false" slidestoshow = "2"]')?>

<?php get_footer();?>