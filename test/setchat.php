<?php
include("config.php");

$uid = $_GET['uid'];
$type = $_GET['type'];
$myuid = $_COOKIE['userid'];

$sql=$dbh->prepare("INSERT INTO `chatbox` (fromid, toid)
SELECT * FROM (SELECT '$uid', '$myuid') AS tmp
WHERE NOT EXISTS (
SELECT * FROM `chatbox` WHERE fromid = '
$uid' AND toid = '$myuid')");
$sql->execute();

$sql=$dbh->prepare("INSERT INTO `chatbox` (fromid, toid)
SELECT * FROM (SELECT '$myuid', '$uid') AS tmp
WHERE NOT EXISTS (
SELECT * FROM `chatbox` WHERE fromid = '$myuid' AND toid = '
$uid')");
$sql->execute();

header('location: chatroom.php');


?>