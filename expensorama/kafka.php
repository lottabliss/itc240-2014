<?php

include("passwords.php");
$mysql = new mysqli("localhost","cquinn03",$mysql_password,"cquinn03");

$query = 'INSERT into expenseorama(catagory,detail,location,amount,date) VALUES (?,?,?,?,date(NOW));';

/*that's 3 strings and 1 float - FOUR QUESTION MARKS - my date is a given*/
$prepared = $mysql->prepare($query);

/* I bind-param, which means nothing to me. here is s- catagory, s-detail, s-location and d-amount*/
$prepared->bind_param("sssd",$_REQUEST["catagory"],$_REQUEST["detail"],$_REQUEST["location"],$_REQUEST["amount"]);
$prepared->execute();

header("Location: index.php");
