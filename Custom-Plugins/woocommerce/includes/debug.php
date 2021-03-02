<?php 

add_action( 'wp_enqueue_scripts', 'so_enqueue_scripts' );
add_action('admin_enqueue_scripts','so_enqueue_scripts');
function so_enqueue_scripts(){
  wp_register_script( 
    'ajaxHandle', 
    plugins_url('/js/custom-delivery-charge.js?v=2', __FILE__), 
    array(), 
    false, 
    true 
  );
  wp_enqueue_script( 'ajaxHandle' );
  wp_localize_script( 
    'ajaxHandle', 
    'ajax_object', 
    array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) 
  );
  wp_enqueue_script('custom-google-key','https://maps.googleapis.com/maps/api/js?libraries=places&amp;key=AIzaSyBnSr8fTSW6LPxXyv3EwG6ziLMXeU_R7eI',NULL, true);
}

add_action( 'admin_menu', 'add_delivery_charge_menu' );
function add_delivery_charge_menu()
{
    add_menu_page('Delivery Charge Setting', 'Delivery Charge Setting', 'manage_options', 'add-delivery-chnage.php', 'custom_delivery_charge_function','',30);
}

function delivery_chnage_validation($apikey)  
{
    global $reg_errors;
    $reg_errors = new WP_Error;

    if ( empty( $apikey )) 
    {
    $reg_errors->add('field', 'API key is required');
    }

    if ( is_wp_error( $reg_errors ) ) 
    {
 
        foreach ( $reg_errors->get_error_messages() as $error ) 
        {
         
            echo '<div>';
            echo '<strong>ERROR</strong>:';
            echo $error . '<br/>';
            echo '</div>';
             
        }
 
    }
}
function add_delivery_charge_form( $apikey,$street_address,$zipcode,$country) {
    echo '
    <style>
    div {
        margin-bottom:2px;
    }
     
    input{
        margin-bottom:4px;
    }
    </style>
    ';
 
    echo '<div><h2>Address for delivery calculation<h2></div>
    <form action="' . $_SERVER['REQUEST_URI'] . '" method="post" style="width:50%;float:left">
    
    <div>
     <label for="base_delivery_amount" class="col-md-6" style="min-width: 50%;
    float: left;">Street Address<strong>*</strong></label>
    <input type="text" class="col-md-6" name="street" value="' . ( isset( $street_address ) ? $street_address : null ) . '">
    </div>
    <div>
     <label for="base_delivery_amount" class="col-md-6" style="min-width: 50%;
    float: left;">Zip code<strong>*</strong></label>
    <input type="text" name="zipcode" class="col-md-6" value="' . ( isset( $zipcode ) ? $zipcode : null ) . '">
    </div>
    <div>
     <label for="base_delivery_amount" class="col-md-6" style="min-width: 50%;
    float: left;">Country<strong>*</strong></label>
    <input type="text" name="country" class="col-md-6" value="' . ( isset( $country ) ? $country : null ) . '">
    </div>
    <div>
    <label for="base_delivery_amount" class="col-md-6"  style="min-width: 50%;
    float: left;">Google Maps API Key<strong>*</strong></label>
    <input type="text" name="apikey" class="col-md-6" value="' . ( isset( $apikey ) ? $apikey : null ) . '">
    </div>
    <input type="submit" name="submit" value="Add"/>
    </form>';
}
function complete_delivery_charge() {
    global $reg_errors , $apikey , $street_address , $zipcode , $country;
    if ( 1 > count( $reg_errors->get_error_messages() ) ) {
        $delivery_data = array(
        'apikey'    =>   $apikey,
        'street_address' => $street_address,
        'zipcode' => $zipcode,
        'country' => $country,
        );
        if(!get_option('delievry_setting'))
        {
            add_option('delievry_setting', $delivery_data);
        }
        else 
        {
            update_option('delievry_setting', $delivery_data);
        }
    }
}
function custom_delivery_charge_function() {
    if ( isset($_POST['submit'] ) ) {
        delivery_chnage_validation(
        $_POST['apikey']
        );
         
        // sanitize user form input
        global $apikey,$street_address,$zipcode,$country;
        $apikey   =   $_POST['apikey'];
        $street_address = $_POST['street'];
        $zipcode = $_POST['zipcode'];
        $country = $_POST['country'];
        // call @function complete_registration to create the user
        // only when no WP_error is found
        complete_delivery_charge(
        $apikey,$street_address,$zipcode,$country
        );
    }
    if(get_option('delievry_setting'))
    {
        $form_data = get_option('delievry_setting');
        $apikey = $form_data["apikey"];
        $street_address = $form_data["street_address"];
        $zipcode = $form_data["zipcode"];
        $country = $form_data["country"];
    }
    add_delivery_charge_form(
        $apikey,$street_address,$zipcode,$country
        );
}
/**
 * Display the custom text field
 * @since 1.0.0
 */
