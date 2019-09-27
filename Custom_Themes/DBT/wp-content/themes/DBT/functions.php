<?php
function register_my_menus() {
    register_nav_menus(array(
						'main-menu' => __('Main Menu'),
						'footer1-menu' => __('Footer1'),
        				'footer2-menu' => __('Footer2'),	 	
						'footer3-menu' => __('Footer3'),
							)
					  );
}
add_action('init', 'register_my_menus');
add_theme_support('post-thumbnails');

////////////////////////// cybersecurity functions ///////////////////////////////

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

# action hook
add_action('wp_head', 'wpb_add_googleanalytics');

function wpb_add_googleanalytics() { 

// break out of PHP

?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128161810-12"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-128161810-12');
</script>

<?php
 // break into PHP

}

function add_theme_scripts() {
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.1', 'all');
    // wp_enqueue_script( 'functions', get_template_directory_uri() . '/functions.js', array (), false, false);
    
	// jQuery
	wp_enqueue_script('jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js');
	
	if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');





// add_filter('', '');
// add_action('', '');
 

add_action('wp_footer', 'analytics'); 
function analytics() { ?>

	<script type="text/javascript">
(function(){ 
var randomh=Math.random(); 
var e = document.getElementsByTagName("script")[0];
var d = document.createElement("script");
setAccount = '';
setDomain = 'www.dbtoftowson.com';
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

function my_login_logo_one() { 
?> 
<style type="text/css"> 
body.login div#login h1 a {
 background-image: url(/wp-content/uploads/2019/04/DBT-Logo-Final-Mark.png); 
padding-bottom: 50px; 
} 
</style>
 <?php 
} 
add_action( 'login_enqueue_scripts', 'my_login_logo_one' );

















