<?php
/*
    Plugin Name: Smart Slider Animations 
    Plugin URI:  https://www.edgeadvertisingsolutions.com/
    Description: Smart Slider Animations for header-text and sub-text layers.
    Version:     100.0.0
    Author:      EDG - eAdvertising Solutions
    Author URI:  https://www.edgeadvertisingsolutions.com/
    License:     GPL2
    License URI: License URl
*/

include ('includes/animations.php');

function main() {
    $animate = new animations;
    $animate->smart_slider_animations();
}

add_action('wp_head', 'main');

// [animations]
//add_shortcode('animations', 'main');