function cfwc_create_custom_field() {
    echo '<div class="options_group">';

    woocommerce_wp_select( array( 
                'id'      => '_select_shipping_option', 
                'label'   => __( 'Enable Delivery', 'woocommerce' ), 
                'options' => array(
                'no'         => __( 'No', 'woocommerce' ),
                'yes'  => __( 'Yes', 'woocommerce' )
                )
            ) );

    echo '</div>';
    $hidden = "hidden='true'";
    $v = get_post_meta( get_the_ID(), "_select_shipping_option", true );
    if ($v == "yes") 
    {
        $hidden = "";
    }

    echo '<div class="shipping_enable_option" id="shipping_enable_option" '.$hidden.'>';

         woocommerce_wp_text_input(array(
         'id' => 'base_delivery_charge',
         'label' => __( 'Base Delivery Charge', 'cfwc' ),
         'class' => 'cfwc-custom-field',
         'desc_tip' => true,
         'description' => __( 'Enter the Base delivery charge.', 'ctwc' ),
         ) );

         woocommerce_wp_text_input(array(
         'id' => 'per_mile_charge',
         'label' => __( 'Per Mile Charge', 'cfwc' ),
         'class' => 'cfwc-custom-field',
         'desc_tip' => true,
         'description' => __( 'Enter Per Mile Charge.', 'ctwc' ),
         ) );

         woocommerce_wp_text_input(array(
         'id' => 'start_per_mile_at',
         'label' => __( 'Start Per Mile At', 'cfwc' ),
         'class' => 'cfwc-custom-field',
         'desc_tip' => true,
         'description' => __( 'Distance in miles', 'ctwc' ),
         ) );

         woocommerce_wp_text_input(array(
         'id' => 'max_delivery_dis',
         'label' => __( 'Max Delivery Distance', 'cfwc' ),
         'class' => 'cfwc-custom-field',
         'desc_tip' => true,
         'description' => __( 'Distance in miles', 'ctwc' ),
         ) );
         
         woocommerce_wp_select( array( 
                'id'      => 'calculation_method', 
                'label'   => __( 'Calculation Method', 'woocommerce' ), 
                'options' => array(
                'item'         => __( 'Per Line Item', 'woocommerce' ),
                'quantity'  => __( 'Per Line quantity', 'woocommerce' )
                )
            ) );
         woocommerce_wp_textarea_input( array( 
                'id'      => 'out_message', 
                'label'   => __( 'Out of area message (HTML is allowed)', 'woocommerce' ), 
                'class' => 'cfwc-custom-field',
            ) );


    echo '</div>';
    ?>
    <script type="text/javascript">
    jQuery(function($) {
        var country = $('#_select_shipping_option').val();
        // On change / select a variation
        $('#_select_shipping_option').on( 'change',function(){
            var val = $('#_select_shipping_option').val();
            if (val == "yes") 
            {
                console.log("yes");
                $("#shipping_enable_option").attr("hidden",false);
            }
            if (val == "no") 
            {
                console.log("no");
                $("#shipping_enable_option").attr("hidden",true);
            }
        })

    });
    </script>
    <?php
}
add_action( 'woocommerce_product_options_general_product_data', 'cfwc_create_custom_field' );
function cfwc_save_custom_field( $post_id ) 
{
 $product = wc_get_product( $post_id );
 $title = isset( $_POST['_select_shipping_option'] ) ? $_POST['_select_shipping_option'] : '';
 $product->update_meta_data( '_select_shipping_option', sanitize_text_field( $title ) );
 $product->save();

 $title = isset( $_POST['base_delivery_charge'] ) ? $_POST['base_delivery_charge'] : '';
 $product->update_meta_data( 'base_delivery_charge', sanitize_text_field( $title ) );
 $product->save();


 $title = isset( $_POST['per_mile_charge'] ) ? $_POST['per_mile_charge'] : '';
 $product->update_meta_data( 'per_mile_charge', sanitize_text_field( $title ) );
 $product->save();

 $title = isset( $_POST['start_per_mile_at'] ) ? $_POST['start_per_mile_at'] : '';
 $product->update_meta_data( 'start_per_mile_at', sanitize_text_field( $title ) );
 $product->save();

 $title = isset( $_POST['max_delivery_dis'] ) ? $_POST['max_delivery_dis'] : '';
 $product->update_meta_data( 'max_delivery_dis', sanitize_text_field( $title ) );
 $product->save();
 
 $title = isset( $_POST['calculation_method'] ) ? $_POST['calculation_method'] : '';
 $product->update_meta_data( 'calculation_method', sanitize_text_field( $title ) );
 $title = isset( $_POST['out_message'] ) ? $_POST['out_message'] : '';
 $product->update_meta_data( 'out_message', wp_kses_post( $title ) );
 $product->save();

}
add_action( 'woocommerce_process_product_meta', 'cfwc_save_custom_field' );

