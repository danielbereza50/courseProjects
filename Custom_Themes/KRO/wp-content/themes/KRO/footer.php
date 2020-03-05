</div><!--end of wrapper -->
<footer class = "footer">
   <div id="site-info">
      <!--Start of row with (n) columns-->
      <div class="row">
         <div class="column">
       <a href = "/"><img src="/wp-content/uploads/2020/02/footer_new_1.png" class = "theLogo" alt = "Keystone Roll Off, LLC" title = "Company Logo"></a>
         </div>
		           <div class="column">
       <div class = "information">INFORMATION</div>
       <div class = "theHR">
        <hr style="width: 100%;color: #96d600;">
        </div>
            <div class = "navHolder3">
               <?php 
                  wp_nav_menu(array( 'theme_location' => 'footer1-menu',
                                     'menu_class'     => 'footer1-menu',     
                              )); 
                  ?>
            </div>
         </div>
         <div class="column" >
            <div class = "services">SERVICES</div>
       <div class = "theHR">
        <hr style="width: 100%;color: #96d600;">
        </div>
       <div class = "navHolder2">
               <?php 
                  wp_nav_menu(array( 'theme_location' => 'footer2-menu',
                                     'menu_class'     => 'footer2-menu',     
                              )); 
                  ?>
            </div>
         </div>
    <!-- <div class="column">
       <div class = "information">RESOURCES</div>
       <div class = "theHR">
        <hr style="width: 100%;color: #96d600;">
        </div>
            <div class = "navHolder3">
               <?php 
                  wp_nav_menu(array( 'theme_location' => 'footer3-menu',
                                     'menu_class'     => 'footer3-menu',     
                              )); 
                  ?>
            </div>
         </div> -->
         <div class="column">
            <div class = "contact">CONTACT</div>
       <div class = "theHR">
        <hr style="width: 100%;color: #96d600;">
        </div>
     <div class = "footertxt">Keystone Roll Off, LLC <br></div>
            <a href = "https://www.google.com/maps/place/32+Industrial+Dr,+Hanover,+PA+17331/@39.8244466,-76.9594488,17z/data=!3m1!4b1!4m5!3m4!1s0x89c8597a13714e4b:0xdf58e4bf71fa98e5!8m2!3d39.8244466!4d-76.9572601" target="_blank"><div class = "footertxt2">32 Industrial Drive</div>
        <div class = "footertxt3">Hanover PA, 17331</div></a><br>
       <div class = "footertxt4"><a style = "color:black; "href="tel:717-788-7274"> Tel: (717) 788 - 7274</a></div>
       <!--<div class = "footertxt4"><a href="tel:xxx-xxx-xxxx"> Fax: xxx-xxx-xxxx</a></div>-->
      <div class = "footertxt5"><a href="mailto:info@keystonerolloff.com">Email: info@keystonerolloff.com</a></div>  
         </div>
      </div>
      <!--End of row with columns-->
     <!--<hr style=" width: 70%;color: lightgray; ">-->
     <div class = "copyright"><?php echo date('Y');?>© All Rights Reserved. KEYSTONE ROLL OFF, all rights reserved. | <a href = "https://www.edgeadvertisingsolutions.com/" target="_blank">EDG eAdvertising Solutions</a></div>
   </div>
   <!-- #site-info -->
</footer> 
</div>    
<?php wp_footer(); ?>
</body>
</html>

