<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>Skinny Kitty</h1>
<div id="whitebg">
<form method="POST" action="edit.php">
<input placeholder = "excersize" name ="excersize">
<input placeholder = "kcal" name ="kcal">
<input type="submit">
</form>



<!--first connect to database-->
<?php
include("passwords.php");
$mysql = new mysqli(
"localhost",
"cquinn03",
$mysql_password,
"cquinn03");
$prepared = $mysql->prepare('SELECT * FROM skinnykitty');
//don't need to bind - no parameters, nothing to substitute
$prepared->execute();
$results = $prepared->get_result();

//------now do a for each loop-----

foreach ($results as $row){

?>
<!--leaving php mode to write pure html-->

<div> 

	<?=htmlentities($row["kcal"])?>
	calories <i>from</i> 
	<?=htmlentities($row["excersize"])?>
	 <i>on</i>
<?=htmlentities($row["DAY"])?>
<hr>

</div>
<?php
//----------end your php squiggly line---------
}
//make a sum query variable
$sumQuery = $mysql->prepare('SELECT SUM(kcal)as Sum FROM skinnykitty;');

$sumQuery->execute();
$sumResult = $sumQuery->get_result();

//gives you back an object you can LOOP OVER. but there is just one thing.

$sum = $sumResult->fetch_array();

//instead of looping over, since it is one thing.
//I ask for an array - for each replaced while fetcharray
?>
</div>

<!--now let's add the info to that form-->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //prepare query - like sending a delivery truck
  //first we write query - like getting an address
  //note: the NOW() function inserts the current date/time as the value
  $query = 'INSERT INTO skinnykitty(excersize, kcal,Duration, DAY) VALUES (?, ?, NOW());';
  //preparing is like calling for a truck
  $prepared = $mysql->prepare($query);
  //binding params = loading the truck with values
  $prepared->bind_param("ss", $_REQUEST["excersize"], $_REQUEST["kcal"], $_REQUEST["Duration"],$_REQUEST["DAY"]);
  //executing sends the delivery to the database
  $prepared->execute();
}?>
<div id="white">
Your Kitty burned about :<?= $sum["Sum"]?> calories. Better luck next time.

</div>
</body>
</html>