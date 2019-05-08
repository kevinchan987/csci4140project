<?php
	if($_COOKIE['identity'] == 'tutor'){
		header('location: post.html');
	}else{
		header('location: stupost.html');
	}
?>