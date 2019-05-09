<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>View Post</title>
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
label{
  margin-top: 10px;
}
select{
  margin-top: 10px;
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
	 	<a  href = "search.html" class="w3-bar-item w3-button w3-black "><i> Search </i></a>
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
	 <a  href = "search.html" class="w3-bar-item w3-button w3-black w3-round-large"><i> Search </i></a>
	 <a  href = "contactus.php" class="w3-bar-item w3-button w3-black w3-round-large"><i> Contact Us</i></a>
   <a  href = "logout.php" class="w3-bar-item w3-button w3-black "><i> Logout</i></a>
	</div>
	</div>
  </div>
</div>


  <div>
      <h1>Rate Post</h1>
  </div>

<?php 
include('database_connection.php');
$pid = $_GET['pid'];
$type = $_GET['type'];
$uid;

if($type == 'tutor'){
  $sql = "SELECT * FROM `tutorpost` WHERE tpid = '$pid' ";
}else if($type == 'student'){
  $sql = "SELECT * FROM `stupost` WHERE spid = '$pid' ";
}

$result = mysqli_query($conn,$sql);
//var_dump($_GET['pid']);
//var_dump($_GET['type']);
?>
    <div style="width: 35%; height:400px; overflow:auto;margin-left: 200px; margin-top: 20px; margin-bottom: 60px; position:relative; float: left;">
      <div>
      <h3>Post Information</h3>
      </div>
      <table class="w3-table-all"  id="header-fixed">
      <thead>
    <?php
      while ($row = mysqli_fetch_assoc($result)) {
        ?>

      <tr >
        <th class="w3-green">Region </th>
        <?php echo'<td>'. $row['region'].'</td>'; ?>
       </tr> 
      <tr >
        <th class="w3-green">Education level</th>
        <?php echo'<td>'. $row['edlevel'].'</td>'; ?>
        </tr> 
         <tr>
        <th class="w3-green" >Avalible Day</th>
        <?php echo'<td>'. $row['day'].'</td>'; ?>
        </tr> 
         <tr>
        <th class="w3-green">
          <?php if($type == 'tutor'){
            echo 'Price Requseted';
          }else if($type == 'student'){
            echo 'Fee';
          }
          ?>
        </th>
        <?php echo'<td>'. $row['price'].'</td>'; ?>
        </tr> 
         <tr>
        <th class="w3-green">Subject</th>
        <?php echo'<td>'. $row['subject'].'</td>'; ?>
      </tr>

 <?php  
  $uid = $row['uid'];
  }
  ?>

    </thead>

  </table>
</div>

<?php 

$sql = "SELECT * FROM `user` WHERE userid = '$uid' ";
$result2 = mysqli_query($conn,$sql);

?>

<div style="width: 25% ;height:400px;overflow:auto;margin-right: 250px; margin-top: 50px; margin-bottom: 60px; position:relative; float:right;">
    <?php if($type == "tutor"){?>
      <div>
      <h3>Personal Information</h3>
    </div>
    <table class="w3-table-all"  id="header-fixed">
      <thead>

       <?php
      while ($row = mysqli_fetch_assoc($result2)) {
        ?>

      <tr >
        <th class="w3-blue">First Name </th>
        <?php echo'<td>'. $row['firstname'].'</td>'; ?>
       </tr> 
      <tr >
        <th class="w3-blue">Last Name</th>
        <?php echo'<td>'. $row['lastname'].'</td>'; ?>
        </tr> 
         <tr>
        <th class="w3-blue" >Gender</th>
        <?php echo'<td>'. $row['sex'].'</td>'; ?>
        </tr> 
         <tr>
        
        <?php 
        if($type == 'tutor'){
            echo'<th class="w3-blue">Rating</th><td>'. $row['rating'].'</td></tr> '; 
          }
        ?>
        

 <?php  } ?>

    </thead>

  </table>
 <?php  } ?>

      <form name="myForm" style="font-size:1.2vw; width: 90%;" action = "post.php" method = "POST" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
        <div class="row">
          <?php if($type == "student"){?>
           <?php
        if($type == 'tutor'){
          $sql = "SELECT * FROM `taccept` WHERE tpid = '$pid'";
        }else if($type == 'student'){
          $sql = "SELECT * FROM `saccept` WHERE spid = '$pid'";
        }
        $result4 = mysqli_query($conn,$sql);
        $show2 = mysqli_fetch_assoc($result4);
        $appuid = $show2['applyuid'];
        $sql = "SELECT * FROM `user` WHERE userid = '$appuid'";
        $result5 = mysqli_query($conn,$sql);
        $show3 = mysqli_fetch_assoc($result5);
        if($type == 'tutor'){
           echo "<h3>Current student is ".$show3['firstname'].' '.$show3['lastname']."</h3>";
        }else{
           echo "<h3>Current tutor is ".$show3['firstname'].' '.$show3['lastname']."</h3>";
        } 
      }?>
      <div class="col-25">
        <label for="rating">Rate:</label>
        </div>
        <div class="col-75">
      <select required name = "rating">
          
            <option value = "1"> 1 </option>
            <option value = "2"> 2</option>
            <option value = "3"> 3 </option>
            <option value = "4"> 4 </option>
            <option value = "5"> 5 </option>
           
        </select> 
        <div class="w3-container w3-center">
        <div class="w3-bar">    
        <p> <a onclick = "pass()" class="w3-bar-item w3-button  w3-round-large w3-blue"> Submit </a></p>
        </div>
        </div>
      </form>
            
       </div>
    </div>
    

</div>	
 <!--Students list from database-->


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
function pass(){
  var a = document.forms["myForm"]["rating"].value;
  var b = "<?php echo $type ?>";
  var c = "<?php echo $pid ?>";
  var d = "<?php echo $uid ?>";
  window.location = 'submitrate.php?rating='+a+'&type='+ b +'&pid='+ c;
}
</script>
<script src="https://www.w3schools.com/lib/w3codecolor.js"></script>
<script>
w3CodeColor();
</script>

</body>


</html>