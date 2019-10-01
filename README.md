# Career_Projects
A portfolio of past projects, build instructions and platforms are specified at the start of each branch in order to ensure proper compilation.  Everything is situated within its proper branch which is accessed through the drop down.

<b>Full Stack Engineer (MAMP) - WordPress</b>

* Documentation: https://www.wpbeginner.com/wp-tutorials/how-to-move-live-wordpress-site-to-local-server/

1st method
- The entire WP Install can be accessed through the theme's folder for that specific website - just install on the server and connect the wp-config for the MySQL db

Import the .sql file in the root directory of the theme's folder, and then import via phpmyadmin and file upload, zip format perferred

Update your db with : 

UPDATE wp_options SET option_value = replace(option_value, 'http://www.example.com', 'http://localhost/test-site') WHERE option_name = 'home' OR option_name = 'siteurl';
  
UPDATE wp_posts SET post_content = replace(post_content, 'http://www.example.com', 'http://localhost/test-site');
  
UPDATE wp_postmeta SET meta_value = replace(meta_value,'http://www.example.com','http://localhost/test-site');

- For a particular Plugin or Widget build - a directory will be specified in that folder

2nd Method
- Use the Duplicator plugin and the on screen instructions to migrate the website over locally using the installer.php script


1. Contract Work I did:


Custom Themes:


Company:
https://www.edgeadvertisingsolutions.com/

:

https://cfbhgroup.com/

https://customerfirstconstruction.com/

https://completehomeimprovementcontractors.com/

https://allfinishllc.com/

https://imacscontrols.com/

https://dbtoftowson.com/





<hr>

Company:
https://goviralmarketing.com/

:

http://k-beautymicroblading.com/

http://acertainwork.org/

http://goviralmarketing.com/supplement-pass/

http://goviralmarketing.com/sjfmc1/


Custom Plugins:

responsive image map plug-in for the 3 branch locations:
http://transitionallifecounselingandconsultation.com/


<hr>

Company:

Betesh Media

https://beteshmedia.com/


template changes to a pre-existing theme for a small business
http://viable-edu.com/


<hr>

Company:

Neuro Endoceuticals, LLC

Affiliate Marketing Program I helped implement to increase sales:

https://zenexel.com/


<hr>

Company:

SocialLoud Speaker - Closed


template changes to a pre-existing theme for a small business
* implemented a Bootstrap Slider
http://www.livewellholistichealth.com/


<hr>




3. Contract Work I did as a partner with

Custom Themes:
Custom Plugins:
Graphic Design work:
Marketing Work:





