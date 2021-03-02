</div><!--end of wrapper -->
<footer class = "footer">
   <div id="site-info">
      <!--Start of row with (n) columns-->
      <div class="row">
         <div class="column">
       <a href = "/"><img src="/wp-content/uploads/2019/12/final_footer.png" class = "theLogo" alt = ""></a>
         </div>
         <div class="column" >
            <div class = "services">Community</div>
       <div class = "theHR">
        <hr style="width: 100%;color: #ebebeb;">
        </div>
       <div class = "navHolder2">
               <?php 
                  wp_nav_menu(array( 'theme_location' => 'services-menu',
                                     'menu_class'     => 'services-menu',     
                              )); 
                  ?>
            </div>
         </div>
         <div class="column">
       <div class = "information">INFORMATION</div>
       <div class = "theHR">
        <hr style="width: 100%;color: #ebebeb;">
        </div>
            <div class = "navHolder3">
               <?php 
                  wp_nav_menu(array( 'theme_location' => 'information-menu',
                                     'menu_class'     => 'information-menu',     
                              )); 
                  ?>
            </div>
         </div>
     <!--<div class="column">
       <div class = "information">RESOURCES</div>
       <div class = "theHR">
        <hr style="width: 100%;color: #ebebeb;">
        </div>
            <div class = "navHolder3">
               <?php 
                 // wp_nav_menu(array( 'theme_location' => 'footer3-menu',
                   //                  'menu_class'     => 'footer3-menu',     
                     //         )); 
                  ?>
            </div>
         </div> -->
         <div class="column">
            <div class = "contact">CONTACT</div>
       <div class = "theHR">
        <hr style="width: 100%;color: #ebebeb;">
        </div>
     <div class = "footertxt">GARRETTS MILL CHURCH <br></div>
            <a href = "https://www.google.com/maps/place/Garretts+Mill+Assembly+of+God/@39.352967,-77.690702,17z/data=!4m5!3m4!1s0x89c9e25b48ffd39b:0x2c108c725f35b2f9!8m2!3d39.352967!4d-77.688508" target="_blank"><div class = "footertxt2"> 19510 Garretts Mill Rd,</div>
        <div class = "footertxt3">Knoxville, MD 21758</div></a><br>
       <div class = "footertxt4"><a href="tel:443-742-6859"> Tel: (443) 742-6859</a></div>
      <!-- <div class = "footertxt4"><a href="tel:410-583-2367"> Fax: 410-321-4808</a></div>-->
      <div class = "footertxt5"><a href="mailto:rebeccajohnston@gmail.com">Email: rebeccajohnston@gmail.com</a></div>
      
      
       <div class="facebook1"><a href="https://www.facebook.com/garrettsmillag" target = "_blank"><img src="http://edgwebsitepreview.info/wp-content/uploads/2019/12/facebook_logo.png"></a></div>
         </div>
     
         
      </div>
      <!--End of row with columns-->
     <hr style=" width: 70%;color: lightgray; ">
     <div class = "copyright"><?php echo date('Y');?>© All Rights Reserved. GARRETTS MILL CHURCH, all rights reserved. | <a href = "https://www.edgeadvertisingsolutions.com/" target="_blank">EDG eAdvertising Solutions</a></div>
   </div>
   <!-- #site-info -->
</footer> 
</div>    
<?php wp_footer(); ?>
</body>
</html>

