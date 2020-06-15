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

// debugging
// echo "$variable_name"; WP_DEBUG; var_dump(); print_r(); error_log(); debug_backtrace();

// Imports
// include ('includes/class1.php');
// include ('includes/class1.php');

class test
{
    public function __constructor(){
     // construct stuff here
    }
    
    public function init($args)
    {
    wp_register_style('main_css', plugins_url('css/main.css',__FILE__ ));
    wp_enqueue_style('main_css');
    wp_register_script( 'main_js', plugins_url('js/functions.js',__FILE__ ));
    wp_enqueue_script('main_js');

    // jQuery
    wp_enqueue_script('jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js' );

    add_shortcode('test', array($this, 'do_something'));  

    }// end of init
 
    public function do_something(){
     
    ob_start();

    include('/new-view.php');

    return ob_get_clean();

        //print_r($test);
        //echo "$test";
        return $output;
}// end of do_something

}// end of class

$my_plugin = new test();
$my_plugin -> init();


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















