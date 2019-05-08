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
$identity = $_GET['identity'];
$sql = $_GET['sql'];


$result = mysqli_query($conn,$sql);

if($identity == "tutor"){
	echo '<div style="width: 45%; height:500px; overflow:auto;margin-right: 50px; margin-top: 20px; margin-bottom: 60px; position:relative; float:right"><table class="w3-table-all" id="header-fixed"><thead><tr class="w3-green"><th>Region </th><th>Education level</th><th>Avalible Day</th><th>Price Requested</th><th>Subject</th></tr></thead>';
      $count = 0;
      while ($row = mysqli_fetch_assoc($result)) {
        $count =1;
        # code...
        echo '<tr>';
        echo'<td><a href=viewpost.php?type=tutor&pid='.$row['tpid'].'>'.$row['region'].'</a></td>';
        echo'<td>'. $row['edlevel'].'</td>';
        echo'<td>'. $row['day'].'</td>';
        echo'<td>'. $row['price'].'</td>';
        echo'<td>'. $row['subject'].'</td>';
        echo '</tr>';

      }
      if($count == 0){
        echo '<tr>';
        echo '<td>';
        echo 'No result matched';
        echo '</td></tr>';
      }
      echo '</table></div>';

}else{
	echo '<div style="width: 45%; height:500px; overflow:auto;margin-right: 50px; margin-top: 20px; margin-bottom: 60px; position:relative; float:right"><table class="w3-table-all" id="header-fixed"><thead><tr class="w3-green"><th>Region </th><th>Education level</th><th>Avalible Day</th><th>Price Requested</th><th>Subject</th></tr></thead>';
      $count = 0;
      while ($row = mysqli_fetch_assoc($result)) {
        # code...
        $count=1;
        echo '<tr>';
        echo'<td><a href=viewpost.php?type=student&pid='.$row['spid'].'>'.$row['region'].'</a></td>';
        echo'<td>'. $row['edlevel'].'</td>';
        echo'<td>'. $row['day'].'</td>';
        echo'<td>'. $row['price'].'</td>';
        echo'<td>'. $row['subject'].'</td>';
        echo '</tr>';

      }

         if($count == 0){
        echo '<tr>';
        echo '<td>';
        echo 'No result matched';
        echo '</td></tr>';
      }
      echo '</table></div>';
}

?>
</body>
</html>
