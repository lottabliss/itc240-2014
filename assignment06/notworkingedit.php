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

//make another type of sum
$sumQuery27 = $mysql->prepare('SELECT SUM(kcal as Sum27 FROM skinnykitty WHERE DAY = 2014-05-27');
$sumQuery26 = $mysql->prepare('SELECT SUM(kcal as Sum26 FROM skinnykitty WHERE DAY = 2014-05-26');
$sumQuery25 = $mysql->prepare('SELECT SUM(kcal as Sum25 FROM skinnykitty WHERE DAY = 2014-05-25');

//make a sum query variable
$sumQuery = $mysql->prepare('SELECT SUM(kcal)as Sum FROM skinnykitty;');

$sumQuery->execute();
$sumQuery27->execute();
$sumQuery26->execute();
$sumQuery25->execute();

$sumResult = $sumQuery->get_result();
$sumResult27 = $sumQuery27->get_result();
$sumResult26 = $sumQuery26->get_result();
$sumResult25 = $sumQuery25->get_result();

//gives you back an object you can LOOP OVER. but there is just one thing.

$sum = $sumResult->fetch_array();
$sum27 = $sumResult27->fetch_array();
$sum26 = $sumResult26->fetch_array();
$sum25 = $sumResult25->fetch_array();
//instead of looping over, since it is one thing.
//I ask for an array - for each replaced while fetcharray
?>
</div>
<div id="white">
Your Kitty burned about :<?= $sum["Sum"]?> calories total.
<br> on May 27, <?=$sum27["Sum27"]?> May 26, <?=$sum26["Sum26"]?>  and 25,  <?=$sum25["Sum25"]?> .

</div>

</body>
</html>