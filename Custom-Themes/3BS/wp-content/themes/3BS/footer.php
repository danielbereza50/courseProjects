</div><!--end of wrapper -->
<footer class = "footer">
   <div id="site-info">
      <!--Start of row with (n) columns-->
      <div class="row">
        <div class="column">
       <a href="/"><img src="/wp-content/uploads/2020/02/Three-Brothers-Logo_BW-FINAL_v2_1.png" class="theLogo" alt="Three Brothers Services" title="Company Logo"></a>


 <div class="socialWrapper">
<div class="columnSocial">
			 <a href="https://www.facebook.com/3brothersusa/" target = "_blank"><img src="https://threebrothersusa.com/wp-content/uploads/2020/02/facebook.png" class="facebook_logo" alt="Three Brothers Services" title="Facebook"></a>
 
         </div>
		   
		    <div class="columnSocial">
			 <a href="https://www.homeadvisor.com/rated.3BrothersServicesLLC.94171041.html" target = "_blank"><img src="https://threebrothersusa.com/wp-content/uploads/2020/02/home-advisor.png" class="home_advisor_logo" alt="Three Brothers Services" title = "Home Advisor"></a>
 
         </div>
		   
		   </div>
         </div>
         <div class="column" >
            <div class = "services">SERVICES</div>
       <div class = "theHR">
        <hr style="width: 100%;color: #ebebeb;">
        </div>
       <div class = "navHolder2">
               <?php 
                  wp_nav_menu(array( 'theme_location' => 'footer1-menu',
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
                  wp_nav_menu(array( 'theme_location' => 'footer2-menu',
                                     'menu_class'     => 'footer2-menu',     
                              )); 
                  ?>
            </div>
         </div>
    <!-- <div class="column">
       <div class = "information">RESOURCES</div>
       <div class = "theHR">
        <hr style="width: 100%;color: #ebebeb;">
        </div>
            <div class = "navHolder3">
               <?php 
                 // wp_nav_menu(array( 'theme_location' => 'footer3-menu',
                    //                 'menu_class'     => 'footer3-menu',     
                   //           )); 
                  ?>
            </div>
         </div> -->
         <div class="column">
            <div class = "contact">CONTACT</div>
       <div class = "theHR">
        <hr style="width: 100%;color: #ebebeb;">
        </div>
     <div class = "footertxt">Three Brothers Services  <br></div>
            <a href = "https://www.google.com/maps/place/2505+Taneytown+Rd,+Gettysburg,+PA+17325/@39.7512056,-77.226947,17z/data=!3m1!4b1!4m5!3m4!1s0x89c9b291227f69a5:0xca6f30402eef9538!8m2!3d39.7512056!4d-77.224753" target="_blank"><div class = "footertxt2">2505 TaneyTown Rd.</div>
        <div class = "footertxt3">Gettysburg, PA 17325</div></a><br>
       <div class = "footertxt4"><a href="tel:443-340-1849"> Tel: 443-340-1849</a></div>
			 <div class = "footertxt4"> PA license number 153558</div>
       <!--<div class = "footertxt4"><a href="tel:410-583-2367"> Fax: 888-888-8888</a></div>-->
      <div class = "footertxt5"><a href="mailto:eric@threebrothersusa.com">Email: eric@threebrothersusa.com</a></div>  
         </div>
      </div>
      <!--End of row with columns-->
     <hr style=" width: 70%;color: lightgray; ">
     <div class = "copyright"><?php echo date('Y');?>© All Rights Reserved. THREE BROTHERS SERVICES, all rights reserved. | <a href = "https://www.edgeadvertisingsolutions.com/" target="_blank">EDG eAdvertising Solutions</a></div>
   </div>
   <!-- #site-info -->
</footer> 
</div>    
<?php wp_footer(); ?>
</body>
</html>

