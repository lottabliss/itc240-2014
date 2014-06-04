<!DOCTYPE html>
<html>
	<head>
		<index>Book Emporium of Skaggway</index>
	<style>
body{
		background-color:black;
		font-family:Tahoma;
	}
		#bandy{
			background:black;
			color:white;
			margin-bottom:20px;
			padding-bottom:10px;
			width:100%;
		}
		#one{
			max-width:16.5%;
			min-width:16.5%;		
			background: linear-gradient(45deg,#cedce7,#596a72);
			background:-moz-linear-gradient(45deg,#cedce7,#596a72);
			float:left;
		}
		#thumb{
			max-width:125px;
			max-height:175px;
			
		}
		#tiny{
			font-size:x-small
		}
		#signin{
			background-color:white;
			color:black;
			float:right;
			padding:30px;
			min-width:300px;
			max-width:300px;
			
		}
		h1{
			text-align:center;
			font-family:Tahoma;
			font-size:20px;
			font-weight: bold;
			font-color:black;
			background-color:white;
			border-radius:300px;
			border:10px solid black;
			padding:5px;
			
			}
				#footer{
		 	position:absolute;
			top:92%;
		}
		.clear{
			clear:all;
		}
	@media only screen and (max-width: 480px) {
			thumb{
				max-width:50px;
				max-height:70px;
				
			}
	}		</style>
		</head>
		<body>

	</style>
	
	</head>
</html>
<?php
include("passwords.php");
/* tell the stupid computer who and where you are*/
$mysql = new mysqli("localhost", "cquinn03", $mysql_password, "cquinn03");
/* make a query, call it $result*/
$result = $mysql->query('SELECT * FROM cqbooks ORDER BY author ASC, title ASC;');
/* ok, say the query again, this time call it $query and don't do anything special, no ORDER BY*/
$query = $mysql->prepare("SELECT * FROM cqbooks;");
$query->execute();
/*do a loop through the rows, for each row, run the first thing you called the query ($result) - as $row, your row*/
?>
<hr>
<div id="bandy">
<?php
$name = "";

echo "Before requiest:$name";

if (isset($_COOKIE["your_name"])){
$name = $_COOKIE["your_name"];
}

echo "after request:$name";
if (isset($_REQUEST["name"]))
{
setcookie("your_name", $_REQUEST["name"]
,
time() + 5 * 60,
"/",
".no-ip.org"
);
$name = $_REQUEST["name"];

}

?>
	
	
	
	Welcome to the Enormous Skaggway Book Emporium. We have 6, count 'em, SIX, books! 
	<br>
		<form id="form" method="post" action=".php">

			
				<br><label for="type">type of expense:</label>
				<p>
					<input type="radio" name="pics" value="wit" required>
					view book covers
					<br>
					<input type="radio" name="pics" value="witout" required>
					view title/author
					<br>
	sign in now: <input type="text" value="name"> 
	<input type="submit" value="sign me up!">
	</form>
</div>
<?php
foreach ($result as $row) {
?>
		<div id="one"><div id="box"><img src="images/<?= $row["image"] ?>">
			<br>
		<?= $row["author"] ?><br><b><?=$row["title"]?></b></div></div>
<?php
}
/*if (isset($_REQUEST ["witout"]));or s
 * 
 * else{
	foreach ($result as $row){
		<ul>
		<li><?row["author"] ?>, <b><?row["title"]</b>
		
		
	}*/
?>
