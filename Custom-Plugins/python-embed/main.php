<?php
/*
    Plugin Name: Custom code.
    Plugin URI:  https://counselingwise.com
    Description: Added on functionality to this astra child theme. 
    Version:     100.0.0
    Author:      Page 1 Pros
    Author URI:  https://counselingwise.com
    License:     GPL2
    License URI: Licence URl
*/

// Imports
//include (__DIR__.'/includes/another-class.php');

// cd then change the permissions on that directory
// chmod 777 filename.py or 775

add_shortcode( 'python', 'embed_python' );

function embed_python( $attributes )
{
 $data = shortcode_atts(
        [
            'file' => 'main.py'
        ],
        $attributes
    );

    $handle = popen( __DIR__ . '/' . $data['file'] . ' 2>&1', 'r' );
    $read = '';

    while ( ! feof( $handle ) )
    {
        $read .= fread( $handle, 2096 );
    }

    pclose( $handle );

    return $read;

}


// [python] or [python file="main.py"]






