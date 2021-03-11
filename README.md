# Career_Projects
A portfolio of past projects, build instructions and platforms are specified at the start of each branch in order to ensure proper compilation.  Everything is situated within its proper branch which is accessed through the drop down.

* download MAMP here: https://bitnami.com/stack/mamp/installer
* download WordPress here: https://wordpress.org/download/

*My installation is pointing here: http://localhost/WordPress

<div><b>Full Stack Engineer (MAMP, WAMP, LAMP 64 bit architecture) - WordPress</b></div>
<br>
<div>Operating Systems:</div>
<div>Mac, Windows, Linux</div>
<br>
WordPress Cookbooks: 

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

// Some hosting providers require this value

/** MySQL hostname */

define( 'DB_HOST', 'localhost' );

Import the .sql file from the root directory of the theme's folder, and then import via phpmyadmin (Unix Socket) and file upload, zip format perferred

Update your db with : 

UPDATE wp_options SET option_value = replace(option_value, 'http://www.example.com', 'http://localhost/test-site') WHERE option_name = 'home' OR option_name = 'siteurl';
  
UPDATE wp_posts SET post_content = replace(post_content, 'http://www.example.com', 'http://localhost/test-site');
  
UPDATE wp_postmeta SET meta_value = replace(meta_value,'http://www.example.com','http://localhost/test-site');

- For a particular Plugin or Widget build - a directory will be specified in that folder

<div>Computer Networks:</div>
<div>*If pointing over from another remote host, be sure to swap put the "A" Records of the website. </div>

<div>The other DNS records are:</div>
<div>AAAA, CNAME, MX, NS, SOA, and TXT</div>

https://www.whois.net/]

<div>WP Core Functions:</div>
<div>https://developer.wordpress.org/reference/functions/</div>
<br>
<div>* To install a library, cd into your plugin's folder and use composer using the WP-CLI</div>

<br>
<div>WP REST API:</div>

<div>https://developer.wordpress.org/rest-api/</div>

<div>Append the website URL with(functionality comes with WP Core):</div>
<div>"headless CMS"</div>
<div>website_name/wp-json/wp/v2/users</div>
<div>From terminal use: curl -X GET http://localhost/WordPress/wp-json/wp/v2/pages</div>
<div>https://www.hostinger.com/tutorials/wordpress-rest-api</div>
<div>After installing .phar file in theme's folder: https://make.wordpress.org/cli/handbook/installing/</div>
<div>GET: With this method, you can fetch information from the server.</div>
<div>POST: This enables you to send information to the server in question.</div>
<div>PUT: With the put method, you can edit and update existing data.</div>
<div>DELETE: This enables you to delete information.</div>

<div>to see this endpoint for all of the pages for the theme</div>
<br>

For Project Management:

https://kanbanflow.com/

https://asana.com/

https://slack.com/

https://activecollab.com/


SVN Repos for published plugins:

https://plugins.svn.wordpress.org/

https://gpldl.com/

1. Contract Work I did:


Custom Themes + SEO work via
* https://gtmetrix.com/
* https://developers.google.com/speed/pagespeed/insights/
* https://www.syncedlocalmarketing.com/
* https://analytics.google.com/analytics/web/
* https://drive.google.com/drive/my-drive
* https://console.developers.google.com/
* how to - https://www.cloudways.com/blog/post-smtp-mailer-fork-of-wordpress-postman-smtp-plugin/?id=339490
* https://search.google.com/search-console/welcome
* https://support.google.com/webmasters/answer/6065812
* https://ahrefs.com/blog/why-is-my-website-not-showing-up-on-google/
* http://pajhome.org.uk/crypt/md5/
* https://whatismyipaddress.com/ - IPv4
* https://www.whatsmyip.org/
* https://stock.adobe.com/
* https://phoenixnap.com/kb/how-to-flush-dns-cache
* https://tinypng.com/
* http://beautifytools.com/php-beautifier.php
* https://www.freeformatter.com/html-formatter.html
* https://www.pdf2go.com/edit-pdf
* https://dnschecker.org/
* https://passwordsgenerator.net/


