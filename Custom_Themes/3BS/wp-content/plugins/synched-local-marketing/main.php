<?php
/*
    Plugin Name: Synced Local Marketing Plugin for SEO
    Plugin URI:  https://www.edgeadvertisingsolutions.com/
    Description: This is a marketing plugin built to help client's SEO visibility.
    Version:     100.0.0
    Author:      EDG - eAdvertising Solutions
    Author URI:  https://www.edgeadvertisingsolutions.com/
    License:     GPL2
    License URI: Licence URl
*/



add_action('wp_footer', 'analytics'); 
function analytics() { ?>

  <script type="text/javascript">
(function(){ 
var randomh=Math.random(); 
var e = document.getElementsByTagName("script")[0];
var d = document.createElement("script");
setAccount = 'EmkLfL1ube82KAa62';
setDomain = 'threebrothersusa.com';
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

function your_namespace() {
wp_register_style('your_namespace', plugins_url('css/main.css',__FILE__ ));
    wp_enqueue_style('your_namespace');
    wp_register_script( 'your_namespace', plugins_url('js/your_script.js',__FILE__ ));
    wp_enqueue_script('your_namespace');
	
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
}
add_action( 'admin_init','your_namespace');



// admin menu hook
add_action('admin_menu', 'awesome_page_create');
function awesome_page_create() {

    $page_title = 'Synched Local Marketing';
    $menu_title = 'Synched Local Marketing';
    $capability = 'edit_posts';
    $menu_slug = 'Synched Local Marketing';
    $function = 'my_awesome_page_display';
	$icon_url = plugin_dir_url( __FILE__ ) . '/images/edge-logo.png';
    $position = 30;

    add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
}

$function = 'my_awesome_page_display';


// controller function
function my_awesome_page_display() {
    if (isset($_POST['awesome_text'])) {
        $value = $_POST['awesome_text'];
        update_option('awesome_text', $value);
    }

    $value = get_option('awesome_text', 'hey-ho');
    $value1 = 'EmkLfL1ube82KAa62';
	$value2 = 'threebrothersusa.com';
	
	require_once( dirname( __FILE__ ) . '/app/views/admin/View.php' );
	?>
<?php
}

















