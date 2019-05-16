<?php
include("config.php");
            include('database_connection.php');
            $myuid = $_COOKIE['userid'];

            $sql=$dbh->prepare("SELECT * FROM `chatbox` where fromid = '$myuid' ORDER BY newtime DESC");
            $sql->execute();
            while($row=$sql->fetch()){

              $uid = $row['toid'];
              $sqli =  "SELECT * FROM `user` WHERE userid = '$uid' ";
              $result = mysqli_query($conn,$sqli);
              $row2 = mysqli_fetch_assoc($result);
              $name = $row2['firstname'] .' '. $row2['lastname'];

             echo "<ul class='friend-list'>
                <li class='active bounceInDown'>
                  <a class='clearfix' href='chatroom.php?nowuid=" .$uid. "'>
                    <img src='https://bootdey.com/img/Content/user_1.jpg' alt='' class='img-circle'>
                    <div class='friend-name'> 
                      <strong>" .$name. "</strong>
                    </div>
                    <div class='last-message text-muted'>{$row['newmsg']}</div>
                  </a>
                </li>
               </ul>";

            }

               if(!isset($_SESSION['user']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest'){
                echo "<script>window.location.reload()</script>";
              }

?>