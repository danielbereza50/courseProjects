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
    'footer-3-menu' => __('footer 3 Menu') ,
    'footer-2-menu' => __('footer 2 Menu') ,
    'footer-1-menu' => __('footer 1 Menu') ,
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
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128161810-11"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-128161810-11');
</script>

 
<?php } 



add_action('wp_footer', 'analytics'); 
function analytics() { ?>

  <script type="text/javascript">
(function(){ 
var randomh=Math.random(); 
var e = document.getElementsByTagName("script")[0];
var d = document.createElement("script");
setAccount = 'KhRcOg0YFcYUHhSGd';
setDomain = 'imacscontrols.com';
setHost = window.location.host;
oldURL = document.referrer;
wis =  window.location.pathname;
d.src = "https://www.syncedlocalmarketing.com/api/analytics.js?x="+randomh+"";
d.type = "text/javascript"; 
d.async = true;
d.defer = true;
e.parentNode.insertBefore(d,e);})();
</script>
<span id="briteAnalytics"></span>
 
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
 background-image: url(/wp-content/uploads/2019/09/logo.png); 
padding-bottom: 50px; 
width: 200px !important;
	background-size: 200px !important;	
	
	
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
$query->set('cat', '-6');
}
return $query;
}
add_filter('pre_get_posts', 'exclude_category');




//  place in the plugins directory with O-O MVC style
function test() 
{
  // break out of php ?>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->

<script>
   jQuery(document).ready(function(){ 
   
   // make a call to the server
   jQuery.ajax({


    )}
 });  
</script>
<!-- end of the function -->

<?php
  
//https://wordpress.stackexchange.com/questions/233086/how-to-fetch-data-in-wordpress-using-mysqli-or-wpdb/233101

// Connect to mySQL db  
global $wpdb;

// Query to fetch data from database table and storing in $results
// $results = $wpdb->get_results( "SELECT * FROM $table_name");
// echo '$results';

  echo '
  
    ';

}
// add shortcode action hook
add_shortcode('justatest', 'test');



// Start cache buster
// Make JavaScript Asynchronous in Wordpress
// class then function call
//cacheBuster::deferParsing();
//cacheBuster:optimizeImages();

class cacheBuster
{
  // Add filters and actions here
  function deferParsing()
  {
	  
   add_filter( 'script_loader_tag', function ( $tag, $handle ) {    
    
	   if( is_admin() ) {
        return $tag;
    }
	   
    return str_replace( 'src', ' async src', $tag );
}, 10, 2 );
	  
	  function optimizeImages($source_url, $destination_url, $quality){
		  
	$info = getimagesize($source_url);

    if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($source_url);
    elseif ($info['mime'] == 'image/gif') $image = imagecreatefromgif($source_url);
    elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($source_url);

    //save file
    imagejpeg($image, $destination_url, $quality);

    //return destination file
    return $destination_url;
		  
		  
		  $source_img = '/wp-content/uploads/2019/08/IMACS10.jpg';
	  $destination_img = '/wp-content/uploads/2019/08/IMACS10.jpg';
	  
	  $a = optimizeImages($source_img, $destination_img, 50);
	  }
	  
	  
  }
	
	
	
	

}

 $image = imagecreatefromjpeg("/wp-content/uploads/2019/08/IMACS10.jpg");  
    unlink("/wp-content/uploads/2019/08/IMACS10.jpg");
   imagejpeg($image,"/wp-content/uploads/2019/08/IMACS10.jpg",50);



//Optimize images

// cl_image_tag("https://edgwebsitepreview.info/wp-content/uploads/2019/08/IMACS10.jpg", array("quality"=>"auto"))

// End cache buster



//Maximize script execution time
ini_set('max_execution_time', 0);

//Initial settings, Just specify Source and Destination Image folder.
$ImagesDirectory	= 'https://edgwebsitepreview.info/wp-content/uploads/2019/08/IMACS10.jpg/'; //Source Image Directory End with Slash
$DestImagesDirectory	= 'https://edgwebsitepreview.info/wp-content/uploads/2019/08/IMACS10.jpg/'; //Destination Image Directory End with Slash

$NewImageWidth 		= 500; //New Width of Image
$NewImageHeight 	= 500; // New Height of Image
$Quality 		= 80; //Image Quality

//Open Source Image directory, loop through each Image and resize it.
if($dir = opendir($ImagesDirectory)){
	while(($file = readdir($dir))!== false){

		$imagePath = $ImagesDirectory.$file;
		$destPath = $DestImagesDirectory.$file;
		$checkValidImage = @getimagesize($imagePath);

		if(file_exists($imagePath) && $checkValidImage) //Continue only if 2 given parameters are true
		{
			//Image looks valid, resize.
			if(resizeImage($imagePath,$destPath,$NewImageWidth,$NewImageHeight,$Quality))
			{
				echo $file.' resize Success!<br />';
				/*
				Now Image is resized, may be save information in database?
				*/

			}else{
				echo $file.' resize Failed!<br />';
			}
		}
	}
	closedir($dir);
}

//Function that resizes image.
function resizeImage($SrcImage,$DestImage, $MaxWidth,$MaxHeight,$Quality)
{
   	list($iWidth,$iHeight,$type)	= getimagesize($SrcImage);
    $ImageScale          	= min($MaxWidth/$iWidth, $MaxHeight/$iHeight);
    $NewWidth              	= ceil($ImageScale*$iWidth);
    $NewHeight             	= ceil($ImageScale*$iHeight);
    $NewCanves             	= imagecreatetruecolor($NewWidth, $NewHeight);

	switch(strtolower(image_type_to_mime_type($type)))
	{
		case 'image/jpeg':
			$NewImage = imagecreatefromjpeg($SrcImage);
			break;
		case 'image/png':
			$NewImage = imagecreatefrompng($SrcImage);
			break;
		case 'image/gif':
			$NewImage = imagecreatefromgif($SrcImage);
			break;
		default:
			return false;
	}

	// Resize Image
    if(imagecopyresampled($NewCanves, $NewImage,0, 0, 0, 0, $NewWidth, $NewHeight, $iWidth, $iHeight))
    {
        // copy file
        if(imagejpeg($NewCanves,$DestImage,$Quality))
        {
            imagedestroy($NewCanves);
            return true;
        }
    }
}



function store_uploaded_image($html_element_name, $new_img_width, $new_img_height) {

    $target_dir = "https://edgwebsitepreview.info/wp-content/uploads/2019/08/IMACS10.jpg";
    $target_file = $target_dir . basename($_FILES[$html_element_name]["name"]);

    $image = new SimpleImage();
    $image->load($_FILES[$html_element_name]['tmp_name']);
    $image->resize($new_img_width, $new_img_height);
    $image->save($target_file);
    return $target_file; //return name of saved file in case you want to store it in you database or show confirmation message to user

}






// Read the image
$img = imagecreatefromjpeg("https://edgwebsitepreview.info/wp-content/uploads/2019/08/IMACS10.jpg");

// Now resize the image width = 200 and height = 200
$imgresize = imagescale($img, 200, 200);

