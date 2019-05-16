<?php
include("config.php");
include('database_connection.php');
                if(isset($_SESSION['nowuid'])){
                  $nowuid= $_SESSION['nowuid'];
                  $_SESSION['toid']= $nowuid;//new

                  $myuid = $_COOKIE['userid'];
                  //echo $nowuid;
                  $sql=$dbh->prepare("SELECT * FROM `chatmsg` 
                  where (fromid = '$myuid' AND toid = '$nowuid') 
                  OR (fromid = '$nowuid' AND toid = '$myuid') 
                  ORDER BY senttime ASC");
                  $sql->execute();

                  while($chat=$sql->fetch()){

                    $uid = $chat['fromid'];
                    $sqli =  "SELECT * FROM `user` WHERE userid = '$uid' ";
                    $result = mysqli_query($conn,$sqli);
                    $row2 = mysqli_fetch_assoc($result);
                    $name = $row2['firstname'] .' '. $row2['lastname'];

                    if($chat['fromid'] == $myuid){

                      echo "<div class='msg' title='{$chat['senttime']}'><ul class='chat'>
                        <li class='right clearfix'>
                          <span class='chat-img pull-right'>
                            <img src='https://bootdey.com/img/Content/user_2.jpg' alt='User Avatar'>
                          </span>
                          <div class='chat-body clearfix'>
                            <div class='header'>
                              <strong class='primary-font'>Me</strong>
                            </div>
                            <p>{$chat['msg']}</p>
                          </div>
                        </li>                
                        </ul></div>";

                    }else{

                    echo "<div class='msg' title='{$chat['senttime']}'><ul class='chat'>
                    <li class='left clearfix'>
                      <span class='chat-img pull-left'>
                        <img src='https://bootdey.com/img/Content/user_1.jpg' alt='User Avatar'>
                      </span>
                      <div class='chat-body clearfix'>
                        <div class='header'>
                          <strong class='primary-font'>" .$name. "</strong>
                        </div>
                        <p>{$chat['msg']}</p>
                      </div>
                    </li>                
                    </ul></div>";

                  }

                 }


                }

                if(!isset($_SESSION['user']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest'){
                echo "<script>window.location.reload()</script>";
              }
?>
