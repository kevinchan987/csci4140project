<?php
include('database_connection.php');
$myuid = $_COOKIE['userid'];
$pid = $_GET['pid'];
$type = $_GET['type'];
$applyuid = $_GET['applyuid'];

if($type == 'tutor'){
  $sql = "INSERT INTO taccept (tpid, applyuid,tuid) VALUES ('$pid', '$applyuid','$myuid')";
}else if($type == 'student'){
  $sql = "INSERT INTO saccept (spid, applyuid,suid) VALUES ('$pid', '$applyuid','$myuid')";
}
mysqli_query($conn,$sql);

if($type == 'tutor'){
  $sql = "UPDATE tutorpost SET active = 0 WHERE tpid = $pid";
}else if($type == 'student'){
  $sql = "UPDATE stupost SET active = 0 WHERE spid = $pid";
}
mysqli_query($conn,$sql);

header('location: personalpage.php');
?>