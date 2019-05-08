<?php
include('database_connection.php');
if(isset($_POST['upload'])){


	var_dump($_POST["region"]);
	var_dump($_POST['price']);
	var_dump($_POST['time']);
	var_dump($_POST['subject']);
	var_dump($_POST['educationLevel']);
	/*
	$username = $_POST["username"];
	$password = $_POST["password"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$identity = $_POST["identity"];
	$sex = $_POST["sex"];
*/

$uid = $_COOKIE['userid'];
	$region=$_POST['region'];
	$edlevel=$_POST['educationLevel'];
	$price=$_POST['price'];
	$subject = $_POST['subject'];
	$time = $_POST['time'];
	$subjectstring ='';
	$timestring='';
    $N = count($subject);
    for($i=0; $i < $N; $i++)
    {
      $subjectstring=$subjectstring.$subject[$i].' ';
    }
  
  $N = count($time);
    for($i=0; $i < $N; $i++)
    {
      $timestring=$timestring.$time[$i].' ';
    }
  

	$sql = "INSERT INTO stupost (uid, subject, region,day,price,edlevel)
	VALUES ('$uid', '$subjectstring', '$region','$timestring','$price','$edlevel')";
	mysqli_query($conn,$sql);
	header('location: loginhomepage.php');

}
?>