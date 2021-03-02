<?php
/*
    Plugin Name: Slider - Lightbox
    Plugin URI:  https://www.edgeadvertisingsolutions.com/
    Description: Slider - Lightbox plugin that was never finished
    Version:     100.0.0
    Author:      EDG eAdvertising Solutions
    Author URI:  https://www.edgeadvertisingsolutions.com/
    License:     GPL2
    License URI: Licence URl
*/

# These are the breakpoints, use these to print out variable values for plugin and theme files
# Manual Testing
# echo "$variable_name"; WP_DEBUG; var_dump(); print_r(); error_log(); debug_backtrace();
# TDD : https://slides.com/jlopezmo/test-driven-development-in-wordpress#/

// Imports
include ('includes/slider.php');

function main() {
	
	// register and enqueue CSS
	wp_register_style( 'main', plugin_dir_url( __FILE__ ) . 'css/main.css', false );
	wp_enqueue_style( 'main' );
	
    # instatiate an object from any class
    $object1 = new slider;

    $object1->printSlider();
    # Call any function
}

add_shortcode('slider', 'main');

#<?php echo do_shortcode('[form]');

?>