</div><!--end of wrapper -->
<footer class = "footer">
   <div id="site-info">
      <!--Start of row with (n) columns-->
      <div class="row">
         <div class="column">
       <a href = "/"><img src="../wp-content/uploads/2019/10/Silverado-Air-Systems-Logo-Added-Backdrop-1.png" class = "theLogo" alt = "Silverado Air, LLC" name = "Silverado Air, LLC"></a>
         </div>
         <div class="column" >
            <div class = "services">SERVICES</div>
       <div class = "theHR">
        <hr style="width: 100%;color: #ebebeb;">
        </div>
       <div class = "navHolder2">
               <?php 
                  wp_nav_menu(array( 'theme_location' => 'footer-1-menu',
                                     'menu_class'     => 'footer1-menu',     
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
                  wp_nav_menu(array( 'theme_location' => 'footer-2-menu',
                                     'menu_class'     => 'footer2-menu',     
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
                  //wp_nav_menu(array( 'theme_location' => 'footer-3-menu',
                   //                  'menu_class'     => 'footer3-menu',     
                        //      )); 
                  ?>
            </div>
         </div> -->
         <div class="column">
            <div class = "contact">CONTACT</div>
       <div class = "theHR">
        <hr style="width: 100%;color: #ebebeb;">
        </div>
     <div class = "footertxt">SILVERADO AIR SYSTEMS<br></div>
            <a href = "https://www.google.com/maps/place/4020+Shiloh+Ave,+Hampstead,+MD+21074/@39.604998,-76.85467,17z/data=!3m1!4b1!4m5!3m4!1s0x89c841b42fb23cc7:0x6e64c273559445ea!8m2!3d39.604998!4d-76.852476" target="_blank"><div class = "footertxt2">4020 Shiloh Ave,</div>
        <div class = "footertxt3">Hampstead, Maryland 21074</div></a><br>
       <div class = "footertxt4"><a href="tel:410-374-9901"> Tel: 410-374-9901</a></div>
      <!-- <div class = "footertxt4"><a href="tel:410-583-2367"> Fax: 410-321-4808</a></div>-->
      <div class = "footertxt5"><a href="mailto:DGarland@silveradoairsystems.com">Email: DGarland@silveradoairsystems.com</a></div>  
         </div>
      </div>
      <!--End of row with columns-->
     <hr style=" width: 70%;color: lightgray; ">
     <div class = "copyright"><?php echo date('Y');?>© All Rights Reserved. SILVERADO AIR SYSTEMS, all rights reserved. | <a href = "https://www.edgeadvertisingsolutions.com/" target="_blank">EDG eAdvertising Solutions</a></div>
   </div>
   <!-- #site-info -->
</footer> 
</div>    
<?php wp_footer(); ?>
</body>
</html>

