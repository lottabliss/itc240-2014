<!doctype html><!--ok to add cookie here-->
<html>
	<head>
		<script src="js/jquery-1.11.0.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/jquery.ui.core.js"></script>
		<script src="js/jquery.ui.spinner.js"></script>
		<script src="js/jquery.ui.datepicker.js"></script>
		<script src="js/showhide.js"></script>

		<script type="text/javaScript">
			function alertfunny(){
				alert("ha ha, I'm not that good! Maybe next lesson? :)");
			}

			function changeClass(){
			document.getElementById("rightno").setAttribute("id", "righto");
			}
			function closeit(){
			document.getElementById("righto").setAttribute("id", "rightno");
			}
		</script>
		<script type="text/javaScript">
			$(document).ready(function(){
			$("#contact-form").validate();
			$("#currency").change(function() {
			$("#spinner").spinner( "option", "culture", $( this ).val() );		
			$("#spinner").spinner({
			min: 1,
			max: 100000000,
			step: 25,
			start: 1000,
			numberFormat: "C"});
			$("#datepicker").datepicker();
			});
		</script>

	<style>
		body {
			background: black;
			color: grey;
			font-family:"Trebuchet MS";
			font-variant:small-caps;
			font-weight: bold;
		}
		#top{
			position:absolute;
			top:5%;
			left:45%;
		}

		.hidden{
			display:none;
		}
		.show{
			display:block;
		}
		
		a {
			color: #000000;
/*how do I get rid of the underline again?*/
		}
		#righto{
			/*position:absolute;
			left:60%;
			top:8%;*/
			display:block;
			float:left;
			max-width:500px;
			min-width:500px;
			padding-right:10px;
			padding-left:75px;
		}
		#sortbyday,#sortbycatagory,#sortbylocation{
		padding-left:75px;
		}

		#rightno{
			display:none;
		}
		h1{
			padding:2%;
			font-family:"Trebuchet MS";
			background-color:#000;
			color:#888;
			text-align:center;
			border-top:5px solid #bf000f;
			border-bottom:5px solid #bf000f;
		}
		#roundy {
			min-width: 300px;
			max-width: 300px;
			border: 5px solid #bf000f;
			border-radius: 4px;
			background-color: grey;
			color: #000000;
			float:left;
			
		}
		#wrapper{
			max-width:900px;
			min-width:900px;
		}
		input, button, textarea {
			color: black;
			border: 1px solid #556677;
			border-radius: 3px;
			padding-left: 5px;
			padding-right: 15px;
			padding-top: 2px;
		}
		#footer{
		 	position:absolute;
			top:92%;
		}
	@media only screen and (max-width: 480px) {
		#top{
			position:absolute;
			top:1%;
			left:35%;
		color:black;
		}
h1{
margin-top:10%;
}
		}
		</style>
		</head>
		<body>


<div id="wrapper">
		<form id="contact-form" method="post" action="kafka.php">
	<div id="roundy">
			<h1>Expense-O-Rama</h1>
			&nbsp;&nbsp;&nbsp;<input type="submit" value="Add Expense">
			<a href="index.html#righto"><input type="button" value="View Expenses" onClick="changeClass();" /></a>
				<br><label for="type">type of expense:</label>
				<p>
					<input type="radio" name="typeofexpense" value="snacks" required>
					snacks(includes lattes)
					<br>
					<input type="radio" name="typeofexpense" value="utilitybills" required>
					utility bills
					<br>
					<input type="radio" name="typeofexpense" value="merchandise" required>
					merchandise
					<br>
					<input type="radio" name="typeofexpense" value="parking" required>
					parking/transportation
					<br>
					<input type="radio" name="typeofexpense" value="rent" required>
					rent
					<br>
					<input type="radio" name="typeofexpense" value="advertising" required>
					advertising
					<br>
					<input type="radio" name="typeofexpense" value="other" required>
					other
				</p>
				<p>
				<table>
					<tr>
					<td><label for="expense">detail:</label>	
					</td>
					<td><input type="text" name="expense">	
					</td>
					</tr>
					<tr>
					<td>location of expense:
					</td>
					<td><label for="location" class="error"><select>
							<option name="location" value="work">work</option>
							<option name="location" value="home">home</option>
							<option name="location" value="outside">en route</option>
							<option name="location" value="clienthome">clienthome</option>
							<option name="location" value="other">other</option>
						</select> </label>	
					</td>
					</tr>
					<tr>
					<td>amount of expense:	
					</td>
					<td><label for "amount" class="error">
						<input id="spinner" value="01.00" type="number" name="money" placeholder="amount" required>
					</label>
					<!--do this if you can find the jquery spinner
					<p>
					<label for="spinner">Amount to donate:</label>
					<input id="spinner" name="spinner" value="5">
					</p>-->	
					</td>
					</tr>

					<!--
					this sucks, I have to remove comment and date to make it work, for now--<tr>
						<!--see if this can work in firefox - also do a button that says now or choose date
							then have the date pop out only if it's not NOW (possibly checked)--><!--
					<td><label for "date">date of Expense:</label>
					</td>
					<td><input id="datepicker" type="date" name="date" placeholder="date" required></label>			
					</td>
					</tr>
					

					<tr>
					<td><label>comments: 
					</td>
					<td><textarea id="comments"></textarea> </label>
					</td>
					</tr>
					-->

				</table>
				</form>
	</div><!--end of roundy-->
		


