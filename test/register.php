<?php
include('database_connection.php');
if(isset($_POST['register'])){
	$tempuser = $_POST["username"];
	$sql = "SELECT password FROM user WHERE username='$tempuser';";
	$result = mysqli_query($conn,$sql);
	if($result->num_rows == 0){
		$username = $_POST["username"];
		$password = $_POST["password"];
		$firstname = $_POST["firstName"];
		$lastname = $_POST["lastName"];
		$identity = $_POST["identity"];
		$sex = $_POST["sex"];

		$sql = "INSERT INTO user (username, password, firstname,lastname,identity,sex,rating)
		VALUES ('$username', '$password', '$firstname','$lastname','$identity','$sex',3)";

		mysqli_query($conn,$sql);
		header('location: index.php');
	}else{
		echo "<script type='text/javascript'>alert('Username is used');window.location.href='register.html';</script>";
	}


}
?>