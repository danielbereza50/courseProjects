 
How to:

   1. https://deliciousbrains.com/tour-wordpress-database/
   2. example, store the results from the MySQL database in a php variable to be used sometime later, like so: 
   
   $table_name = $wpdb->prefix . "wp_usermeta";
   
   //get the data from a web form field
   
   $group_code = $post_meta['group_code']['0'];
   
   $post_id = $wpdb->get_results("SELECT `role_manage` FROM ".$table_name." WHERE group_code= '".$group_code."' ");

   // print out the data onto a web page
   
   foreach ($post_id as $post_ids){ ?>
       <li><?php echo $post_ids->column_name;?></li> 
       <li><?php echo $post_ids->another_column_name;?></li>
       <li><?php echo $post_ids->as_many_columns_as_you_have;?></li>
   <?php 
   }
   
   
   
   

