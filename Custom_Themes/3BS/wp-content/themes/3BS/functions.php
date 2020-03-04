<?php

// portfolio of functions / methods (procedural programming) use a plugin for O-O MVC
// there can't be a closing delimited or else throws an error
// https://www.wpbeginner.com/wp-tutorials/25-extremely-useful-tricks-for-the-wordpress-functions-file/

# https://wpexplorer-themes.com/total/docs/action-hooks/
# do_action(), add_action(), remove_action()

add_theme_support('post-thumbnails');
// For nav bar flexibility

function register_my_menus()
  {
  register_nav_menus(array(
    'footer1-menu' => __('Footer1 Menu') ,
    'footer2-menu' => __('Footer2 Menu') ,
    'main-menu' => __('Main Menu')
  ));
  }

add_action('init', 'register_my_menus');

/* For cyber security + the SSL - could of been added via a simple plugin as well

 https://wordpress.org/about/security/
 https://premium.wpmudev.org/blog/wordpress-security-tips/
 https://www.wptron.com/prevent-wordpress-hacking/
 
*/

// remove version from head

remove_action('wp_head', 'wp_generator');

// remove version from rss

add_filter('the_generator', '__return_empty_string');

// remove version from scripts and styles

function shapeSpace_remove_version_scripts_styles($src)
  {
  if (strpos($src, 'ver='))
    {
    $src = remove_query_arg('ver', $src);
    }

  return $src;
  }

add_filter('style_loader_src', 'shapeSpace_remove_version_scripts_styles', 9999);
add_filter('script_loader_src', 'shapeSpace_remove_version_scripts_styles', 9999);

// This line should be excluded: <meta name="generator" content="WordPress 4.9.8" /> form page source

function no_wordpress_errors()
  {
  return 'Something is wrong!';
  }

add_filter('login_errors', 'no_wordpress_errors');

# /?author=1
function bwp_template_redirect()
  {
  if (is_author())
    {
    wp_redirect(home_url());
    exit;
    }
  }

add_action('template_redirect', 'bwp_template_redirect');


////////////////////////////////////////////////////////////////


// Include the Google Analytics Tracking Code (ga.js)
// @ https://developers.google.com/analytics/devguides/collection/gajs/

// https://digwp.com/2012/06/add-google-analytics-wordpress/

# action hook
add_action('wp_head', 'wpb_add_googleanalytics');
function wpb_add_googleanalytics() { ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-154961127-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-154961127-3');
</script>

 
<?php } 





# filter hook
# add_filter('#', '#');

// OR include GA tracking code before the closing body tag
// add_action('wp_footer', 'wpb_add_googleanalytics');
// https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
// https://developer.wordpress.org/themes/basics/including-css-javascript/
// To include a bundle of scripts and styles

function add_theme_scripts()
  {
  //wp_enqueue_style('style', get_stylesheet_uri() . '');
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.1', 'all');

  // Is actually a function hook and can be used for styles too with a child theme
  // wp_enqueue_script( '(*)', get_template_directory_uri() . '/(*).js', array (''), false, false);


  // Include CSS / JavaScript file for MyPlugin.
  // https://codex.wordpress.org/Function_Reference/plugin_dir_url
  // wp_enqueue_script( 'custom_jquery', plugins_url('/js/functions.js', __FILE__), array('jquery'), '2.5.1' );
  // wp_enqueue_style( 'new_style', plugins_url('/css/main.css', __FILE__), false, '1.0.0', 'all');

  // bootstrap 4 styles - 
  // https://www.w3schools.com/bootstrap4/default.asp
  // https://www.w3schools.com/bootstrap4/tryit.asp?filename=trybs_default&stacked=h
  //wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');

  // jQuery
  // wp_enqueue_script('jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js' );
  
  // Popper
  // wp_enqueue_script('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' );
    
  // Bootstrap
  // wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' );
  
  // Vue.js
  // wp_enqueue_script( 'vuejs', 'https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.js' );
  
  // Angular.js
  // wp_enqueue_script( 'angularjs', 'https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js' );







  if (is_singular() && comments_open() && get_option('thread_comments'))
    {
    wp_enqueue_script('comment-reply');
    }
  }

// This will trigger the function, similar to add_shortcode();

add_action('wp_enqueue_scripts', 'add_theme_scripts');



function my_login_logo_one() { 
?> 
<style type="text/css"> 
body.login div#login h1 a {
 background-image: url(/wp-content/uploads/2020/02/Three-Brothers-Logo_FINAL.png); 
padding-bottom: 50px; 
	background-size: 300px;
	height: 100px;
	width: 250px;
} 
</style>
 <?php 
} 
add_action( 'login_enqueue_scripts', 'my_login_logo_one' );


// ADD TWO NEW COLUMNS
function ST4_columns_head($defaults) {
    $defaults['first_column']  = 'Star Rating';
    return $defaults;
}
 
function ST4_columns_content($column_name, $post_ID) {
    if ($column_name == 'first_column') {
		$starrating = get_post_meta($post_ID, 'usp_custom_field', true); 
	for ($x = 1; $x <= $starrating; $x++) {
   echo '<div style="float:left; width: 20px">&bigstar;</div>';
       
    }
   
}}

add_filter('manage_posts_columns', 'ST4_columns_head');
add_action('manage_posts_custom_column', 'ST4_columns_content', 10, 2);


function exclude_category($query) {
if ( $query->is_home() ) {
$query->set('cat', '-11');

	
}
return $query;
}
add_filter('pre_get_posts', 'exclude_category');



function autoset_featured() {
	 if( is_page( 63 ) ) {
    global $post;
    $already_has_thumb = has_post_thumbnail($post->ID);
    
		 if (!$already_has_thumb) {
        ?>

 <img src="<?php echo get_template_directory_uri(); ?>/five-star-300x225.jpg"  class = "thePostImg" alt = "Three Brothers Services" title = "Company Logo"/>
<?php

		//$attached_image = //get_children( 
            //"post_parent=$post->ID&post_type=attachment&post_mime_type=image&numberposts=1" 
      //  );
       // if ($attached_image) {
         //   foreach ($attached_image as $attachment_id => $attachment) {
           //     set_post_thumbnail($post->ID, $attachment_id);// the size of the thumbnail is defined in a function above
         //   }
        //}
		
    }
	if ($already_has_thumb) {	 
		echo get_the_post_thumbnail($fpid, 'medium');
	} 
} 
} //end function
add_shortcode('default', 'autoset_featured');

function defer_parsing_of_js( $url ) {
    if ( is_user_logged_in() ) return $url; //don't break WP Admin
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) ) return $url;
    return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );








