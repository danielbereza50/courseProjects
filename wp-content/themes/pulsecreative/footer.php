</div><!--end of wrapper -->
<div class = "footer">
   <div id="site-info">
      <!--Start of row with (n) columns-->
      <div class="row">
         <div class="column">
      <a href = "/"><img src="./wp-content/uploads/2020/06/footer-logo.png" class = "theLogo" alt = ""></a>
         </div>
         <div class="column" >
			  <div class = "txt1">600 Madison Avenue</div>
<div class = "txt2">8th Floor</div>
<div class = "txt3">New York, New York, 10022</div>
       <div class = "navHolder2">
               <?php 
                  //wp_nav_menu(array( 'theme_location' => 'footer1-menu',
                          //           'menu_class'     => 'footer1-menu',     
                          //    )); 
                  ?>
            </div>
         </div>
         <div class="column">
       <div class = "information"></div>
            <div class = "navHolder3">
               <?php 
                 // wp_nav_menu(array( 'theme_location' => 'footer2-menu',
                   //                  'menu_class'     => 'footer2-menu',     
                   //           )); 
                  ?>
            </div>
         </div>
     <div class="column">
       <div class = "information"></div>
            <div class = "navHolder3">
               <?php 
                  //wp_nav_menu(array( 'theme_location' => 'footer3-menu',
                     //                'menu_class'     => 'footer3-menu',     
                       //       )); 
                  ?>
            </div>
         </div> 
         <div class="column">
            <div class = "contact">Follow us on:</div>
        
			 <div class = "social">
				 
				 <a href = "/"><img src="./wp-content/uploads/2020/06/linkedin.png" class = "theLogo" alt = ""></a>
			 
			 </div>
			 
			 <div class = "social">
				 
				 <a href = "/"><img src="./wp-content/uploads/2020/06/facebook.png" class = "theLogo" alt = ""></a>
			 
			 </div>
			 
			 <div class = "social">
				 
				 
				 <a href = "/"><img src="./wp-content/uploads/2020/06/twitter.png" class = "theLogo" alt = ""></a>
			 
			 </div>
			 
			 <div class = "social">
				 
				 <a href = "/"><img src="./wp-content/uploads/2020/06/youtube.png" class = "theLogo" alt = ""></a>
			 
			 
			 </div>
           
         </div>
		   <div class="column_2">
				 <div id = "show" class = "copyright">© Copyright <?php echo date('Y');?>, Alvarez & Marsal Holdings, LLC. All Rights Reserved.</div>
		   </div>
		   <div class="column_2"></div>
      </div>
      <!--End of row with columns-->
    <div id = "hide" class = "copyright">© Copyright <?php echo date('Y');?>, Alvarez & Marsal Holdings, LLC. All Rights Reserved.</div>
   </div>
   <!-- #site-info -->
</div> 
</div>    
<?php wp_footer(); ?>
</body>
</html>

