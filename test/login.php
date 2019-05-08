<?php
include('database_connection.php');
if(isset($_POST['login'])){

	$db = parse_url(getenv("DATABASE_URL"));

	$tempuser = $_POST["username"];
	$sql = "SELECT * FROM user WHERE username='$tempuser';";
	$result = mysqli_query($conn,$sql);

	if($result->num_rows > 0){
		$row = mysqli_fetch_assoc($result);
		if($row['password'] == $_POST['password']){
			setcookie('userid',$row['userid'],time()+3600);
			setcookie('username',$row['username'],time()+3600);
			setcookie('firstname',$row['firstname'],time()+3600);
			setcookie('lastname',$row['lastname'],time()+3600);
			setcookie('identity',$row['identity'],time()+3600);
			if($_COOKIE['identity'] == 'tutor'){
			header('location: loginhomepage.php');
			}else{
			header('location: loginhomepage.php');
			}
		}else{
		echo "<script type='text/javascript'>alert('Wrong password');window.location.href='login.html';</script>";
		}
	}else{
		echo "<script type='text/javascript'>alert('Wrong username');window.location.href='login.html';</script>";
		}
}
?>