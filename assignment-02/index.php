<!doctype html>
	<html>
<?php
$method = $_SERVER["REQUEST_METHOD"];
echo $method;
//this will tellyou if you are getting or posting?
if ($method == "GET")
{

                                                                          //we open the if
?>
	<form method="post">

Favorite activity (with out the '-ing' ending)<input placeholder="verb" name="verb"><br>
Type of Pet you had as a child<input placeholder="noun" name="noun"><br>
Name of your childhood pet<input placeholder="pet" name="pet"><br>
Your Mother's Maiden name<input placeholder="mother's maiden name" name="maiden">
Word which discribes your car<input placeholder="adjective" name="adjective"><br>
Number between 1 and 10<input placeholder="number" name="number"><br>
Any Number<input placeholder="number2" name="number2"><br>

	<input type="radio" value="music" name="rockroll">
	<label for="rockroll">Rock and Roll</label><br>
	<input type="radio" value="music" name="jazz">
	<label for="jazz">Jazz</label><br>
	<input type="radio" value="music" name="deathmetal">
	<label for="deathmetal">DEATH METAL</label>
<br>

	<button>POST</button>
	</form>
	
<?php 
}
else{
											//we close the if and add an else (close else later);
?>

	<pre>
<?php print_r($_REQUEST);?>
	</pre>

	<br>
	Your name is <?= $_REQUEST["first_name"]?>
<?php
$number2 = $_REQUEST["number2"];
$afteronehundred = $age - 100;
if ($number2 >=100){
?>
					You are over 100 by <?=$afteronehundred?> years.
<?php
} else{
?>
				you are over 100, what are you doing on line?
<?php
	}
?>

<a href="index2.php">GET</a>
<?php
}

if (isset($_REQUEST["rock"])){
echo "You probably love Elvis Presley!";
echo "<br><img src='images/Elvis.jpg'>";
$verb = $_REQUEST['verb'];
$noun = $_REQUEST['noun'];
$pet = $_REQUEST['pet'];
$maiden = $_REQUEST['maiden'];
$adjective = $_REQUEST['adjective'];
$number = $_REQUEST['number'];
$number2 = $_REQUEST['number2'];
}
else if (isset($_REQUEST["jazz"])){
echo "You probably love Miles Davis!";
echo "<br><img src='images/miles.jpg'>";
}
else if (isset($_REQUEST["deathmetal"])){
echo "You probably like White Chapel! ";
echo "<br><img src='images/white.jpg'>";
echo "If you were their lead singer, you would be called " +  $verb + "ing"  + $adjective  + $noun + "!";
echo "Your true age is " + $number + " although you pretend to be " + $number2;
echo "If you were a female impersonator your name would be " + $pet + $maiden;
}
?>
	<!-- now you'll never see the form on the page at the same time as you see that get?-->

	</html>
