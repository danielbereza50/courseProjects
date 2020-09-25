Structure has been used since WP version 3.8  
 
 
How to:

   1. https://deliciousbrains.com/tour-wordpress-database/
   
   2. example, store the results from the MySQL database in a php variable to be used sometime later, like so: 
   
   global $wpdb;
   
   $table_name = $wpdb->prefix . "wp_usermeta";
   
    // debugging purposes

    //$users_id = get_users( array( 'fields' => array( 'ID' ) ) );   
    //foreach($users_id as $user){
    //print_r(get_user_meta ( $user->ID));
    //}
   
   // set the post meta equal to the user meta for that ID
 
   $post_meta = get_user_meta($user_id);
    
    //print_r($post_meta);
   
   // get the data from a web form field, 'group code' is the name of the field control
 
   $group_code = $post_meta['group_code']['0'];
   
   // ***note run the query in the phpmyadmin first to see what is returned from the query
   
   $post_id = $wpdb->get_results("SELECT 'role_manage' FROM ".$table_name." WHERE group_code= '".$group_code."' ");

   // print out the data onto a web page using a foreach loop
   
   foreach ($post_id as $post_ids)
   
       { ?>
         <li><?php echo $post_ids->umeta_id;?></li>
         <li><?php echo $post_ids->meta_key;?></li>
         <li><?php echo $post_ids->meta_value;?></li>  
        <?php }
  
   
  
   
 great example of combining two or more queries and the resulting SQL:
 taken from : https://stackoverflow.com/questions/23555109/wordpress-combine-queries
 
 PHP:
 
/**
 * Demo #1 - Combine two sub queries:
 */

     $args1 = array(
     
         'post_type'  => 'post',
        
        'orderby'    => 'title',
        
        'order'      => 'ASC',
        
        'date_query' => array(
        
             array( 'after' => '2013-12-14 13:03:40' ),
             
         ),
     );

     $args2 = array(
    
        'post_type'  => 'post',
        
        'orderby'    => 'title',
        
        'order'      => 'DESC',
        
        'date_query' => array(
        
            array( 'before' => '2013-12-14 13:03:40', 'inclusive' => TRUE ),   
            
        ),
    );

      $args = array( 
    
       'posts_per_page' => 1,
       
       'paged'          => 1,
       
       'sublimit'       => 1000,
       
       'args'           => array( $args1, $args2 ),
       
    );

    $results = new WP_Combine_Queries( $args );
 
   
   
   
   

