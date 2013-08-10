<?php 
require("admin/twitter-db.php");
require("twitteroauth/twitteroauth.php");  

    	echo $_SESSION['id'];
    	echo $_SESSION['username'];
    	echo $_SESSION['oauth_uid'];
    	echo $_SESSION['oauth_provider'];
    	echo $_SESSION['oauth_token'];
    	echo $_SESSION['oauth_secret'];
?>