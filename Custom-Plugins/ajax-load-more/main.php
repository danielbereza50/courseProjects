<?php
/*
    Plugin Name: Ajax Examples
    Plugin URI:  -
    Description: Ajax load more example with a CPT.
    Version:     100.0.0
    Author:      Daniel Bereza
    Author URI:  -
    License:     GPL2
    License URI: Licence URl
*/

// Imports
//include (__DIR__.'/includes/autofill.php');
//include (__DIR__.'/includes/coupons.php');
//include (__DIR__.'/includes/upsell-offers.php');


add_shortcode('my_ajax_load', 'my_taxonomy');
   function my_taxonomy()
   {
       ob_start();
   ?>
<div class="row load-more-target">
   <?php
       
	  $args = array(
       'post_type' => 'solution',
       'orderby'   => 'title',
       'order' => 'ASC',
	// 'offset' => 2 
       'posts_per_page' => 5, 
    );   
	   
//print_r($args);
	    query_posts($args);
          if (have_posts()):
      
              echo '<div class="row">';
              while (have_posts()):
                  the_post();
      
                   if (has_post_thumbnail())
              {
                  the_post_thumbnail();
                  ?>
   <a href="<?php echo get_permalink(); ?>" title="Category Name"><?php echo the_title(); ?></a>
   <?php
      the_content();
      ?>
   <?php
      }
      endwhile;
      
      echo '</div>';
      
      endif;
      wp_reset_postdata();

      ?>
</div>
<?php global $wp_query;
   if ($wp_query->max_num_pages > 1): ?>
<button id="load-more" class="btn">Load More</button>
<?php
   endif; ?>
<?php
   return ob_get_clean();
}
  
   add_action('wp_ajax_load_more', 'load_more_posts');
   add_action('wp_ajax_nopriv_load_more', 'load_more_posts');
  

   function load_more_posts()
   {
   
   if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'load_more_nonce'))
   {
       exit;
   }
	   
   // error is here
   $args = json_decode(stripslashes($_POST), true);
	  // print_r($args);
	   
	$args = array(
	   'paged' => $_POST['page'] + 1,
       'post_type' => 'solution',
       'orderby'   => 'title',
       'order' => 'ASC',
	// 'offset' => 2 
       'posts_per_page' => 5, 
    );   
	   
   query_posts($args);
   
   if (have_posts()):
    echo '<div class="row">';
       while (have_posts()):
           the_post();
   
           if (has_post_thumbnail())
           {
               the_post_thumbnail();
               ?>
<a href="<?php echo get_permalink(); ?>" title="Category Name"><?php echo the_title(); ?></a>
<?php
   the_content();
   ?>
<?php
   }
   
   endwhile;
   echo '</div>';
  // endif;
	   endif;
   die;
   
   }
   function Zumper_widget_enqueue_script()
   {
   global $wp_query;
   wp_enqueue_script('load-more', get_template_directory_uri() . 'js/core.js', array() , '1.0.0', true);
   
   wp_localize_script('load-more', 'load_more', array(
   'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php',
   'posts' => json_encode($wp_query->query_vars) ,
   'current_page' => get_query_var('paged') ? get_query_var('paged') : 1,
   'max_page' => $wp_query->max_num_pages,
   'nonce' => wp_create_nonce('load_more_nonce')
   ));
   }
   add_action('wp_enqueue_scripts', 'Zumper_widget_enqueue_script');
   
   add_action('wp_head', 'smooth_scroll');
   function smooth_scroll()
   {
   ?>
<script>
   jQuery( document ).ready(function() {
   jQuery('#load-more').click(function(){
           var button = jQuery(this),
               data = {
                   'action': 'load_more',
                   'query': load_more.posts,
                   'page' : load_more.current_page,
                   'nonce': load_more.nonce
               };
   
           jQuery.ajax({
               url : load_more.ajaxurl,
               data : data,
               type : 'POST',
               beforeSend : function ( xhr ) {
                   button.text('Loading...');
               },
               success : function( data ){
                   if( data ) {
   
                       //reset button text
                       button.text( 'Load More' );
   
                       //append new data
                       jQuery('.load-more-target').append(data);
   
                       load_more.current_page++;
                       if ( load_more.current_page == load_more.max_page )
                           button.remove();
   
                   } else {
                       button.remove();
                   }
               }
           });
       }); 
   });
   
</script>
<?php
}

