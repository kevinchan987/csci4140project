<?php
include('database_connection.php');
if(isset($_POST['newpassword'])){

	$uid = $_COOKIE["userid"];
	$oldpassword = $_POST["oldpassword"];
	$newpassword = $_POST["newpassword"];
	$sql = "SELECT * FROM user WHERE userid='$uid';";
	$result = mysqli_query($conn,$sql);

	$row = mysqli_fetch_assoc($result);
	if($row['password'] == $oldpassword){
  	    $sql = "UPDATE user SET password = '$newpassword' WHERE userid = '$uid'";
  	    mysqli_query($conn,$sql);
		header('location: personalpage.php');
	
	}else{
	echo "<script type='text/javascript'>alert('Wrong password');window.location.href='changepassword.php';</script>";
	}

}
?>