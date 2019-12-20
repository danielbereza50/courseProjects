</div><!--end of wrapper -->
<footer class = "footer">
   <div id="site-info">
      <!--Start of row with (n) columns-->
      <div class="row">
         <div class="column" id = "superColumn1">
			 <div class = "show" id = "thelogo">
				 <a href = "/"><img src="../wp-content/uploads/2019/11/new_logo_2.png" class = "theLogo" alt = "DBT of Towson"></a>
			 </div>
			 <div class = "hide">
				 <a href = "/"><img src="../wp-content/uploads/2019/11/footer_bg_6.png" class = "theLogo" alt = "DBT of Towson"></a>
			 </div>
         </div>
         <div class="column"  id = "superColumn2">
            <div class = "services">CAPABILITIES</div>
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
         <div class="column" id = "superColumn3">
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
                  //wp_nav_menu(array( 'theme_location' => 'footer3-menu',
                             //        'menu_class'     => 'footer3-menu',     
                          //    )); 
                  ?>
            </div>
         </div> -->
         <div class="column" id = "superColumn4">
            <div class = "contact">CONTACT US</div>
       <div class = "theHR">
        <hr style="width: 100%;color: #ebebeb;">
        </div>
     <div class = "footertxt">TECH INNOVATIONS <br></div>
		 
            <a href = "https://www.google.com/maps/search/P.O.+Box+151,+Glenwood,+MD,+21738-0132/@39.2838357,-77.0628303,13z" target="_blank"><div class = "footertxt2"> P.O. Box 151,</div>
        <div class = "footertxt3">Glenwood, MD, 21738-0132</div></a><br>
       <!--<div class = "footertxt4"><a href="tel:410-465-6977"> Tel / Fax: 410-465-6977</a></div>-->
       <!--<div class = "footertxt4"><a href="tel:410-583-2367"> Fax: 410-321-4808</a></div>-->
      <div class = "footertxt5"><a href="mailto:contact@techi-usa.com">Email: contact@techi-usa.com</a></div>
      
      <div class = "footertxt6"> <a href = "../employee-login/">Employee Login</a></div>
       
			 <!--<div class = "holder">
				 <div class = "imgHolder1">
				 <a href = "https://login.microsoftonline.com/common/oauth2/authorize?client_id=4345a7b9-9a63-4910-a426-35363201d503&response_mode=form_post&response_type=code+id_token&scope=openid+profile&state=OpenIdConnect.AuthenticationProperties%3d7TgSP7T55fkxfdI6BAPUc_dnsU7R2qhu7P6SFiLqugP81e9_c24-yFvZ97MteuE8w8NqYIRq9DjilaY9gKeDws4hiK1fCJ5NAXK3le5_d6IRR1GY_mHwjvF8NXyI5VJs&nonce=637091407680441578.Y2YxMGU5M2YtMjNiNS00MGQxLTgwNjgtZTlkZjM0OWIwNThkODVlODI5ZTctYmQyYi00OTdhLWFiNWQtNzMxZmYwNTgzZmY2&redirect_uri=https%3a%2f%2fwww.office.com%2f&ui_locales=en-US&mkt=en-US&client-request-id=c393a296-89b9-4529-9dc7-c249f06f1181" target= "_blank"><img src="../wp-content/uploads/2019/11/user.png" class = "" alt = "DBT of Towson"></a>
				 </div>
				 <div class = "imgHolder2">
				 <a href = "https://app.tsheets.com/signin" target= "_blank"><img src="../wp-content/uploads/2019/11/tsheet.png" class = "" alt = "DBT of Towson"></a>
				 </div>
			 </div>-->	
			 
			 
         </div>
      </div>
      <!--End of row with columns-->
     <hr class = "bottom hr" >
     <div class = "copyright"><?php echo date('Y');?>© All Rights Reserved. TECH INNOVATIONS, all rights reserved. | <a href = "https://www.edgeadvertisingsolutions.com/" target="_blank">EDG eAdvertising Solutions</a></div>
   </div>
   <!-- #site-info -->
</footer> 
</div>    
<?php wp_footer(); ?>
</body>
</html>

