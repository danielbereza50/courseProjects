<?php 
   /**
    * Template Name: Home 
    */ 
   get_header();?>

<?php  
// bring in the WYSSYWIG content
 $content = apply_filters('the_content', $post->post_content);
 echo $content;
?>


   <?php
      //echo do_shortcode('[smartslider3 slider=2]'); 
      ?>
<!-- Start of section 1 -->

<!--<div class = "mainheadertxt">
	<h1>Welcome to DBT of Towson</h1>
</div>

<div class = "txtholder">
<div class = "dbttx1">
DBT of TOWSON provides group and individual Dialectical Behavior Therapy to adults. Led by trained DBT therapists, our 25-week program helps individuals who struggle to regulate their emotions and behaviors learn to achieve balance and build lives worth living.
</div>

<div class = "dbttx2">
DBT of TOWSON’s group program consists of three learning modules, which comprise the four aspects of DBT: mindfulness, distress tolerance, emotion regulation and interpersonal effectiveness. Believing that mindfulness, or the learned ability to pay attention to the present moment is the basis of the other DBT skills, each of the three modules starts with two weeks of mindfulness followed by six to seven weeks of distress tolerance, emotion regulation or interpersonal effectiveness. Each weekly group incorporates mindfulness practice, review of skills practice, and teaching of new skills.
</div>
	
<div class = "dbttx3">
Serving the greater Baltimore area, DBT of TOWSON believes that every person who comes to DBT is doing the best that they can at any given moment and that by embodying DBT’s central dialectics, people can learn to accept themselves while making the changes that will enable them to find satisfaction and joy in their lives.
</div>
	
</div>


<!-- Start of section 1 -->
<!-- Start of section 1 -->
<!--<div class = "mission">
	 <div class = "hide">
		 <a href = "/?page_id=24">
         <div class="missionimg">
              <!--<img src="https://www.cfbhgroup.com/CFBH/wp-content/uploads/2019/03/mission.png" class="theLogo">-->
         <!--</div>
		 </a>
      </div>
   <div class = "missionHolder">
      <div class="hrHolder">
         <hr style="width: 100%;color: #266593;">
      </div>
	   <a href = "/?page_id=24">
      <div class="missionheader">What is DBT?</div>
	   </a>
      <div class = "missiontxt">
            DBT is a style of cognitive behavior therapy that aims to examine the relationship between thoughts, feelings and behaviors. DBT was initially developed by Marsha Linehan, who adapted cognitive therapy to address the needs of clients who have a harder time implementing change. Where traditional cognitive therapy attempts to work with thoughts and feelings in order to change behaviors, DBT begins by targeting behaviors in order to change thoughts and feelings. This is important for many people who, despite knowing better, continue to engage in behaviors that negatively impact their lives.
<br><br>
DBT is has been found to be highly effective in treating a wide range of disorders, including borderline personality disorder, depression, substance abuse, eating disorders, and trauma-related disorders such as post-traumatic stress disorder. 

	<br><br>
		  <a class="readmore" href="/what-is-dbt">Learn More</a>	  
      </div>
	   <div class = "show">
		   <a href = "/?page_id=24">
      <div class = "missionimg">
          <!-- <img src="https://www.cfbhgroup.com/CFBH/wp-content/uploads/2019/03/mission.png" class = "theLogo">-->
     <!-- </div>
		   </a>
   </div>
   <div class = "clear"></div>  
   </div>
</div>
<!-- End of section 1 -->
<!-- Start of section 2 -->
<!--<div class = "drholder">
	  <a href = "/?page_id=26">
   <div class = "meetourdr">
      <!--<img src="https://www.cfbhgroup.com/CFBH/wp-content/uploads/2019/03/dr.png" class = "theLogo">-->
   <!--</div>
	</a>
   <div class = "drHolder">
         <hr style="
            width: 5%;
            margin-left: 0px;
            color: #266593;
            ">
	   <a href = "/?page_id=26">
      <div class = "drheader">Who We Are</div>
	   </a>
      <div class = "meetourdrtxt">
        DBT of TOWSON was established in 2016 by Katie Holden and Jackie Dressel in an effort to give our emotionally dysregulated clients a place to learn skills to reclaim their lives, their relationships and their dignity. 
All of our therapists are fully licensed and have successfully completed Behavioral Tech’s week-long Foundational Training. Our goal is to be a leading provider of high-quality DBT group and individual therapy to clients in the greater Baltimore area.

		  <br><br>
		  <a class="readmore" href="/?page_id=26">Meet the Team</a>
      </div>
      <div class = "clear"></div>
   </div>
</div>
<!-- End of section 2 -->
<!-- Start of section 4 -->

