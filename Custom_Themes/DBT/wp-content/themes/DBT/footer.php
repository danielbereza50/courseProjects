</div><!--end of wrapper -->
<footer class = "footer">
   <div id="site-info">
      <!--Start of row with (n) columns-->
      <div class="row">
         <div class="column">
			 <a href = "/"><img src="/wp-content/uploads/2019/04/DBT-Logo-Final.png" class = "theLogo" alt = "DBT of Towson"></a>
         </div>
         <div class="column" >
			  <div class = "theHR" id = "hide">
				<hr style="width: 100%;color: #ebebeb;">
  			</div>
            <div class = "services">SERVICES</div>
			 <div class = "theHR" id = "show">
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
			  <div class = "theHR" id = "hide">
				<hr style="width: 100%;color: #ebebeb;">
  			</div>
			 <div class = "information">INFORMATION</div>
			 <div class = "theHR" id = "show">
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
		 <div class="column">
			  <div class = "theHR" id = "hide">
				<hr style="width: 100%;color: #ebebeb;">
  			</div>
			 <div class = "information">RESOURCES</div>
			 <div class = "theHR" id = "show">
				<hr style="width: 100%;color: #ebebeb;">
  			</div>
            <div class = "navHolder3">
               <?php 
                  wp_nav_menu(array( 'theme_location' => 'footer3-menu',
                                     'menu_class'     => 'footer3-menu',     
                              )); 
                  ?>
            </div>
         </div> 
         <div class="column">
			 <div class = "theHR" id = "hide">
				<hr style="width: 100%;color: #ebebeb;">
  			</div>
            <div class = "contact">CONTACT</div>
			 <div class = "theHR" id = "show">
				<hr style="width: 100%;color: #ebebeb;">
  			</div>
		 <div class = "footertxt">DBT of TOWSON <br></div>
            <a href = "https://www.google.com/maps/place/408+Allegheny+Ave,+Towson,+MD+21204/@39.402638,-76.6128168,17z/data=!3m1!4b1!4m5!3m4!1s0x89c80fb1198cd627:0xe9259e46614672b7!8m2!3d39.402638!4d-76.6106281" target="_blank"><div class = "footertxt2">408 Allegheny Avenue,</div>
				<div class = "footertxt3">Towson, MD 21204</div></a><br>
			 <div class = "footertxt4"><a href="tel:410-583-2367"> Tel: 410-583-2367</a></div>
			 <div class = "footertxt4" style="margin-bottom: 10px;"><a href="tel:410-583-2367"> Fax: 410-321-4808</a></div>
			<div class = "footertxt5"><a href="mailto:info@dbtoftowson.com">Email: info@dbtoftowson.com</a></div>	 
         </div>
      </div>
      <!--End of row with columns-->
	   <hr style=" width: 70%;color: lightgray; ">
	   <div class = "copyright"><?php echo date('Y');?>© All Rights Reserved. DBT of TOWSON, all rights reserved. | <a href = "https://www.edgeadvertisingsolutions.com/" target="_blank">EDG eAdvertising Solutions</a></div>
   </div>
   <!-- #site-info -->
</footer>	
</div>    
<?php wp_footer(); ?>
</body>
</html>

