<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Personal Page</title>
<style>

body{

  }

#p1{ color:red;font-size: 30px;

color:	#F5F5F5;
	text-shadow: 4px 4px black;}

#p2{ color:red;font-size: 30px;

color:	#F5F5F5;
	text-shadow: 4px 4px black;}

.column{
	margin:50px;
	margin-left: 150px;
	float: left;
	width: 30%;
	height: 300px;
	color:	#F5F5F5;
	text-shadow: 4px 4px black;
}
.row:after{
	content:"";
	display: table;
	clear: both;
	color:	#F5F5F5;
	text-shadow: 4px 4px black;
}
.w3-bar{
  right: 0;
  transform:translateX(60%);
}
tr{
  width: 30%;
}

h1{
  margin-left: 150px;
  margin-top: 30px;
}
div#pw{
  margin-left: 140px;
}


</style>
</head>
<body>
	

	<div class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left" style="display:none" id="Menu">
  		<button onclick="closeMenu()" class="w3-bar-item w3-button w3-large">&times;</button>
    <a  href = "loginhomepage.php" class="w3-bar-item w3-button w3-black "> <i class="fa fa-home"></i><i>Home Page</i></a>
  	<a  href = "personalpage.php" class="w3-bar-item w3-button w3-black "> <i>Personal Page</i></a>
	 	<a  href = "prepost.php" class="w3-bar-item w3-button w3-black "><i> Upload</i> </a>
	 	<a  href = "/chat" class="w3-bar-item w3-button w3-black "><i> Chat Room</i> </a>
	 	<a  href = "/search" class="w3-bar-item w3-button w3-black "><i> Search </i></a>
	 	<a  href = "contactus.php" class="w3-bar-item w3-button w3-black "><i> Contact Us</i></a>
    <a  href = "logout.php" class="w3-bar-item w3-button w3-black "><i> Logout</i></a>
	</div>

<div id="main">

<div class="w3-black">
  <button id="openNav" class="w3-button w3-black w3-xlarge w3-left" onclick="openMenu()">&#9776;</button>
  <div class="w3-container">
    <h4>Hi, <?php echo $_COOKIE['firstname'],$_COOKIE['lastname']; ?> </h4>

  <div class="w3-container w3-center"">
	<div class="w3-bar">

    <a  href = "loginhomepage.php" class="w3-bar-item w3-button w3-black "><i class="fa fa-home"></i></a>
  	 <a  href = "personalpage.php" class="w3-bar-item w3-button w3-black w3-round-large"> <i>Personal Page</i></a>
	 <a  href = "prepost.php" class="w3-bar-item w3-button w3-black w3-round-large"><i> Upload</i> </a>
	 <a  href = "/chat" class="w3-bar-item w3-button w3-black w3-round-large"><i> Chat Room</i> </a>
	 <a  href = "/search" class="w3-bar-item w3-button w3-black w3-round-large"><i> Search </i></a>
	 <a  href = "contactus.php" class="w3-bar-item w3-button w3-black w3-round-large"><i> Contact Us</i></a>
   <a  href = "logout.php" class="w3-bar-item w3-button w3-black "><i> Logout</i></a>
	</div>
	</div>
  </div>
</div>


  <div>
      <h1>Your Information</h1>
  </div>

<?php 
include('database_connection.php');
$uid = $_COOKIE['userid'];
$sql = "SELECT * FROM `user` WHERE userid = '$uid' ";
$result = mysqli_query($conn,$sql);

?>
    <div style="width: 35%; height:400px; overflow:auto;margin-left: 150px; margin-top: 20px; margin-bottom: 60px; position:relative; float: left">
          <div>
      <h3>Personal Information</h3>
    </div>
    <table class="w3-table-all"  id="header-fixed">
      <thead>

       <?php
      while ($row = mysqli_fetch_assoc($result)) {
        ?>

      <tr >
        <th class="w3-green">User Name </th>
        <?php echo'<td>'. $row['username'].'</td>'; ?>
       </tr> 
      <tr >
      <tr >
        <th class="w3-green">First Name </th>
        <?php echo'<td>'. $row['firstname'].'</td>'; ?>
       </tr> 
      <tr >
        <th class="w3-green">Last Name</th>
        <?php echo'<td>'. $row['lastname'].'</td>'; ?>
        </tr> 
         <tr>
        <th class="w3-green" >Gender</th>
        <?php echo'<td>'. $row['sex'].'</td>'; ?>
        </tr> 
         <tr>
         <tr>
        <th class="w3-green" >Identity</th>
        <?php echo'<td>'. $row['identity'].'</td>'; ?>
        </tr> 
         <tr>
        
        <?php 
        $type = $row['identity'];
        if($type == 'tutor'){
            echo'<th class="w3-green">Rating</th><td>'. $row['rating'].'</td></tr> '; 
          }
        ?>
        

  <?php  } ?>

    </thead>
    </table>

    <div id = "pw" class="w3-container w3-center">
    <div class="w3-bar">    
    <p> <a onclick = "Go()" class="w3-bar-item w3-button  w3-round-large w3-green"> Change password </a></p>
    </div>
    </div>
</div>

<?php 

