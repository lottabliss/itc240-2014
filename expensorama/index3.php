<!doctype html><!--ok to add cookie here-->
<html>
	<head>
		<script src="js/jquery-1.11.0.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/jquery.ui.core.js"></script>
		<script src="js/jquery.ui.spinner.js"></script>
		<script src="js/jquery.ui.datepicker.js"></script>
		<script src="showhide.js"></script>

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
			position:absolute;
			left:60%;
			top:8%;
			display:block;
			float:right;
			max-width:500px;
			padding-right:100px;
		}

		#rightno{
			display:none;
		}
		h1{
			padding:2%;
			font-family:"Trebuchet MS";
			background-color:grey;
			text-align:center;
			border:2px solid #bf000f;
		}
		#roundy {
			min-width: 300px;
			max-width: 300px;
			border: 5px solid #bf000f;
			border-radius: 4px;
			background-color: grey;
			color: #000000;
			float: left  :

		}
		input, button, textarea {
			color: black;
			border: 1px solid #556677;
			border-radius: 3px;
			padding-left: 5px;
			padding-right: 15px;
			padding-top: 2px;
		}
		/*needs to be mobilized*/
		</style>
		</head>
		<body>
		<?php include(password.php);
		$mysql=new mysqli("localhost","cquinn03",$mysql_password,"cquinn03");
		?>

		<form id="contact-form" method="post" action="index.html">
		<div id="roundy">
			<h1>Expense-O-Rama</h1>
			<input type="submit" value="Add Expense">
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
					<input type="radio" name="typeofexpense" value="parking/transportation" required>
					parking
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
					<tr>
						<!--see if this can work in firefox - also do a button that says now or choose date
							then have the date pop out only if it's not NOW (possibly checked)-->
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
				</table>
			</div><!--end of roundy-->
		</form>
<!--doing a display of the information on MYSQL-->
<?php

$query = 'SELECT date, amount FROM expenseorama order by date;';
$prepared = $mysql->prepare($query);
$prepared = execute();

?><!--this seems like I could just say $prepared = $mysql->prepare('SELECT date,amount FROM expenseorama order by date;');-->


<!--INSERT INTO MYSQL
when I push "submit" then I want the  form to do an insert - so I will send it to the
file that has this code: the file is called edit.php. After it inserts the info,
I guess it takes it back to the main page:

header("Location:index.php") 

which worries me because I call one of my tables "location". whoops.-->


<?php

include("passwords.php");
$mysql = new mysqli("localhost","cquinn03",$mysql_password,"cquinn03");

$query = 'INSERT into expenseorama (catagory,location,amount,date) VALUES (?,?,?,date(NOW));';

$prepared = $mysql->prepare($query);
$prepared->bind_param("ssf",$_REQUEST["catagory"],$_REQUEST["location"],$_REQUEST["amount"]);
$prepared->execute();

header("Location: index.php");
?>

<?php

	include("passwords.php");
	$mysql = new mysqli(
		"localhost", //server
		"twilburn", //username
		$mysql_password, //password
		"twilburn" //database name
	);

	$prepared = $mysql->prepare('SELECT * FROM tracker_food');
	//don't need to bind - no parameters!
	$prepared->execute();
	$results = $prepared->get_result();

	foreach ($results as $row) {
?>
	<div> 
		<?= htmlentities($row["calories"]) ?>
		calories from 
		<?= htmlentities($row["type"]) ?>
	</div>
<?php
	}

	$sumQuery = $mysql->prepare('SELECT SUM(calories) AS sum FROM tracker_food;');
	//don't need to bind, no parameters
	$sumQuery->execute();
	//results don't come back from DB until get_result
	$sumResult = $sumQuery->get_result();

	$sum = $sumResult->fetch_array();
?>
		<div>
			Your total calorie input is:
			<?= $sum["sum"] ?>
		</div>