<div id="righto">EXPENSES
	<!--removing javascript due to crappy code <input type="button" value="close" onClick="closeit();" /></a>-->
		<div>
			Sort by:<form>
						<select id="sortby">
							<option value="0">Catagory</option>
							<option value="1">Day</option>
				            <option value="2">Location</option>
			          	</select>
			          </form>
		</div>
<p id="whatitis">how will you sort?</p>
<!--PHP_____PHP_______PHP_________PHP-->			

<?php
include("passwords.php");
$mysql = new mysqli(
"localhost",
"cquinn03",
$mysql_password,
"cquinn03");
$prepared = $mysql->prepare('SELECT SUM(amount) FROM expenseorama');

$prepared->execute();
$results = $prepared->get_result();

foreach ($results as $row){

?>




</div>
<!--removing because I think it doesn't work--
<?php

}
$sumQuery = $mysql->prepare('SELECT SUM(amount)as Total FROM expenseorama;');
$sumQuery->execute();
$sumResult = $sumQuery->get_result();
$sum = $sumResult->fetch_array();
?>-->

<!--end PHP PHPH PHP-->




<!--PHP_____PHP_______PHP_________for the TOTAL sum PHP-->	

<?php
$sumQuery = $mysql->prepare('SELECT SUM(amount) AS total FROM expenseorama;');
$sumQuery->execute();
$sumResult = $sumQuery->get_result();
$sum = $sumResult->fetch_array();

$countResult = $mysql->query('SELECT COUNT(*) AS rows FROM expenseorama;');
$count = $countResult->fetch_array();
?>
<br/><p id="top">
Total to Date: <?= $sum["total"] ?></b>
Amount of Extries to date: <?$row["count"];?>
</p>


<div id="sortbycatagory" class="">
	you are in the sort by catagory
	

<!--PHP_____PHP_______PHP_________PHP-->	

<?php
$prepared = $mysql->prepare("SELECT * FROM expenseorama ORDER BY catagory DESC;");
$prepared->execute();
$results = $prepared->get_result();

foreach ($results as $row) {
?>
<div><!--this is working -it is the sort by catagory-->
	<?= htmlentities($row["amount"]) ?>
	|
	<?= htmlentities($row["catagory"]) ?>
	ON
	<?= htmlentities($row["date"]) ?>
</div>
<?php
}

$sumQuery = $mysql->prepare('SELECT SUM(amount) AS sum FROM expenseorama;');
$sumQuery->execute();
$sumResult = $sumQuery->get_result();
$sum = $sumResult->fetch_array();

$countResult = $mysql->query('SELECT COUNT(*) AS rows FROM expenseorama;');
$count = $countResult->fetch_array();
?>
</div>
<div id="sortbyday" class="">
	You are in sort by day-

<!--PHP_____PHP_______PHP_________PHP-->	

<?php
$prepared = $mysql->prepare("SELECT * FROM expenseorama order by date;");
$prepared->execute();
$results = $prepared->get_result();

foreach ($results as $row) {
?>
<div><!--this is working - it is the sort by DATE-->
	<?= htmlentities($row["date"]) ?>
	|	
	<?= htmlentities($row["catagory"]) ?>
	|
	<?=htmlentities($row["location"]) ?>
	|
	<?= htmlentities($row["amount"]) ?>
	
</div>

<?php
}

$sumQuery = $mysql->prepare('SELECT SUM(amount) AS sum FROM expenseorama;');
$sumQuery->execute();
$sumResult = $sumQuery->get_result();
$sum = $sumResult->fetch_array();

$countResult = $mysql->query('SELECT COUNT(*) AS rows FROM expenseorama;');
$count = $countResult->fetch_array();
?>

</div>
<div id="sortbylocation" class="">
	You are in sort by location-

<!--PHP_____PHP_______PHP_________PHP-->	

<?php
$prepared = $mysql->prepare("SELECT * FROM expenseorama order by location;");
$prepared->execute();
$results = $prepared->get_result();

foreach ($results as $row) {
?>
<div><!--this is working - it is the sort by location-->
	<?= htmlentities($row["location"]) ?>
	|	
	<?= htmlentities($row["catagory"]) ?>
	|
	<?=htmlentities($row["date"]) ?>
	|
	<?= htmlentities($row["amount"]) ?>
	
</div>

<?php
}

$sumQuery = $mysql->prepare('SELECT SUM(amount) AS sum FROM expenseorama;');
$sumQuery->execute();
$sumResult = $sumQuery->get_result();
$sum = $sumResult->fetch_array();

$countResult = $mysql->query('SELECT COUNT(*) AS rows FROM expenseorama;');
$count = $countResult->fetch_array();
?>



<p id="footer"><input type="button" value="show pie chart" onClick="alertfunny();"></input></p>
</div></div></div>
	</body>
</html>