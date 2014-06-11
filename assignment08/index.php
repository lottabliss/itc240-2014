//I was really confused by this assignment about how to run these functions, but I think I made them for my
//future calorie counter.

function input($name) {
?>
<input name="<?= $name ?>" type="text" pattern="\w+">
<input calories="<?= $calories ?>" type="int" pattern="\w+">
<?php
}
//homework starts here -

$mysql = new mysqli("localhost", "cquinn03", $mysql_password, "cquinn03");
function addfood($food,$amt,$calories,$typefood) {
  global $mysql;
  $prepared = $mysql->prepare('insert into trekerfood (food,amt,calories,typefood) values(?,?,?,?)');
  $prepared->bind_param("ssis",$food,$amt,$calories, $typefood);
  $prepared->execute();
}
function get_calories($food){
    global $mysql;
    $prepared = $mysql->prepare('SELECT food,calories FROM trekerfood where food = "$food";');
    $prepared->execute();
   
    
}
function get_calories_today($date){
global $mysql;
$prepared = $mysql->prepare('SELECT food, calories FROM trekerfood where date = "$date" order by date;
SELECT SUM(calories) FROM trekerfood where date = "$date";');
$prepared->execute();
 return $prepared->get_result();
}
