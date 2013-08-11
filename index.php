<?php 
require("admin/twitter-db.php");
require("twitteroauth/twitteroauth.php");
if(!empty($_SESSION['username'])){  
    $twitteroauth = new TwitterOAuth('x0v7IZW7E9jSTEzZFs5JNA', '8EXdPtxA3TBQpn4X9HsODo6Db1k7XvfFvwBR3MJZuE', $_SESSION['oauth_token'], $_SESSION['oauth_secret']);  
} 
	$home_timeline = $twitteroauth->get('statuses/home_timeline');  
	print_r($home_timeline);   
?>