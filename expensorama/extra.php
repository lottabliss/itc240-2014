<?php
include("passwords.php");
$mysql = new mysqli(
"localhost",
"cquinn03",
$mysql_password,
"cquinn03");
$prepared = $mysql->prepare('SELECT * FROM expenseorama');

$prepared->execute();
$results = $prepared->get_result();

foreach ($results as $row){

?>

	<div id="sorter"> 

	<?=htmlentities($row["catagory"])?> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<?=htmlentities($row["amount"])?></td>
&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<?=htmlentities($row["detail"])?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<?=htmlentities($row["date"])?>
<hr>

</div>
<?php

}
$sumQuery = $mysql->prepare('SELECT SUM(amount)as Total FROM expenseorama;');
$sumQuery->execute();
$sumResult = $sumQuery->get_result();
$sum = $sumResult->fetch_array();
?>
</div>
