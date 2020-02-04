</div><!--end of wrapper -->
<footer class = "footer">
   <div id="site-info">
      <!--Start of row with (n) columns-->
      <div class="row">
         <div class="column">
       <a href = "/"><img src="/wp-content/uploads/2020/02/sms-logo.png" class = "theLogo" alt = "DBT of Towson"></a>
         </div>
         <div class="column" >
            <div class = "services">SERVICES</div>
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
       <div class = "information">INFORMATION</div>
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
     <!--<div class="column">
       <div class = "information">RESOURCES</div>
       <div class = "theHR">
        <hr style="width: 100%;color: #ebebeb;">
        </div>
            <div class = "navHolder3">
               <?php 
                 // wp_nav_menu(array( 'theme_location' => 'footer-3-menu',
                 //                    'menu_class'     => 'footer-3-menu',     
                 //             )); 
                  ?>
            </div>
         </div> -->
         <div class="column">
            <div class = "contact">CONTACT</div>
       <div class = "theHR">
        <hr style="width: 100%;color: #ebebeb;">
        </div>
     <div class = "footertxt">Silverado Mechanical<br></div>
            <a href = "https://www.google.com/maps/place/4024+Shiloh+Ave,+Hampstead,+MD+21074/@39.6050978,-76.8536686,17z/data=!3m1!4b1!4m5!3m4!1s0x89c841b5d6b5a855:0x336bd2cf6fb9f8af!8m2!3d39.6050978!4d-76.8514746" target="_blank"><div class = "footertxt2">4024 Shiloh Ave.</div>
        <div class = "footertxt3">Hampstead, Maryland 21074</div></a><br>
       <div class = "footertxt4"><a href="tel:410-374-9900">Tel: 410-374-9900</a></div>
        <div class = "footertxt4"><a href="tel:410-374-2863"> Fax: 410-374-2863</a></div>
      <div class = "footertxt5"><a href="mailto:service@silveradomechanicalservices.com">Email: service@silveradomechanicalservices.com</a></div>  
         </div>
      </div>
      <!--End of row with columns-->
     <hr style=" width: 70%;color: lightgray; ">
     <div class = "copyright"><?php echo date('Y');?>© All Rights Reserved. SILVERADO MECHANICAL, all rights reserved. | <a href = "https://www.edgeadvertisingsolutions.com/" target="_blank">EDG eAdvertising Solutions</a></div>
   </div>
   <!-- #site-info -->
</footer> 
</div>    
<?php wp_footer(); ?>
</body>
</html>

