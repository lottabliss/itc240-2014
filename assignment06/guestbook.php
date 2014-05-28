<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
  <body><h1>Sign our Guest Book</h1>
<div id="whitebg">
    <form action="edit.php" method="POST">
      <input name="name" placeholder="Your name">
      <textarea name="comment"></textarea>
      <input type="submit">
    </form>
</div>
  </body>
</html>
<?php

include("passwords.php");

//connect to database
$mysql = new mysqli("localhost", "cquinn03", $mysql_password, "cquinn03");

//only act on POST (i.e., insert data only if the form was submitted)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //prepare query - like sending a delivery truck
  //first we write query - like getting an address
  //note: the NOW() function inserts the current date/time as the value
  $query = 'INSERT INTO guestbook (name, comment, posted_on) VALUES (?, ?, NOW());';
  //preparing is like calling for a truck
  $prepared = $mysql->prepare($query);
  //binding params = loading the truck with values
  $prepared->bind_param("ss", $_REQUEST["name"], $_REQUEST["comment"]);
  //executing sends the delivery to the database
  $prepared->execute();
  //no need to get_result(), since we didn't select anything
}

?>
<!--add this later
<?php
/* way 1*/
/*header("Set-Cookie: hello=world");*/
/*way 2*/
/*you are sending it still even if you stop sending it - in any case you have to put it at top of page*/

$name = " ";

if (isset($_COOKIE["your_name"])){
$name = $_COOKIE["your_name"];
}

if (isset($_REQUEST["name"]))
{
setcookie("your_name", $_REQUEST["name"]);
$name = $_REQUEST["name"];
}

?>
<!doctype html>
This space intentionally left blank.


	<form action="index.php">     <!--didn't do post, if you leave off the method its a get-->
		<input placeholder="First Name" name="name"
		value="<?="$name"?>"
>
		<button>Submit</button>
	</form>

<pre>
<?php
print_r($_COOKIE);
?>
</pre>-->
