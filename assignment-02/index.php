<!doctype html>
<html>
<head><title>Mad Libs</title>
</head>
<body>
WELCOME TO YOUR MUSICAL MADLIBS!
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
if (isset($_REQUEST["rockroll"])){
echo "You probably love Elvis Presley!";
echo "<br><img src='images/Elvis.jpg'>";
}

else if (isset($_REQUEST["jazz"])){
echo "You probably love Miles Davis!";
echo "<br><img src='images/miles.jpg'>";
}

else if (isset($_REQUEST["deathmetal"])){
echo "You probably like White Chapel! ";
echo "<br><img src='images/white.jpg'>";

}

?>
<?php
$verb = $_REQUEST['verb'];
$noun = $_REQUEST['noun'];
$pet = $_REQUEST['pet'];
$maiden = $_REQUEST['maiden'];
$adjective = $_REQUEST['adjective'];
$number = $_REQUEST['number'];
$number2 = $_REQUEST['number2'];
/*

if(empty($verb) || empty($noun) || empty($pet) || empty($maiden || empty($adjective) || empty($number) || empty($number2))
echo "Sorry, fill out all the fields."
}
else
{

*/
echo "If you were their lead singer, you would be called " .  $verb . "ing"  . $adjective  . $noun . "!";
echo "Your true age is " . $number + " although you pretend to be " . $number2;
echo "If you were a female impersonator your name would be " . $pet . $maiden;


/*
echo "If you were their lead singer, you would be called " .  $verb . "ing"  . $adjective  . $noun . "!";
echo "Your true age is " . $number + " although you pretend to be " . $number2;
echo "If you were a female impersonator your name would be " . $pet . $maiden;
*/
?>

</body>
</html>