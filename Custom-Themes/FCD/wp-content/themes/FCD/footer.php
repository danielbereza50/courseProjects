</div><!--end of wrapper -->
<footer class = "footer">
   <div id="site-info">
      <!--Start of row with (n) columns-->
      <div class="row">
         <div class="column">
       <a href = "/"><img src="../wp-content/uploads/2019/10/Fisher-Logo-1.png" class = "theLogo" alt = "Fisher Custom Designs" title = "Fisher Custom Designs"></a>
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
     <!--<div class="column">
       <div class = "information">RESOURCES</div>
       <div class = "theHR">
        <hr style="width: 100%;color: #ebebeb;">
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
        <hr style="width: 100%;color: #ebebeb;">
        </div>
     <div class = "footertxt">Fisher Custom Designs<br></div>
            <a href = "https://www.google.com/maps/place/1693+Hosfeld+Dr,+Westminster,+MD+21157/@39.6182725,-76.9282023,17z/data=!3m1!4b1!4m5!3m4!1s0x89c846d1c51fc613:0x44073be3c4bfd98d!8m2!3d39.6182684!4d-76.9260083" target="_blank"><div class = "footertxt2">1693 Hosfeld Drive,</div>
        <div class = "footertxt3">Westminster, Maryland 21157</div></a><br>
       <div class = "footertxt4"><a href="tel:910-538-2940">Tel: 910-538-2940</a></div>
       <!--<div class = "footertxt4"><a href="tel:410-583-2367"> Fax: 410-321-4808</a></div>-->
      <div class = "footertxt5"><a href="mailto:rpfisher0618@gmail.com">Email: rpfisher0618@gmail.com</a></div>  
	<div class = "footertxt4" style="margin: 10px 0px 0px 0px;line-height: 15px;">MHIC license #108548</div>
		<div class = "footertxt4">Plumbing license #84239</div>
         </div>
      </div>
      <!--End of row with columns-->
     <hr style=" width: 70%;color: lightgray; ">
     <div class = "copyright"><?php echo date('Y');?>© All Rights Reserved. Fisher Custom Designs, all rights reserved. | <a href = "https://www.edgeadvertisingsolutions.com/" target="_blank">EDG eAdvertising Solutions</a></div>
   </div>
   <!-- #site-info -->
</footer> 
</div>    
<?php wp_footer(); ?>
</body>
</html>

