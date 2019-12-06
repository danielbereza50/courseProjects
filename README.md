# Career_Projects
A portfolio of past projects, build instructions and platforms are specified at the start of each branch in order to ensure proper compilation.  Everything is situated within its proper branch which is accessed through the drop down.

<b>Full Stack Engineer (MAMP, WAMP, LAMP) - WordPress</b>

* Documentation: https://www.wpbeginner.com/wp-tutorials/how-to-move-live-wordpress-site-to-local-server/

* Recommend the WP-CLI over a GUI

* Documentation: https://wp-cli.org/
* https://developer.wordpress.org/cli/commands/

* note - IP address followed by port number for MySQL server in config

Example: 

/** MySQL hostname */

define( 'DB_HOST', '127.0.0.1:8889' );

* 2 servers - (Apache, MySQL)

* Apache uses port 80

* Nginx uses port 8888

* MySQL uses port 8889

1st method
- The entire WP Install can be accessed through the theme's folder for that specific website - just install on the server via download of the master here on git and connect the wp-config for the MySQL db.  Create a new database and user with it's own username and password and place that in the three "define statements" in the config.

example:

define( 'DB_NAME', 'the_db_name' );

/** MySQL database username */

define( 'DB_USER', 'the_user_name' );

/** MySQL database password */

define( 'DB_PASSWORD', 'the_user_password' );

Import the .sql file from the root directory of the theme's folder, and then import via phpmyadmin (Unix Socket) and file upload, zip format perferred

Update your db with : 

UPDATE wp_options SET option_value = replace(option_value, 'http://www.example.com', 'http://localhost/test-site') WHERE option_name = 'home' OR option_name = 'siteurl';
  
UPDATE wp_posts SET post_content = replace(post_content, 'http://www.example.com', 'http://localhost/test-site');
  
UPDATE wp_postmeta SET meta_value = replace(meta_value,'http://www.example.com','http://localhost/test-site');

- For a particular Plugin or Widget build - a directory will be specified in that folder


*If pointing over from a another host, be sure to swap put the "A" Records of the website. 

https://www.whois.net/


* To install a library, cd into your plugin's folder and use composer using the WP-CLI

For Project Management:

https://kanbanflow.com/


SVN Repo for published plugins:

https://plugins.svn.wordpress.org/

1. Contract Work I did:


Custom Themes + SEO work via
1. https://gtmetrix.com/
2. https://www.syncedlocalmarketing.com/

:


Company:

EDG eAdvertising Solutions

- Team EDG

https://www.edgeadvertisingsolutions.com/

Staging Solutions:

http://edgwebsitepreview1.info/


Deployed Solutions:

https://cfbhgroup.com/

https://customerfirstconstruction.com/

https://chicremodeling.com/

https://allfinishllc.com/

https://imacscontrols.com/

https://dbtoftowson.com/

https://fishercustomdesigns.com/

https://silveradoairsystems.com/








<hr>

Company:

Go Viral Marketing 

- Team GVM

https://goviralmarketing.com/

Staging Solutions:

http://newsite2.sjfmc.org/

http://goviralmarketing.com/supplement-pass/


Deployed Solutions:

http://transitionallifecounselingandconsultation.com/

http://k-beautymicroblading.com/

http://acertainwork.org/




<hr>

Company:

4Biz Graphics, LLC

- Team 4Biz


Staging Solutions:

template: Museum 

http://stanleywhitman.com/


Deployed Solutions:

template: Imperion 

http://www.4bizgraphics.com/

template: Maestropizzini

http://puertovallartausa.com/

template: City of WP

https://wolcottct.org/

template: CraftBird

http://www.foodsafetyconsults.com/

template: BeDentist

https://www.ckmanningmd.com/

Custom Theme:

http://vistapak.com/



<hr>

Company:

Neuro Endoceuticals, LLC

Affiliate Marketing Program I helped implement to increase sales:


https://zenexel.com/

<hr>

Company:

Betesh Media - Closed

https://beteshmedia.com/


template changes to a pre-existing theme for a small business

http://viable-edu.com/


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

Graphic Design:

Marketing:





