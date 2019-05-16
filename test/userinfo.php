<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Search Page</title>
<style>

body{

  }

#p1{ color:red;font-size: 30px;

color:  #F5F5F5;
  text-shadow: 4px 4px black;}

#p2{ color:red;font-size: 30px;

color:  #F5F5F5;
  text-shadow: 4px 4px black;}

.column{
  margin:50px;
  margin-left: 150px;
  float: left;
  width: 30%;
  height: 300px;
  color:  #F5F5F5;
  text-shadow: 4px 4px black;
}
.row:after{
  content:"";
  display: table;
  clear: both;
  color:  #F5F5F5;
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
<?php
include('database_connection.php');
$uid = $_GET['uid'];


$sql = "SELECT * FROM `user` WHERE userid = '$uid' ";
$result = mysqli_query($conn,$sql);
$count = 0;
 while ($row = mysqli_fetch_assoc($result)) {
 	$count = 1;
	echo '<div style="width: 55%; height:400px; overflow:auto;margin-right: 150px; margin-top: 0px; margin-bottom: 60px; position:relative; float: right"><div><h3>Personal Information</h3></div><table class="w3-table-all" id="header-fixed"><thead>';


        # code...
        echo '<tr ><th class="w3-blue">First Name </th>';
        echo '<td>'. $row['firstname'].'</td>';
        echo'</tr><tr ><th class="w3-blue">Last Name</th>';
        echo'<td>'. $row['lastname'].'</td>';
        echo'</tr><tr><th class="w3-blue" >Gender</th>';
        echo'<td>'. $row['sex'].'</td>';
        echo '</tr>';
      echo '</thead></table></div>';
}
if($count == 0){
	echo'Applier information will be listed below...';
}

?>
</body>
</html>
