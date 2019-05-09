<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="jquery-3.4.0.min.js"></script>
<title>Home Page</title>
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
form{
  display: inline-block;
  width: 50%;
}
input{
margin-top: 8px;
}

.row{
  margin-top: 20px;
}
#input3{
  margin-top: 20px;
  margin-bottom: 20px;
}

</style>
</head>
<body>
	

	<div class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left" style="display:none" id="Menu">
  		<button onclick="closeMenu()" class="w3-bar-item w3-button w3-large">&times;</button>

    <a  href = "loginhomepage.php" class="w3-bar-item w3-button w3-black "><i class="fa fa-home"></i> <i>Home Page</i></a>
	 	<a  href = "personalpage.php" class="w3-bar-item w3-button w3-black "> <i>Personal Page</i></a>
    <a  href = "post.html" class="w3-bar-item w3-button w3-black "><i> Upload</i> </a>
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
   <a  href = "post.html" class="w3-bar-item w3-button w3-black w3-round-large"><i> Upload</i> </a>
   <a  href = "/chat" class="w3-bar-item w3-button w3-black w3-round-large"><i> Chat Room</i> </a>
   <a  href = "search.html" class="w3-bar-item w3-button w3-black w3-round-large"><i> Search </i></a>
   <a  href = "contactus.php" class="w3-bar-item w3-button w3-black w3-round-large"><i> Contact Us</i></a>
   <a  href = "logout.php" class="w3-bar-item w3-button w3-black "><i> Logout</i></a>
	</div>
	</div>
  </div>
</div>


  <div>
      <h1>Change Password</h1>
  </div>
<div style="width: 100% ;height:400px;overflow:auto;margin-left: 120px; margin-top: 20px; margin-bottom: 60px; position:relative;">
      <form name="myForm" class="w3-container w3-card-4 w3-light-grey w3-margin" onsubmit="return validateForm()" action = "change.php" method="post">

    <div class="w3-container w3-animate-opacity">
      <p>
        <label>Old password</label>
        <input class="w3-input" type="password" name="oldpassword"></p>
        <p>
        <label>New password</label>
        <input class="w3-input" type="password"  name="newpassword"></p>
        <p>
      <button class="w3-btn w3-brown" type = "submit" name="change" value="login" >Change</button>  
        </p>
      </div>
  </form>
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

var slider = document.getElementById("priceSlider");
var output = document.getElementById("price");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}

</script>
<script src="https://www.w3schools.com/lib/w3codecolor.js"></script>
<script>
function validateForm() {
  var a = document.forms["myForm"]["oldpassword"].value;
  var b = document.forms["myForm"]["newpassword"].value;
  if(a == b){
    alert("Old password cannot be same with New password");    
    return false;
  }

  if (a == "" || b == "" ) {
    alert("Old password and New password must be filled out");
    return false;
  }
}


</script>

</body>


</html>