<?php
include("config.php");
$toid= $_SESSION['toid'];
$msg = $_POST['msg'];
$fromid = $_COOKIE['userid'];

if(!isset($_SESSION['user']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest'){
 die("<script>window.location.reload()</script>");
}


 $msg=htmlspecialchars($msg);
 if($msg!=""){
  $sql=$dbh->prepare("INSERT INTO `chatmsg` (fromid,toid,msg) VALUES ('$fromid','$toid','$msg')");
  $sql->execute();

  $sql=$dbh->prepare("UPDATE `chatbox` SET newmsg = '$msg', newtime = NOW() WHERE fromid ='$toid' AND toid = '$fromid';");
  $sql->execute();
 }

//header("location: chatroom.php?nowuid=".$toid);

?>