// code for a single product calculate distance

add_action( 'woocommerce_before_add_to_cart_button', 'bbloomer_custom_action', 5 );
 
function bbloomer_custom_action() 
{
    $out_of_message = "";
    $id = wc_get_product()->get_id();
    $max_delivery_dis = (int)get_post_meta( $id, 'max_delivery_dis', true);
    $out_of_message = get_post_meta( $id, 'out_message', true);
    if($out_of_message != ""){
      $message = $out_of_message;
    }else{
      $message = 'Your address is outside the delivery area for this product. If you have questions, please call us.';
    }
    $enable_shippings = get_post_meta( $id, '_select_shipping_option', true); 
     
        if ($enable_shippings == "yes") {
            $print = '<p class="single_product_sipping_dis">Your delivery charge is calculated by distance and will be added at checkout</p>';
    $print .= '<table class="single_product_checkout_table" style="width:100%!important">
    <tbody class="product-table-tbody">
        <tr>
            <th colspan="2" style="text-align:center; color:#666; background-color:#eee;">
                Delivery Charge Calculator
            </th>
        </tr>
        <tr>
            <td width="50%">
                <input type="text" id="address_single_product" name="address_single_product" placeholder="Enter Street Address" style="width:100%;margin-bottom:10px;padding:8px">
                <input type="text" id="zip_single_product" name="zip_single_product" placeholder="Enter Zip Code" style="width:100%;margin-bottom:10px;padding:8px">
            </td>
            <td rowspan="2" width="50%" id="distancetext">
                <div class="delivery-charge-result-container">
                <span id="lblIPAddress"></span>
                <div class="modal" style="display: none">
                    <div class="center">
                        <img alt="" src="/wp-content/plugins/custom-delivery-charge/demo_wait.gif" />
                    </div>
                </div>
                <span id="distancetext_result"></span>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <button id="button_calculate_dis">Calculate Delivery</button>
                <input type="hidden" id="single_product_id" name="single_product_id" value='.$id.'>
                <input type="hidden" id="single_product_distance" name="single_product_distance" value="">
                <input type="hidden" id="single_product_charge" name="single_product_charge" value="">          
            </td>
        </tr>
    </tbody>
    </table>
    <!-- The Modal -->
    <div id="myModal" class="myModal">

      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <p>'.$message.'</p>
      </div>

    </div>
        ';
            }else{
                $print = "";
            }
        $print .="<style>
        tr th{
          font-family:'Open Sans',Arial,sans-serif; 
          font-size:14px; 
          font-weight:700;
        -webkit-font-smoothing:antialiased;
        -moz-osx-font-smoothing:grayscale;
        }
            .single_product_checkout_table{
                border:1px solid #eee;background-color: #FFF;margin-top:4px;margin-bottom: 13px;
            }.show_delivery_charge{padding: 11px; text-align:center;}
            button#button_calculate_dis {
            width:100%;
            background-color: #fdb400;
            color: white;
            border: 2px solid #fff;
            padding: 10px;
            font-size:1.2em;
            margin: 0px;
            margin-top:-10px;
            border-radius: 4px;
            transition:all 300ms ease;
            }
            button#button_calculate_dis:hover{cursor:pointer;border-color:#fdb400}
            .product-table-tbody {
        border: 1px solid #eee;
            }
        .delivery-charge-result-container{border: 2px solid #eee; min-height: 150px; border-radius: 10px;}      
    .myModal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }
    #myModal .modal-content {
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 35%;
      margin-top: 149px;
    }
    #myModal .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    #myModal .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }

    .modal
    {
        position: fixed;
        z-index: 999;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        background-color: Black;
        filter: alpha(opacity=60);
        opacity: 0.6;
        -moz-opacity: 0.8;
    }
    .center
    {
        z-index: 1000;
        margin: 300px auto;
        padding: 10px;
        width: 130px;
        background-color: White;
        border-radius: 10px;
        filter: alpha(opacity=100);
        opacity: 1;
        -moz-opacity: 1;
    }
    .center img
    {
        height: 128px;
        width: 128px;
    }
        </style>";  
    echo $print;
}
add_action( "wp_ajax_myaction", "so_wp_ajax_function_callback" );
add_action( "wp_ajax_nopriv_myaction", "so_wp_ajax_function_callback" );
function so_wp_ajax_function_callback()
{  
    //DO whatever you want with data posted
    //To send back a response you have to echo the result!
    if (isset($_POST['address'])  && isset($_POST['zip']) && isset($_POST['id'])) 
    {
         $form_data = get_option('delievry_setting');

        if (isset($form_data["apikey"])) 
        {
            $apiKey = $form_data["apikey"];
        }
        else
        {
            $apiKey = 'AIzaSyBnSr8fTSW6LPxXyv3EwG6ziLMXeU_R7eI';  
        }
        if (isset($form_data["street_address"])) 
        {
            $street_address = $form_data["street_address"];
        }
        else
        {
            $street_address= '2787 Barth Rd, Smiths Creek';  
        }
        if (isset($form_data["zipcode"])) 
        {
            $zipcode = $form_data["zipcode"];
        }
        else
        {
            $zipcode= 'MI 48074';  
        }
        if (isset($form_data["country"])) 
        {
            $country = $form_data["country"];
        }
        else
        {
            $country= 'USA';  
        }

        $addressFrom = $_POST['address'].''.$_POST['zip'];
        $addressTo = $street_address.','.$zipcode.','.$country;
        // Change address format
        $formattedAddrFrom    = str_replace(' ', '+', $addressFrom);
        $formattedAddrTo     = str_replace(' ', '+', $addressTo);
        $url = "https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=".$formattedAddrFrom."&destinations=".$formattedAddrTo."&key=".$apiKey;
       
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, $url );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        $response = curl_exec( $ch );
        if ( $response === false) 
        {
            $curl_result = curl_error( $ch );
            print_r( $curl_result );
        } 
        else 
        {
            header( 'Content-Type: application/json' );
            $data = json_decode($response);
            $val = (int)$data->rows[0]->elements[0]->distance->text;
        }
        $product_id = $_POST['id'];
        $enable_shipping = get_post_meta( $product_id, '_select_shipping_option', true); 
        if ($enable_shipping == "yes") 
        {
           $per_mile_charge = (int)get_post_meta( $product_id, 'per_mile_charge', true);  
           $start_per_mile_at = (int)get_post_meta( $product_id, 'start_per_mile_at', true); 
           $max_delivery_dis = (int)get_post_meta( $product_id, 'max_delivery_dis', true);
           $base_delivery_charge = (int)get_post_meta( $product_id, 'base_delivery_charge', true);
           $s_cost = 0;
           if(isset($val))
           {
            if (isset($base_delivery_charge) && isset($start_per_mile_at) && isset($per_mile_charge)) 
               {
                    if ($val > $max_delivery_dis) 
                    {
                      $re['text'] = "Delivery not available";
                      $re['dis'] = "0"; 
                      $re['charge'] = "null";
                    }
                    else
                    {
                      if ($val > $start_per_mile_at) 
                        {
                            $s_cost = ($val - $start_per_mile_at)* $per_mile_charge;
                            $s_cost = $s_cost + $base_delivery_charge;
                        }
                        else
                        {
                            $s_cost = $base_delivery_charge;
                        } 
                        if(get_post_meta( $product_id, 'calculation_method', true) == 'quantity')
                        { 
                          $re['text'] = "Delivery Charge </br> $".$s_cost." each";
                          $re['dis'] = $val; 
                          $re['charge'] = $s_cost;
							
                        }
                        else
                        {
                          $re['text'] = "Delivery Charge </br> $".$s_cost;
                          $re['dis'] = $val; 
                          $re['charge'] = $s_cost;
                        }
                    }
                }   
               }
               else
               {
                    $re['text'] = "can't found location";
                    $re['dis'] = "0"; 
                    $re['charge'] = "null";
               }
            
        }
        else
        {
            $re['text'] = "Delivery not available"; 
            $re['dis'] = "0"; 
            $re['charge'] = "null"; 
        }
        echo(json_encode($re));
        die();
    }

}
function add_cart_item_data_shipping( $cart_item_data, $product_id, $variation_id ) 
{
    $single_product_distance = filter_input( INPUT_POST, 'single_product_distance' );
    $single_product_charge = filter_input( INPUT_POST, 'single_product_charge' );

    $current_user_id = get_current_user_id(); // Alternative for getting current user ID
   
    $address = filter_input( INPUT_POST, 'address_single_product' );
    
    if(!empty($current_user_id) && !empty($address)) 
    {
        update_user_meta( $current_user_id, 'billing_address_1', $address);
    }

    $zip = filter_input( INPUT_POST, 'zip_single_product' );
    if(!empty($current_user_id) && !empty($zip)) 
    {
        update_user_meta( $current_user_id, 'billing_postcode', $zip);
    }

    if ( empty( $single_product_distance ) || empty($single_product_charge)) 
    {
        return $cart_item_data;
    }

    $cart_item_data['single_product_distance'] = $single_product_distance;
    $cart_item_data['single_product_charge'] = $single_product_charge;
 //print_r($cart_item_data);
    return $cart_item_data;
}
add_filter( 'woocommerce_add_cart_item_data', 'add_cart_item_data_shipping', 10, 3 );
//function iconic_display_shipping_text_cart( $item_data, $cart_item ) {
//    if ( empty( $cart_item['single_product_distance'] ) && empty($cart_item['single_product_charge'])) {
//        return $item_data;
//    }
//    if ( is_checkout() )
//    {
//       $item_data[] = array(
//        'key'     => __( 'Delivery Charge', 'iconic' ),
//        'value'   => wc_clean( '$'.$cart_item['single_product_charge'] ),
//        'display' => '',
//    ); 
//    }
//  
// 
//    return $item_data;
//}
// 
//add_filter( 'woocommerce_get_item_data', 'iconic_display_shipping_text_cart', 10, 2 );

