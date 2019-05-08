<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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


</style>
</head>
<body>
	

	<div class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left" style="display:none" id="Menu">
  		<button onclick="closeMenu()" class="w3-bar-item w3-button w3-large">&times;</button>
    <a  href = "loginhomepage.php" class="w3-bar-item w3-button w3-black "> <i class="fa fa-home"></i><i>Home Page</i></a>
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
    <i>For Help <i>

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
      <h1>Contact Us</h1>
  </div>


<div style="width: 50% ;height:300px; overflow:auto; margin-left: 150px; margin-top: 20px; margin-bottom: 20px; position:relative;">
    <table class="w3-table-all">
      <thead>
       <tr class="w3-blue" >
        <th>Developers</th>
        <th>Contact</th>
        </tr>
    </thead>
  


    <tr>
      <td>Tong</td>
      <td>tong@gmail.com</td>
    </tr>

    <tr>
      <td>Ng</td>
      <td>ng@gmail.com</td>
    </tr>

    <tr>
      <td>Chan</td>
      <td>chan@gmail.com</td>
    </tr>

    </table>

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
</script>
<script src="https://www.w3schools.com/lib/w3codecolor.js"></script>
<script>
w3CodeColor();
</script>

</body>


</html>