<?php
include('database_connection.php');
$myuid = $_COOKIE['userid'];
$pid = $_GET['pid'];
$type = $_GET['type'];

if($type == 'tutor'){
  $sql = "DELETE FROM tutorpost WHERE tpid = $pid";
}else if($type == 'student'){
  $sql = "DELETE FROM stupost WHERE spid = $pid";
}
mysqli_query($conn,$sql);


header('location: personalpage.php');
?>