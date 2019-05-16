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

div.col-25,div.col-75{
  margin-top: 15px;
  margin-bottom: 15px;
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
div#input4{
  margin-right: 120px;
} 
tr{
  width: 30%;
}

h1{
  margin-left: 150px;
  margin-top: 30px;
}

label{
  margin-top: 30px;
  margin-bottom: 30px;
}
form{
  font-size:1.3vw;
  height: 180px;
}



</style>
</head>
<body>
	

	<div class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left" style="display:none" id="Menu">
  		<button onclick="closeMenu()" class="w3-bar-item w3-button w3-large">&times;</button>
    <a  href = "loginhomepage.php" class="w3-bar-item w3-button w3-black "> <i class="fa fa-home"></i><i>Home Page</i></a>
  	<a  href = "personalpage.php" class="w3-bar-item w3-button w3-black "> <i>Personal Page</i></a>
	 	<a  href = "prepost.php" class="w3-bar-item w3-button w3-black "><i> Upload</i> </a>
	 	<a  href = "chatroom.php" class="w3-bar-item w3-button w3-black "><i> Chat Room</i> </a>
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
	 <a  href = "chatroom.php" class="w3-bar-item w3-button w3-black w3-round-large"><i> Chat Room</i> </a>
	 <a  href = "search.html" class="w3-bar-item w3-button w3-black w3-round-large"><i> Search </i></a>
	 <a  href = "contactus.php" class="w3-bar-item w3-button w3-black w3-round-large"><i> Contact Us</i></a>
   <a  href = "logout.php" class="w3-bar-item w3-button w3-black "><i> Logout</i></a>
	</div>
	</div>
  </div>
</div>


  <div>
      <h1>Manage Your Post</h1>
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
  <?php 
    if($type == 'tutor'){
      $sql = "SELECT * FROM `applytp` WHERE tpid = '$pid' ORDER BY applytime DESC ";
    }else if($type == 'student'){
      $sql = "SELECT * FROM `applysp` WHERE spid = '$pid' ORDER BY applytime DESC ";
    }
    
    $result2 = mysqli_query($conn,$sql);
    
    if($type == 'tutor'){
      $sql = "SELECT * FROM `tutorpost` WHERE tpid = '$pid'";
    }else if($type == 'student'){
      $sql = "SELECT * FROM `stupost` WHERE spid = '$pid'";
    }
    $result3 = mysqli_query($conn,$sql);
    $show = mysqli_fetch_assoc($result3);
    $active = $show['active'];
    
    ?>

    </thead>

  </table>

    <?php
      if($active == '1'){
        echo "<div class='w3-container w3-center'>
              <div class='w3-bar'>    
              <p> <a onclick = 'Cancel()' class='w3-bar-item w3-button  w3-round-large w3-green'> Cancel this post </a></p>
              </div>
              </div>";
      }
    ?>
    
</div>



<div style="width: 25% ;height:400px;overflow:auto;margin-right: 250px; margin-top: 20px; margin-bottom: 60px; position:relative; float:right;">
    <div>
      <h3>Applied people<h3>
    </div>
    <form name="myForm"   method = "POST" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">

      <div class="row">
      <div class="col-25">
        <label for="region">Target:</label>
        </div>
        <div class="col-75">
        

          <?php


          if($active == '1'){
            
            if($result2->num_rows != 0){
                echo "<select required name = 'target'>";
                 echo "<option value = ''></option>";
                while ($row = mysqli_fetch_assoc($result2)) {
                  echo "<option value = ".$row['applyuid']. ">".$row['firstname'].' '.$row['lastname']."</option>";
                     
                  }
                echo "</select>";

            }else{
                echo "<h3>No one has applied yet</h3>";
            }
            

          }else{

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

           
          }

          
          ?>

        
      </div>
    </div>
    <?php

    if($result2->num_rows != 0){
    if($active == '1'){
     ?>
      <div id='input4' class='w3-container w3-center' style="margin-bottom: 50px;">
            <div class='w3-bar'>    
            <p> <a onclick="Go()" name='accept' type='submit' value="Accept" class='w3-bar-item w3-button  w3-round-large w3-blue'>Accept</a></p>
            </div>
            </div>
   <?php   }
    }
    ?>
    

    </form>
<?php
if($active =="1"){
?>
    </div>
<div id="txtHint"  style="float: right;margin-right: 50px;width: 55%; height:400px;" >Applier information will be listed below...</div>

</div>	
<?php
}
?>
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

function Go() {
  var a = document.forms["myForm"]["target"].value;
  var b = "<?php echo $type ?>";
  var c = "<?php echo $pid ?>";
    if (a == "" ) {
    alert("Select a target before submission");
  }else{
  window.location = "accept.php?applyuid="+a+'&type='+ b +'&pid='+ c;
//  alert(d);
} 

}
function Cancel(){
  var a = "<?php echo $type ?>";
  var b = "<?php echo $pid ?>";
  window.location = 'cancel.php?type='+ a +'&pid='+ b;
}
</script>

<script src="https://www.w3schools.com/lib/w3codecolor.js"></script>
<script>
w3CodeColor();
document.forms["myForm"]["target"].addEventListener("change",sqlcomu);

  function sqlcomu(){
  var b = document.forms["myForm"]["target"].value;
 // alert(b== "");
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "userinfo.php?uid="+b, true);
  xhttp.send();


  }

function validateForm() {
  var a = document.forms["myForm"]["target"].value;
alert("abc123");
  alert(a=="");
  if (a == "" ) {
    alert("Select a target before submission");
    return false;
  }
}

</script>

</body>


</html>