if($type == 'tutor'){
  $sql = "SELECT * FROM `tutorpost` WHERE  uid = '$uid' ORDER BY posttime DESC ";
}else if($type == 'student'){
  $sql = "SELECT * FROM `stupost` WHERE  uid = '$uid' ORDER BY posttime DESC ";
}

$result2 = mysqli_query($conn,$sql);

?>

<div style="width: 45% ;height:400px;overflow:auto;margin-right: 100px; margin-top: 20px; margin-bottom: 60px; position:relative;float: right">
  <h3>Your Posts</h3>
    <table class="w3-table-all"  id="header-fixed">
      <thead>
      <tr class="w3-blue">
        <th>Region </th>
        <th>Education level</th>
        <th>Avalible Day</th>
        <th>Price Requested</th>
        <th>Subject</th>
        <th>State</th>
        <th>Rated</th>
      </tr>
    </thead>
    <?php
      while ($row = mysqli_fetch_assoc($result2)) {
        # code...
        if($type == 'tutor'){
          $pid = $row['tpid'];
        }else if($type == 'student'){
          $pid = $row['spid'];
        }
        echo '<tr>';
        echo'<td><a href=manage.php?type='.$type.'&pid='.$pid.'>'.$row['region'].'</a></td>';
        echo'<td>'. $row['edlevel'].'</td>';
        echo'<td>'. $row['day'].'</td>';
        echo'<td>'. $row['price'].'</td>';
        echo'<td>'. $row['subject'].'</td>';
        if($row['active'] == 1){
          echo'<td>Unaccepted</td>';
        }else if($row['active'] == 0){
          echo'<td>Accepted</td>';
        }
        if($row['rated'] == 1){
          echo'<td>Rated</td>';
        }else if($row['rated'] == 0){
          if($row['active'] == 0 && $type == "student"){
            echo'<td><a href=rate.php?type='.$type.'&pid='.$pid.'>Not rated</a></td>';
          }else{
             echo'<td>Not rated</td>';
          }

         
        }
        echo '</tr>';
      }

    ?>
    

  </table>

    </div>


</div>	

<?php 

if($type == 'tutor'){
  $sql = "SELECT * FROM `applysp` WHERE  applyuid = '$uid' ORDER BY applytime DESC ";
}else if($type == 'student'){
  $sql = "SELECT * FROM `applytp` WHERE  applyuid = '$uid' ORDER BY applytime DESC ";
}

$result2 = mysqli_query($conn,$sql);




?>
<div style="width: 45% ;height:400px;overflow:auto;margin-right: 100px; margin-top: 20px; margin-bottom: 60px; position:relative;float: right">
  <h3>Applied Posts</h3>
    <table class="w3-table-all"  id="header-fixed">
      <thead>
      <tr class="w3-blue">
        <th>Region </th>
        <th>Education level</th>
        <th>Avalible Day</th>
        <th>Price Requested</th>
        <th>Subject</th>
        <th>State</th>
        <th>Rated</th>
      </tr>
    </thead>
    <?php
      while ($row2 = mysqli_fetch_assoc($result2)) {
        # code...
        if($type == 'tutor'){
          $pid = $row2['spid'];
          $sql = "SELECT * FROM `stupost` WHERE  spid = '$pid' ORDER BY posttime DESC ";
        }else if($type == 'student'){
          $pid = $row2['tpid'];
          $sql = "SELECT * FROM `tutorpost` WHERE  tpid = '$pid' ORDER BY posttime DESC ";
        }
        $result3 = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result3);

        if($type == 'tutor'){
          $pid = $row['spid'];
        }else if($type == 'student'){
          $pid = $row['tpid'];
        }
        echo '<tr>';
        if($type == 'tutor'){
          echo'<td><a href=viewpost.php?type=student&pid='.$pid.'>'.$row['region'].'</a></td>';
        }else{
           echo'<td><a href=viewpost.php?type=tutor&pid='.$pid.'>'.$row['region'].'</a></td>';
        }
       
        echo'<td>'. $row['edlevel'].'</td>';
        echo'<td>'. $row['day'].'</td>';
        echo'<td>'. $row['price'].'</td>';
        echo'<td>'. $row['subject'].'</td>';
        if($row['active'] == 1){
          echo'<td>Unaccepted</td>';
        }else if($row['active'] == 0){
          echo'<td>Accepted</td>';
        }
        if($row['rated'] == 1){
          echo'<td>Rated</td>';
        }else if($row['rated'] == 0){
          if($row['active'] == 0 && $type == "student"){
            if($type =='tutor'){
              echo'<td><a href=rate.php?type=student&pid='.$pid.'>Not rated</a></td>';
            }else{
             echo'<td><a href=rate.php?type=tutor&pid='.$pid.'>Not rated</a></td>';
            }
          }else{
             echo'<td>Not rated</td>';
          }

         
        }
        echo '</tr>';
      }

    ?>
    

  </table>

    </div>



<script>
function openMenu() {
  document.getElementById("main").style.marginLeft = "15%";
  document.getElementById("Menu").style.width = "15%";
  document.getElementById("Menu").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function closeMenu() {
    document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("Menu").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
function Go() {
  window.location = "changepassword.php?";
}

</script>
<script src="https://www.w3schools.com/lib/w3codecolor.js"></script>
<script>
w3CodeColor();
</script>

</body>


</html>