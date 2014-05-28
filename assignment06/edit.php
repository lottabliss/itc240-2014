<?php
include("passwords.php");
$mysql = new mysqli(
"localhost",
"cquinn03",
$mysql_password,
"cquinn03");


$query = 'INSERT INTO skinnykitty (excersize,duration,kcal,DAY) values(?,?,?,NOW());';

$prepared = $mysql->prepare($query);
$prepared->bind_param("sdd", $_REQUEST["excersize"], $_REQUEST["duration"],$_REQUEST["kcal"]);
$prepared->execute();
//now send it back
header("Location: index.php");