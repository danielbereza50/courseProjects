<?php
/*
    Plugin Name: Synced Local Marketing Plugin for SEO
    Plugin URI:  https://www.edgeadvertisingsolutions.com/
    Description: This is a marketing plugin built to help client's SEO visibility.
    Version:     100.0.0
    Author:      EDG - eAdvertising Solutions
    Author URI:  https://www.edgeadvertisingsolutions.com/
    License:     GPL2
    License URI: Licence URl
*/


add_action('wp_footer', 'analytics'); 
function analytics() { ?>

  <script type="text/javascript">
(function(){ 
var randomh=Math.random(); 
var e = document.getElementsByTagName("script")[0];
var d = document.createElement("script");
setAccount = 'your_account_name';
setDomain = 'your_website_url';
setHost = window.location.host;
oldURL = document.referrer;
wis =  window.location.pathname;
d.src = "https://www.syncedlocalmarketing.com/api/analytics.js?x="+randomh+"";
d.type = "text/javascript"; 
d.async = true;
d.defer = true;
e.parentNode.insertBefore(d,e);})();
</script>
<span id="briteAnalytics"></span>

 
<?php }