Great SEO references:

site:yourwebsite.com

site:yourwebsite.com/a-page-you-want-to-show-up-in-google

yourwebsite.com/sitemap.xml

yourwebsite.com/page-sitemap.xml

yourwebsite.com/robots.txt

:

Great Article:
https://medium.com/@rtheunissen/efficient-data-structures-for-php-7-9dda7af674cd


<hr>

Company:

Go Viral Marketing 

- Team GVM

https://goviralmarketing.com

Staging Solutions:

http://goviralmarketing.com/supplement-pass

Deployed Solutions:

https://sjfmc.org

http://transitionallifecounselingandconsultation.com

http://acertainwork.org


<hr>

Company:

EDG eAdvertising Solutions

- Team EDG

Fully Secure Connections:

https://edgeadvertisingsolutions.com:2083

Staging Solutions:

http://edgwebsitepreview1.info

www.thinkbignets.com/reservations

Deployed Solutions:

https://cfbhgroup.com

https://customerfirstconstruction.com

https://www.completehomeimprovementcontractors.com/

https://allfinishllc.com

https://imacscontrols.com

https://dbtoftowson.com

https://fishercustomdesigns.com

https://silveradoairsystems.com

https://techi-usa.com

https://garrettsmillag.org

https://silveradomechanicalservices.com

https://threebrothersusa.com

https://keystonerolloff.com

https://mistymints.org

https://kismetcafe21784.com/online-order

<hr>

<hr>

<hr>

Company:

4Biz Graphics, LLC

- Team 4Biz

http://4bizgraphics.com


Staging Solutions:

http://s854226310.onlinehome.us/

www.snowguards.com

www.alesrenovations.com

Deployed Solutions:

* 1 - 2k users a month

http://puertovallartausa.com

https://wolcottct.org

http://vistapak.com

http://foodsafetyconsults.com

http://laydonindustries.com

http://essexautoclub.org

http://greatbeginningsdaycarecenter.com

<hr>
http://urgentcarecentersct.com

<hr>

Company:

CounselingWise

- Team Page1Pros

https://login.siteground.com/

https://www.staging.counselingwise.com/

https://counselingwise.com


Staging Solutions:

https://cwdevel2.com/ouranimalconnection

https://cwdevel2.com/olivebranchtherapygroup/


Deployed Solutions:

https://therapybloglibrary.com

https://mauihacks.com

https://greenwoodcounselingcenter.com/playroom/

<hr>

https://www.olivebranchtherapygroup.com/

<hr>

Company:

212 Creative, LLC 

- Team 212

https://jdwebsitedevelopment.com

https://212creative.com

https://c56883.sgvps.net:2083

framework: Divi

Staging Solutions:

https://ourtown3d.com/newbaltimore

https://ourtown3d.com/stclair

https://staging1.homeproshowcase.com/find-a-professional

http://goldentouch.212development.com

http://lighthouse.212development.com

http://pdesystems.212development.com

https://alexis.212development.com

https://inoacusa.212development.com/

https://anothercastlegames.212development.com/

http://staging2.skissausage.com/

https://staging3.pickerplace.com/


Deployed Solutions:

https://twinsurance.net

http://hangrykits.com/

https://ltcrplus.com

https://mygpea.org

https://bowlguard.com

https://jacar-systems.com

https://marinecityhealthandfitness.com

https://parrotsnaturally.com

https://strictlyvtwin.com

https://innisfail.ca

<hr>

https://lighthousebiblenb.com

http://pdesystems.com

https://alexisabramson.com

http://www.anothercastlegames.com

https://inoacusa.com/

https://www.inoac.co.jp/en/solution/

http://skissausage.com/


