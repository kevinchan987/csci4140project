<?php
	include('database_connection.php');
	$pid = $_GET['pid'];
	$type = $_GET['type'];
	$isapply = $_GET['isapply'];
	$uid = $_COOKIE['userid'];
	$firstname = $_COOKIE['firstname'];
	$lastname = $_COOKIE['lastname'];
	if($isapply == 'true'){
		if($type == 'tutor'){
		  $sql = "INSERT INTO applytp (tpid, applyuid, firstname,lastname)
		VALUES ('$pid', '$uid', '$firstname','$lastname')";
	
		}else if($type == 'student'){
		  $sql = "INSERT INTO applysp (spid, applyuid, firstname,lastname)
		VALUES ('$pid', '$uid', '$firstname','$lastname')";
		}
		
	}else{
		if($type == 'tutor'){
		  $sql = "DELETE FROM applytp WHERE tpid = '$pid' and applyuid = '$uid' ";
	
		}else if($type == 'student'){
		  $sql = "DELETE FROM applysp WHERE spid = '$pid' and applyuid = '$uid' ";
		}	

	}
	mysqli_query($conn,$sql);

	
	header('location: loginhomepage.php');


?>