/*add_action('wp_footer', 'billing_country_update_checkout', 50);
function billing_country_update_checkout() {
    if ( ! is_checkout() ) return;
    ?>

    <?php
}*/
add_action('wp_ajax_woocommerce_apply_shipping', 'calculate', 10);
add_action('wp_ajax_nopriv_woocommerce_apply_shipping', 'calculate', 10);
function calculate() 
{   
    wc_clear_notices();
    unset($_SESSION['distance']);
    $val="";
   // if (isset($_POST['billing_city']) && isset($_POST['billing_country']) && isset($_POST['billing_address_1']) && isset($_POST['billing_address_2_field']) && isset($_POST['billing_postcode']))
    if(isset($_POST['input_data']) && $_POST['input_data'] != "" && isset($_POST['address_autocomplete']) && $_POST['address_autocomplete'] !="" && isset($_POST['selected_address']) && $_POST['selected_address'] !=""){

        $form_data = get_option('delievry_setting');

        if (isset($form_data["apikey"])){
            $apiKey = $form_data["apikey"];
        }else{
            $apiKey = 'AIzaSyBnSr8fTSW6LPxXyv3EwG6ziLMXeU_R7eI';
        }
        if (isset($form_data["street_address"])){
            $street_address = $form_data["street_address"];
        }else{
            $street_address= '2787 Barth Rd, Smiths Creek';
        }
        if (isset($form_data["zipcode"])){
            $zipcode = $form_data["zipcode"];
        }else{
            $zipcode= 'MI 48074';
        }
        if (isset($form_data["country"])){
            $country = $form_data["country"];
        }else{
            $country= 'USA';
        }

        $addressTo = $street_address.','.$zipcode.','.$country;
        $addressFrom =$_POST['address_autocomplete'];
        //$addressTo = "2787 Barth Rd, Smiths Creek, MI 48074, USA";
        // Change address format
        $formattedAddrFrom    = str_replace(' ', '+', $addressFrom);
        $formattedAddrTo     = str_replace(' ', '+', $addressTo);
        $url = "https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=".$formattedAddrFrom."&destinations=".$formattedAddrTo."&key=".$apiKey;
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, $url );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        $response = curl_exec( $ch );
        if ( json_decode($response)->rows[0]->elements[0]->status === NOT_FOUND) 
        {
            $curl_result = curl_error( $ch );
            print_r( $curl_result );
            unset($_SESSION['distance']);
        } 
        else 
        {
            header( 'Content-Type: application/json' );
            $data = json_decode($response);
            if($data->rows[0]->elements[0]->status == "OK"){
                $val=str_replace('mi','',$data->rows[0]->elements[0]->distance->text);
                $val=str_replace(',','',$val);
                $val=(int)$val;
            }
          //echo  $val = (int)$data->rows[0]->elements[0]->distance->text;
        }
       
        curl_close($ch);
    }
   @session_start();
    if($val !=""){
        $_SESSION['distance'] = $val;
    }else{
        unset($_SESSION['distance']);
    }
    echo json_encode(['value' => $val, 'billing_input' => $_POST['billing_input'],'shipping_input' => $_POST['shipping_input']]);
    exit();
}
add_action('woocommerce_cart_calculate_fees', 'wpi_add_ship_fee');
function wpi_add_ship_fee() 
{
    if ( is_page( 'cart' ) || is_cart() ) 
    {
        $shipping = 0;
        foreach( WC()->cart->get_cart() as $cart_item )
        {
            if (isset($cart_item['single_product_charge'])) 
            {
                 if(get_post_meta( $cart_item['product_id'], 'calculation_method', true) == 'quantity'){
                           $shipping = $shipping + ($cart_item['single_product_charge'] * $cart_item['quantity']); 
                  }else{
                           $shipping = $shipping + $cart_item['single_product_charge'];
                  }    
               
            }
        }
        WC()->cart->add_fee("Delivery",$shipping);
    }
    if ( ! is_checkout() ) return;
    
    @session_start();
    
    if (isset($_SESSION['distance'])) 
    {
        $val = $_SESSION['distance'];
        $shipping = 0;
        wc_clear_notices();
        foreach( WC()->cart->get_cart() as  $cart_item_key => $cart_item )
        {
                $product_id = $cart_item['product_id'];
                $enable_shipping = get_post_meta( $product_id, '_select_shipping_option', true); 
                if ($enable_shipping == "yes") 
                {
                   $enable_shipping = (int)get_post_meta( $product_id, '_select_shipping_option', true); 
                   $per_mile_charge = (int)get_post_meta( $product_id, 'per_mile_charge', true);  
                   $start_per_mile_at = (int)get_post_meta( $product_id, 'start_per_mile_at', true);
                   $max_delivery_dis = (int)get_post_meta( $product_id, 'max_delivery_dis', true);
                   $base_delivery_charge = (int)get_post_meta( $product_id, 'base_delivery_charge', true);
                   $s_cost = 0;
                   if(isset($val))
                   {
                        if (isset($base_delivery_charge) && isset($start_per_mile_at) && isset($per_mile_charge)) 
                        {
                        if ($val > $max_delivery_dis) 
                        {
                          WC()->cart->add_fee("Delivery for ".$cart_item['data']->name." not available for your location",0);  
                          global $woocommerce;
                            $woocommerce->cart->cart_contents[$cart_item_key]['single_product_charge'] = "0";
                            $woocommerce->cart->cart_contents[$cart_item_key]['single_product_distance'] = "null";
                            $woocommerce->cart->set_session();
                            \wc_clear_notices();
                            $note = "Note: We're sorry, but delivery is not available to your location.<br/>Our Delivery area is limited to ".$max_delivery_dis." miles. If you have questions, please call us at (810) 987-2888";
                            wc_add_notice( __($note , 
                            "woocommerce"), 'notice' );
                            return true;
                        }
                        else
                        {
                            //echo "else";exit();
                          if ($val > $start_per_mile_at) 
                            {
                                $s_cost = ($val - $start_per_mile_at)* $per_mile_charge;
                                $s_cost = $s_cost + $base_delivery_charge;
                            }
                            else
                            {
                                $s_cost = $base_delivery_charge;
                            }
                            $cart_item['single_product_charge'] =  $s_cost;
                            global $woocommerce;
                            $woocommerce->cart->cart_contents[$cart_item_key]['single_product_charge'] = $s_cost;
                            $woocommerce->cart->cart_contents[$cart_item_key]['single_product_distance'] = $val;
                            $woocommerce->cart->set_session();
                            if(get_post_meta($cart_item['product_id'], 'calculation_method', true) == 'quantity'){
                              $shipping = $shipping + ($s_cost * $cart_item['quantity']);
                            }else{
                              $shipping = $shipping + $s_cost;
                            }
                        }
                        }   
                    }
                   else
                   {
                       WC()->cart->add_fee("Delivery for ".$cart_item['data']->name." not found for your location",0);
                       global $woocommerce;
                            $woocommerce->cart->cart_contents[$cart_item_key]['single_product_charge'] = "0";
                            
                            $woocommerce->cart->cart_contents[$cart_item_key]['single_product_distance'] = "null";
                            $woocommerce->cart->set_session();
                   }
                
            }
            else
            {
              WC()->cart->add_fee("Delivery not available for ".$cart_item['data']->name,0);
              global $woocommerce;
                        $woocommerce->cart->cart_contents[$cart_item_key]['single_product_charge'] = "0";
                        $woocommerce->cart->cart_contents[$cart_item_key]['single_product_distance'] = "";
                        $woocommerce->cart->set_session();   
                        //$note = "Note: Delivery not available for your area. If you have questions call us at (810) 987-2888";
                        //wc_add_notice( __($note ,"woocommerce"), 'notice' );
            }
           
        }
        
        WC()->cart->add_fee("Delivery Charge (Distance calculated - ".$val." miles)",$shipping);
    }
    /*else
    {
      \wc_clear_notices();
      $note = "Note: We could not find your location please try again later or enter another address";
      wc_add_notice( __($note ,"woocommerce"), 'notice' );
      return true;
    }*/
}
// Replacing the Place order button when delivery distance exceeded
add_filter( 'woocommerce_order_button_html', 'replace_order_button_html', 10, 2 );
function replace_order_button_html( $order_button ) {
   if( get_enable_or_not_volume() == '' ) return $order_button;

    $order_button_text = __( "Place Order", "woocommerce" );

    // HERE you make changes (Replacing the code of the button):
    $button = '<input type="submit"  class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="' . esc_attr( $order_button_text ) . '" data-value="' . esc_attr( $order_button_text ) . '" disabled />';
    return $button;
}

