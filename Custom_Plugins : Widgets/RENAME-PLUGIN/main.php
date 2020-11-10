<?php
/*
    Plugin Name: Standard
    Plugin URI:  //
    Description: BareBones template for standard plugin
    Version:     100.0.0
    Author:      Daniel Bereza 
    Author URI:  //
    License:     GPL2
    License URI: Licence URl
*/

// include ('includes/class1.php');
// include ('includes/class1.php');



function add_my_css_and_my_js_files(){
    wp_enqueue_style( 'main.css', plugins_url('/css/main.css', __FILE__), false, '1.0.0', 'all');
    wp_enqueue_script( 'main_js', plugins_url('/js/functions.js', __FILE__), false, '1.0.0', 'all');
    }
    add_action('wp_enqueue_scripts', "add_my_css_and_my_js_files");



class test
{

    public function __constructor(){
     //$this->init();
    }
    
    public function init()
    {
      add_shortcode('test', array($this, 'do_something'));
    

    // jQuery
    wp_enqueue_script('jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js' );
    }// end of init
 
    public static function do_something(){
     
    ob_start();

    


    return ob_get_clean();
    }

}// end of class

$my_plugin = new test();
$my_plugin->init();


/*

// create an admin page with the data here
add_action('admin_menu', 'awesome_page_create');
function awesome_page_create() {
 
    $page_title = 'Video Slider';
    $menu_title = 'Video Slider';
    $capability = 'edit_posts';
    $menu_slug = 'Video Slider';
    $function = 'my_awesome_page_display';
    $icon_url = 'https://img.icons8.com/dusk/64/000000/chess.png';
    $position = 30;

    add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
}

$function = 'my_awesome_page_display';


function my_awesome_page_display() {
    if (isset($_POST['awesome_text'])) {
        $value = $_POST['awesome_text'];
        update_option('awesome_text', $value);
    }

    $value = get_option('awesome_text', 'test');
    
    require_once( dirname( __FILE__ ) . '/admin/view.php' );
}*/















