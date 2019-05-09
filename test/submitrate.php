<?php
include('database_connection.php');
$suid = $_COOKIE['userid'];
$pid = $_GET['pid'];
$type = $_GET['type'];
$rating = $_GET['rating'];

if($type == 'tutor'){
	$sql0 = "SELECT * FROM tutorpost WHERE tpid='$pid';";
	$result = mysqli_query($conn,$sql0);
	$row = mysqli_fetch_assoc($result);
	$tuid = $row['uid'];
}else{
	$sql0 = "SELECT * FROM saccept WHERE spid='$pid';";
	$result = mysqli_query($conn,$sql0);
	//var_dump($sql0);
	$row = mysqli_fetch_assoc($result);
	$tuid = $row['applyuid'];
}





if($type == 'tutor'){
  $sql = "INSERT INTO tprate (tpid, suid,tuid, rating) VALUES ('$pid', '$suid','$tuid','$rating')";
}else if($type == 'student'){
  $sql = "INSERT INTO sprate (spid, suid,tuid, rating) VALUES ('$pid', '$suid','$tuid','$rating')";
}


$sql1 = "SELECT * FROM user WHERE userid='$tuid';";
$result = mysqli_query($conn,$sql1);
$sql2 = "SELECT * FROM tprate WHERE tuid='$tuid';";
$count2 = mysqli_query($conn,$sql2);
$sql3 = "SELECT * FROM sprate WHERE tuid='$tuid';";
$count3 = mysqli_query($conn,$sql3);

mysqli_query($conn,$sql);


$row = mysqli_fetch_assoc($result);
$oldrate = $row['rating'];
$count = $count2->num_rows + $count3->num_rows;
$newrate = (($count * $oldrate) + $rating)/($count+1) ;

$sql = "UPDATE user SET rating = '$newrate' WHERE userid = '$tuid'";
mysqli_query($conn,$sql);

if($type == 'tutor'){
	$sql = "UPDATE tutorpost SET rated = 1 WHERE tpid = '$pid'";
}else if($type == 'student'){
	$sql = "UPDATE stupost SET rated = 1 WHERE spid = '$pid'";
}
mysqli_query($conn,$sql);





header('location: personalpage.php');
?>