function get_enable_or_not_volume(){
    $total_volume = 0;
     // Loop through cart items and calculate total volume
    foreach( WC()->cart->get_cart() as $cart_item )
    {
        $r = '';
        $product_id = $cart_item['product_id'];
        $enable_shipping = get_post_meta( $product_id, '_select_shipping_option', true); 
        if ($enable_shipping == "yes") 
        {
            $enable_shipping = (int)get_post_meta( $product_id, '_select_shipping_option', true); 
            $per_mile_charge = (int)get_post_meta( $product_id, 'per_mile_charge', true);  
            $start_per_mile_at = (int)get_post_meta( $product_id, 'start_per_mile_at', true); 
            $max_delivery_dis = (int)get_post_meta( $product_id, 'max_delivery_dis', true);
            $base_delivery_charge = (int)get_post_meta( $product_id, 'base_delivery_charge', true);
            if (!isset($_SESSION['distance'])){   
                $r = "disabled";
                return $r;
            }elseif($_SESSION['distance'] >$max_delivery_dis){
                $r = "disabled";
                return $r;
            }
        }
        if (isset($cart_item['single_product_distance'])) 
        {
            if ($cart_item['single_product_distance'] === "null") 
            {
                $r = "disabled";
                return $r;
            }
        }
    }
    return $r;
}
add_action('woocommerce_checkout_before_customer_details','add_custom_field_after_shipping');
function add_custom_field_after_shipping($checkout)
{
  echo '<input type="hidden" name="shipping_adress_hidden" id="shipping_adress_hidden" value="">
  <input type="hidden" name="shipping_original_value" id="shipping_original_value" value="">
  <input type="hidden" name="shipping_adress_lat" id="shipping_adress_lat" value="">
  <input type="hidden" name="shipping_original_lng" id="shipping_original_lng" value="">

  <input type="hidden" name="billing_adress_hidden" id="billing_adress_hidden" value="">
  <input type="hidden" name="billing_original_value" id="billing_original_value" value="">
  <input type="hidden" name="billing_adress_lat" id="billing_adress_lat" value="">
  <input type="hidden" name="billing_original_lng" id="billing_original_lng" value="">';
}



