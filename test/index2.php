<html>
<head>
<title>Welcome Home Page</title>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>


body{
    background-image: url("b2.jpg");
    background-color: #cccccc;
    background-repeat: repeat;
    background-size: auto;
	}


#button1{padding:10px 32px; 
		text-align: center; 
		margin-left:730px ;
		border-radius: 8px;
		background-color:#4682B4; 
		color: white;
		box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		}

#button2{padding:10px 32px;
		 text-align: center; 
		 margin-left:200px;
		border-radius: 8px;
		background-color:#4682B4; 
		color: white;
		box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);}

	h1{text-align:center; 
		color:	#000000;
		text-shadow: 3px 2px #708090;
		font-size: 50px; 
		font-style: italic;
		font-variant: small-caps;
		font-family: 'Open Sans';
		border: 50px solid transparent;
   		 padding: 10px;
   		 background-image: url("1.jpg");
    	-webkit-border-image: url(1.jpg) 30 round; /* Safari 3.1-5 */
   		 -o-border-image: url(1.jpg) 30 round; /* Opera 11-12.1 */
    	border-image: url(1.jpg) 30 round;

	}

	p{text-align:center; 
		color:	white;
		text-shadow: 4px 4px black;
		font-size: 35px; 
		font-family: 'Open Sans';
		font-style: italic;
		font-variant: small-caps;

		}


</style>
</head>
<body>

	<img src="logo.jpg" alt="logo">

<div class="w3-container w3-center w3-animate-opacity ">
	<h1>Welcome to our page!</h1>
</div>

<div class="w3-container w3-center w3-animate-bottom ">	
<p>Introduction of features</p>
<p>You can find tutors or students without agency fees!<p>
<p>You can search and chat with your targets directly in this page!</p>
<p>Our page is good! Please use our page! </p>
</div>

	<div class="w3-container w3-center >
	<div class="w3-bar">
		<button class="w3-bar-item w3-button w3-black w3-round-large" onclick="goLogin()">Login!!</button>
		<button class="w3-bar-item w3-button w3-white w3-hover-blue w3-round-large" onclick = "goRegister()">Register</button>
	</div>
	</div>

	<div class="w3-container w3-center"">
	<div class="w3-bar">
	<p><a href = "/contactus" class="w3-bar-item w3-button  w3-round-large "> Contact Us</a></p>
	</div>
	</div>

<script>
	function goLogin(){
		location.href = "login.html";
	}
	
	function goRegister(){
		location.href = "register.html";
	}


</script>


</body>


</html>