<!--<div class = "drholder" style="background-color: #266593;">
		<div class="drheader" style="color: white;padding-top: 20px;">Our Services</div>
	
   <div class = "drHolder">
	   <a href = "/group-therapy">
	      <div class = "serviceimg1">
     <!-- <img src="http://www.edgwebsitepreview1.info/wp-content/uploads/2019/04/grouptherapy.png" class = "theLogo">-->
   <!-- </div>
		   	</a>
	   <a href = "/?page_id=34">
	         <div class = "drheader" style="color: white;">DBT Group Therapy</div>
	   </a>
      <div class = "meetourdrtxt1" style="color: white;">
         DBT of TOWSON’s 25-week group program consists of three learning modules, which comprise the four aspects of DBT: mindfulness, distress tolerance, emotion regulation and interpersonal effectiveness. Believing that mindfulness, or the learned ability to pay attention to the present moment is the basis of the other DBT skills, each of the three modules starts with two weeks of mindfulness followed by six to seven weeks of distress tolerance, emotion regulation or interpersonal effectiveness. Each weekly group incorporates mindfulness practice, review of skills practice, and teaching of new skills.
      </div>
      <div class = "clear"></div>
   </div>
	 <hr style="
            width: 90%;
            margin-left: 4%;
            color: #266593;
            ">
   <div class = "drHolder">
	   	<a href = "/?page_id=36">
	   	<div class = "serviceimg2">
      <!--<img src="http://www.edgwebsitepreview1.info/wp-content/uploads/2019/04/individualtherapy.png" class = "theLogo">-->
  <!-- </div>
				</a>
	   <a href = "/?page_id=26">
	         <div class = "drheader" style="color: white;">DBT Individual Therapy</div>
	   </a>
      <div class = "meetourdrtxt2" style="color: white;">
        DBT of TOWSON’s trained therapists offer individual DBT therapy to help clients enrolled in DBT group use skills to cope effectively with their personal problems and to achieve their goals. DBT is most effective when weekly DBT group is combined with individual DBT therapy. In the event that our therapists’ caseloads are full, we work to provide group clients with referrals to outside DBT-trained therapists to ensure that they are receiving comprehensive DBT services.
      </div>
      <div class = "clear"></div>
   </div>
	         <hr style="
            width: 90%;
            margin-left: 4%;
            color: #266593;
            ">
   <div class = "drHolder">
	   	<a href = "/?page_id=39">
	   	<div class = "serviceimg3">
      <!--<img src="http://www.edgwebsitepreview1.info/wp-content/uploads/2019/04/skillecoaching.png" class = "theLogo">-->
  <!-- </div>
			</a>	
	   	   	<a href = "/?page_id=39">
	         <div class = "drheader" style="color: white;">DBT Skills Coaching</div>
	   </a>
      <div class = "meetourdrtxt3" style="color: white;">
        For clients enrolled in group whose outside therapists may not be trained in DBT, DBT of TOWSON provides skills coaching sessions on an as-needed basis to help clients better understand how to apply the DBT skills they are learning in group to their individual lives. 
      </div>
      <div class = "clear"></div>
   </div>

	
</div>
<!-- End of section 4 -->
<!-- Start of section 3 -->
<!--<div class = "mission">
	 <div class = "hide">
		 <a href = "/?page_id=30">
         <div class="missionimg1">
              <!--<img src="https://www.cfbhgroup.com/CFBH/wp-content/uploads/2019/03/mission.png" class="theLogo">-->
       <!--  </div>
		 </a>
      </div>
   <div class = "missionHolder">
      <div class="hrHolder">
         <hr style="width: 100%;color: #266593;">
      </div>
	     <a href = "/?page_id=30">
      <div class="missionheader">Resources</div>
	   </a>
      <div class = "missiontxt">
         This section is dedicated to offering helpful resources for new & returning clients, as well as emergency crisis, family and loved ones, and healthcare professional information. Here, you will be able to download and print all necessary forms including: client contact sheet, consent for treatment, financial agreement, general release of information, using out of network benefits, diary card, emergency contact release, inclement weather policy, credit card authorization form, release of HIPAA, therapist release of information, and more. There are also links to additional resources to better understand how DBT can work for you or your loved ones. 
		  <br><br>
		  <a class="readmore" href="/?page_id=30">Learn More</a>
      </div>
	   <div class = "show">
		   <a href = "/?page_id=30">
      <div class = "missionimg1">
          <!-- <img src="https://www.cfbhgroup.com/CFBH/wp-content/uploads/2019/03/mission.png" class = "theLogo">-->
      <!--</div>
		   </a>
   </div>
   <div class = "clear"></div>  
   </div>
</div>
<!-- End of section 3 -->
<!-- Start of section 5 -->
<!--<div class = "contactus">
   <div class = "form"><?php //echo do_shortcode('[ninja_form id=1]'); ?></div>
   <div class = "locationtxt" style="padding-top: 30px;">GET IN TOUCH<br></div>
   <div class = "locationtxt2">408 Allegheny Avenue,<br></div>
	<div class = "locationtxt2">Towson, MD 21204<br></div>
   <div class = "locationtxt3"><a href="tel:410-583-2367">Tel: 410-583-2367</a><br></div>
   <div class = "locationtxt4"><a style="color: #20567c;" href="mailto:info@dbtoftowson.com">Email: info@dbtoftowson.com</a></div>
   <div class = "map"><iframe style="border: 1px solid #ccc;" src="https://www.google.com/maps/embed/v1/place?q=39.402795,-76.610349&amp;key=AIzaSyC7_oIqPwDf5nSWHcF2ig1vGjVT5nPx5uQ" width="80%" height="450" frameborder="2"></iframe></div>
   <div class = "clear"></div>
</div>
<!-- End of section 5 -->
<?php 
   get_footer(); 
   ?>

