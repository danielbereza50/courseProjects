<?php

# The model interacts with the database, querying and saving data, and contains logic.

class database //extends MvcModel {
    public function databaseFunctions() {
		
        global $wpdb;
	
	    $results = $wpdb->get_results($wpdb->prepare("SELECT * FROM testblob", $wpdb));
	
		/* phpmyadmin MySQL Script */
		/*'CREATE TABLE '.$this->tables['documentation_nodes'].' (
			  id int(11) NOT NULL auto_increment,
			  documentation_version_id int(11) default NULL,
			  local_id int(11) default NULL,
			  parent_id int(11) default NULL,
			  depth int(4) default NULL,
			  lft int(11) default NULL,
			  rght int(11) default NULL,
			  slug varchar(255) default NULL,
			  title varchar(255) default NULL,
			  content text default NULL,
			  PRIMARY KEY  (id),
			  KEY documentation_version_id (documentation_version_id),
			  KEY local_id (local_id),
			  KEY parent_id (parent_id),
			  KEY lft (lft),
			  KEY rght (rght)'*/
		
		
		
	}
?>