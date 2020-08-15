 
How to:

   1. https://deliciousbrains.com/tour-wordpress-database/
   2. example, store the results from the MySQL database in a php variable to be used sometime later, like so: 
   
   $table_name = $wpdb->prefix . "wp_usermeta";
   
   //get the data from a web form field, 'group code' is the name of the field control
   
   $group_code = $post_meta['group_code']['0'];
   
   // ***note run the query in the phpmyadmin first to see what is returned from the query
   
   $post_id = $wpdb->get_results("SELECT 'role_manage' FROM ".$table_name." WHERE group_code= '".$group_code."' ");

   // print out the data onto a web page
   
   foreach ($post_id as $post_ids){ ?>
   
       <li><?php echo $post_ids->umeta_id;?></li>
       <li><?php echo $post_ids->meta_key;?></li>
       <li><?php echo $post_ids->meta_value;?></li>
   
   <?php 
   }
   
   
   
   