//disabled place order button
add_action( 'woocommerce_review_order_after_submit', 'ts_review_order_after_submit', 10 );
function ts_review_order_after_submit(){
  ?>
  
<script type="text/javascript">
    jQuery(document).ready(function () {
        if(jQuery("#billing_adress_lat").length){
            if(jQuery("#billing_adress_lat").val() == "" && jQuery("#billing_original_lng").val() == ""){
                jQuery('#billing_address_1').val('');
            }
        }
        if(jQuery("#shipping_adress_lat").length){
            if(jQuery("#shipping_adress_lat").val() == "" && jQuery("#shipping_original_lng").val() == ""){
                jQuery('#shipping_address_1').val('');
            }
        }
        //shipping autocomplete
        if(jQuery("#shipping_address_1").length){
            var input_city_register = document.getElementById('shipping_address_1');
            var autocomplete_city = new google.maps.places.Autocomplete(input_city_register);
            google.maps.event.addListener(autocomplete_city, 'place_changed', function () {
                var place_city = autocomplete_city.getPlace();
                jQuery("#shipping_original_value").val(jQuery("#shipping_address_1").val());
                jQuery("#shipping_adress_hidden").val(place_city.formatted_address);
                jQuery('#shipping_adress_lat').val(place_city.geometry.location.lat());
                jQuery('#shipping_original_lng').val(place_city.geometry.location.lng());
                shipping_address_change();

            });
        }
        if(jQuery("#billing_address_1").length){
            var input_billing_address = document.getElementById('billing_address_1');
            var autocomplete_billing_address = new google.maps.places.Autocomplete(input_billing_address);
            google.maps.event.addListener(autocomplete_billing_address, 'place_changed', function () {
            var billing_city_object = autocomplete_billing_address.getPlace();
                console.log(billing_city_object);
                
                jQuery("#billing_original_value").val(jQuery("#billing_address_1").val());
                jQuery("#billing_adress_hidden").val(billing_city_object.formatted_address);
                jQuery('#billing_adress_lat').val(billing_city_object.geometry.location.lat());
                jQuery('#billing_original_lng').val(billing_city_object.geometry.location.lng());
                if(jQuery("#ship-to-different-address-checkbox").prop('checked') != true){
                    billing_address();
                }
                
            });
        }
    });
    function shipping_address_change(){
        var input_data = jQuery("#shipping_address_1").val();
        var billing_input = jQuery("#billing_address_1").val();
        var address_autocomplete = jQuery("#shipping_adress_hidden").val();
        var selected_address = jQuery("#shipping_original_value").val();
        if(jQuery("#ship-to-different-address-checkbox").prop('checked') == true){
            console.log('checked');
            if(input_data != ""){
                if(input_data == selected_address){
                    console.log("shipping autocomplete change");
                    var data = {
                        action : 'woocommerce_apply_shipping',
                            input_data : input_data,
                            address_autocomplete :address_autocomplete,
                            selected_address :selected_address,
                            billing_input : billing_input,
                            shipping_input : input_data,
                        } 
                        jQuery.ajax({
                            type: 'POST',
                            url: wc_checkout_params.ajax_url,
                            data: data,
                            datatype: 'json',
                            success: function (code) {
                                console.log("autocomplete shipping");
                                console.log(code);
                                jQuery('body').trigger('update_checkout');
                                jQuery("#billing_address_1").val(code.billing_input);
                                jQuery("#shipping_address_1").val(code.shipping_input);
                            }
                        });
                }
            }
        }else{
            jQuery("#shipping_adress_hidden").val('');
            jQuery("#shipping_original_value").val('');
            jQuery("#shipping_adress_lat").val('');
            jQuery("#shipping_original_lng").val('');
            console.log('Shipping not checked');
        }
    }
    function billing_address() {
        var input_data = jQuery("#billing_address_1").val();
        var shipping_input = jQuery("#shipping_address_1").val();
        var address_autocomplete = jQuery("#billing_adress_hidden").val();
        var selected_address = jQuery("#billing_original_value").val();
        if(input_data != "" && selected_address != ""){
            if(input_data == selected_address ){
                console.log("autocomplete change");
                var data = {
                  action : 'woocommerce_apply_shipping',
                  input_data : input_data,
                  address_autocomplete :address_autocomplete,
                  selected_address :selected_address,
                  billing_input : input_data,
                  shipping_input : shipping_input,
                } 
                jQuery.ajax({
                    type: 'POST',
                    url: wc_checkout_params.ajax_url,
                    data: data,
                    success: function (code) {
                        console.log("autocomplete billing");
                        console.log(code);
                        jQuery('body').trigger('update_checkout');
                        jQuery("#billing_address_1").val(code.billing_input);
                        jQuery("#shipping_address_1").val(code.shipping_input);
                     } ,
                     error: function(){
                        console.log("ajax error");
                     } 
                });
            }
        }
    }
	//alert("hii);
</script>
  
<?php }

add_filter( 'woocommerce_calculated_total', 'custom_calculated_total', 10, 2 );
function custom_calculated_total( $total, $cart ){
    $subtotal=intval($cart->get_subtotal());
    //echo '<pre>';print_r($cart);exit();
}