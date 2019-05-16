<?php include("config.php");?>
<!DOCTYPE html>
<html>
<head>
  <script src="jquery-latest.js"></script>
  <script src="chat.js"></script>
  <link href="chat.css" rel="stylesheet"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-green.css">
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

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: MediumSeaGreen;
    color: white;
}

.bg-white {
  background-color: #fff;
}

.friend-list {
  list-style: none;
margin-left: -40px;
}

.friend-list li {
  border-bottom: 1px solid #eee;
}

.friend-list li a img {
  float: left;
  width: 45px;
  height: 45px;
  margin-right: 0px;
}

 .friend-list li a {
  position: relative;
  display: block;
  padding: 10px;
  transition: all .2s ease;
  -webkit-transition: all .2s ease;
  -moz-transition: all .2s ease;
  -ms-transition: all .2s ease;
  -o-transition: all .2s ease;
}

.friend-list li.active a {
  background-color: #f1f5fc;
}

.friend-list li a .friend-name, 
.friend-list li a .friend-name:hover {
  color: #777;
}

.friend-list li a .last-message {
  width: 65%;
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
}

.friend-list li a .time {
  position: absolute;
  top: 10px;
  right: 8px;
}

small, .small {
  font-size: 85%;
}

.friend-list li a .chat-alert {
  position: absolute;
  right: 8px;
  top: 27px;
  font-size: 10px;
  padding: 3px 5px;
}

.chat-message {
  padding: 60px 20px 115px;
}

.chat {
    list-style: none;
    margin: 0;
}

.chat-message{
    background: #f9f9f9;  
}

.chat li img {
  width: 45px;
  height: 45px;
  border-radius: 50em;
  -moz-border-radius: 50em;
  -webkit-border-radius: 50em;
}

img {
  max-width: 100%;
}

.chat-body {
  padding-bottom: 20px;
}

.chat li.left .chat-body {
  margin-left: 70px;
  background-color: #fff;
}

.chat li .chat-body {
  position: relative;
  font-size: 11px;
  padding: 10px;
  border: 1px solid #f1f5fc;
  box-shadow: 0 1px 1px rgba(0,0,0,.05);
  -moz-box-shadow: 0 1px 1px rgba(0,0,0,.05);
  -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
}

.chat li .chat-body .header {
  padding-bottom: 5px;
  border-bottom: 1px solid #f1f5fc;
}

.chat li .chat-body p {
  margin: 0;
}

.chat li.left .chat-body:before {
  position: absolute;
  top: 10px;
  left: -8px;
  display: inline-block;
  background: #fff;
  width: 16px;
  height: 16px;
  border-top: 1px solid #f1f5fc;
  border-left: 1px solid #f1f5fc;
  content: '';
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
}

.chat li.right .chat-body:before {
  position: absolute;
  top: 10px;
  right: -8px;
  display: inline-block;
  background: #fff;
  width: 16px;
  height: 16px;
  border-top: 1px solid #f1f5fc;
  border-right: 1px solid #f1f5fc;
  content: '';
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
}

.chat li {
  margin: 15px 0;
}

.chat li.right .chat-body {
  margin-right: 70px;
  background-color: #fff;
}

.chat-box {
  
  bottom: 0;
  right: 0;
  padding: 15px;
  border-top: 1px solid #eee;
}

.primary-font {
  color: #3c8dbc;
}

a:hover, a:active, a:focus {
  text-decoration: none;
  outline: 0;
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
      <h1>View Post</h1>
  </div>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootstrap snippet">
    <div class="row" >
    <div class="col-md-4 bg-white " style="width: 50%; height:530px; overflow:auto;float: left; margin-top:20px">
            <div class=" row border-bottom padding-sm" style="height: 40px;">
              Members
            </div>
            <div class="chat-member" >
            <?php
              include("chatmember.php");

            ?>
            </div>

           </div>
        
        <!--=========================================================-->
        <!-- selected chat -->
    <div class="chat">
      <div class="col-md-8 bg-white " style="width: 50%; height:530px; overflow:auto;float: right;margin-top:20px">
            <div class="chat-message" >


              <?php
                if(isset($_GET['nowuid'])){
                  $_SESSION['nowuid']=$_GET['nowuid'];
                }
                include("msgs.php");
                
              ?>


            </div>
            </div>




           
            <form id="msg_form">
              <div class="chat-box bg-white" style="width: 50%; float: right">
              <div class="input-group">
                <input class="form-control border no-shadow no-rounded" placeholder="Type your message here" id= "msg" name="msg" size="30" type="text"/>
                <span class="input-group-btn">

                <button class="btn btn-success no-rounded">Send</button>
                  
                </span>
                </span>
              </div>
          </div>
          </form>



    </div>        
  </div>



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

  var a = document.getElementById("msg").value;
  var b = "<?php echo $nowuid ?>";
  window.location = "send.php?msg="+a+'&toid='+ b;


}

</script>
<script src="https://www.w3schools.com/lib/w3codecolor.js"></script>
<script>
w3CodeColor();
</script>

</body>


</html>