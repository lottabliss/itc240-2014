<!doctype html>
<html>
<head><title>Mad Libs</title>
<style>

body{
background-color:#333;
color:grey;

}
.container{
max-width:650px;
background-color:#990011;
color:#001100;
font-variant: small-caps;
font-family:Vrinda;
margin-left:100px;
}
</style>

</head>
<body>
<div class="container">
WELCOME TO YOUR MUSICAL MADLIBS!
<form method="post">
Favorite activity (with out the '-ing' ending): <input placeholder="verb" name="verb"><br>
Type of Pet you had as a child: <input placeholder="noun" name="noun"><br>
Name of your childhood pet: <input placeholder="pet" name="pet"><br>
Your Mother's Maiden name: <input placeholder="mother's maiden name" name="maiden"><br>
Word which discribes your car: <input placeholder="adjective" name="adjective"><br>
Number between 1 and 10: <input placeholder="number" name="number"><br>
Any Number: <input placeholder="number2" name="number2"><br>

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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//that worked because now if it is post it will show the echos. You were seeing them in GET.
//the if statement made it so you only see the echos in post.

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
echo "<br>If you were their lead singer, you would be called " .  $verb . "ing"  . $adjective  . $noun . "!";
echo "<br>Your true age is " . $number . " although you pretend to be " . $number2;
echo "<br>If you were a female impersonator your name would be " . $pet . $maiden;

}
?>
</div>
</body>
</html>
