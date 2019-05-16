<?php
// this is for deleting the cookie
if(isset($_COOKIE['username'])){
	// set the cookie to empty and set the expire time to the past
	setcookie('username','',time()-3600);
	setcookie('userid','',time()-3600);
	setcookie('username','',time()-3600);
	setcookie('firstname','',time()-3600);
	setcookie('lastname','',time()-3600);
	setcookie('identity','',time()-3600);
}

session_start();
session_destroy();
// redirect back to login page
header('location: index.php');
?>