</div><!--end of wrapper -->
<footer class = "footer">
   <div id="site-info">
      <!--Start of row with (n) columns-->
      <div class="row">
         <div class="column" style="opacity: 1;">
			 <div><a href = "/" target="_blank"><img src="/wp-content/uploads/2019/09/logo.png" class = "BBB" alt = "IMACS" title = "IMACS"></a> </div>
				  <div> <a href = "https://www.bbb.org/us/md/new-windsor/profile/automation-systems/industrial-monitoring-control-systems-inc-0011-90288620" target="_blank"><img src="/wp-content/uploads/2019/09/BBB.png" class = "BBB" alt = "IMACS" title = "IMACS"></a></div>
         </div>
         <div class="column" >
            <div class = "services" style = "color:white;">NAVIGATION</div>
       <div class = "theHR">
        <hr style="width: 100%;color: #ebebeb;">
        </div>
       <div class = "navHolder2">
               <?php 
                  wp_nav_menu(array( 'theme_location' => 'footer-1-menu',
                                     'menu_class'     => 'footer-1-menu',     
                              )); 
                  ?>
            </div>
         </div>
         <div class="column">
       <div class = "information" style = "color:white;">PRODUCTS</div>
       <div class = "theHR">
        <hr style="width: 100%;color: #ebebeb;">
        </div>
            <div class = "navHolder3">
               <?php 
                  wp_nav_menu(array( 'theme_location' => 'footer-2-menu',
                                     'menu_class'     => 'footer-2-menu',     
                              )); 
                  ?>
            </div>
         </div>
     <div class="column">
       <div class = "information" style = "color:white;">SERVICES</div>
       <div class = "theHR">
        <hr style="width: 100%;color: #ebebeb;">
        </div>
            <div class = "navHolder3">
               <?php 
                  wp_nav_menu(array( 'theme_location' => 'footer-3-menu',
                                     'menu_class'     => 'footer-3-menu',     
                              )); 
                  ?>
            </div>
         </div> 
         <div class="column">
            <div class = "contact" style = "color:white;">VISIT US!</div>
       <div class = "theHR">
        <hr style="width: 100%;color: #ebebeb;">
        </div>
     <div class = "footertxt" style = "color:white;">IMACS - Industrial Monitoring and Control Systems, Inc. <br></div>
            <a href = "https://www.google.com/maps/place/IMACS/@39.5409981,-77.1110544,17z/data=!3m1!4b1!4m5!3m4!1s0x89c8342ed0c0cde9:0x3522090c2613f10e!8m2!3d39.540994!4d-77.1088657" target="_blank"><div class = "footertxt2">3 Mill Drive.</div>
				<div class = "footertxt3">P.O. Box 248</div><br>
        <div class = "footertxt3">New Windsor, MD 21776 </div></a><br>
       <div class = "footertxt4"><span class="phoneSynced"><a href="tel:410-583-2367"> Phone: (410) 635-2265</a></span></div>
      <div class = "footertxt5"><a href="mailto:info@imacscontrols.com">Email: info@imacscontrols.com</a></div>  
         </div>
      </div>
      <!--End of row with columns-->
     <hr style=" width: 70%;color: lightgray; ">
     <div class = "copyright" style = "color:#ababab"><?php echo date('Y');?>© All Rights Reserved. IMACS Industrial Monitoring and Control Systems, Inc., all rights reserved. | <a href = "https://www.edgeadvertisingsolutions.com/" target="_blank" style = "color:#ababab">EDG eAdvertising Solutions</a></div>
   </div>
   <!-- #site-info -->
</footer> 
</div>    
<?php wp_footer(); ?>
</body>
</html>

