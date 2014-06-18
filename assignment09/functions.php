<?php

function out($unclean) {
  $clean = htmlentities($unclean);
  return $clean;
}

function groupon($price) {
  //subract 1 from price
  $discount = $price - 1;
  //add $ and .99
  $tomfoolery = '$' . $discount . '.99';
  return $tomfoolery;
}

function get_request($param) {
  //if this was found in $_REQUEST
  if (isset($_REQUEST[$param])) {
    //exit early
    return $_REQUEST[$param];
  }
  //if not found
  return false;
}

function get_array($array, $param) {
  //if this was found in $array
  if (isset($array[$param])) {
    //exit early
    return $array[$param];
  }
  //if not found
  return false;
}

$mysql = new mysqli("localhost", "twilburn", $mysql_password, "twilburn");

function update_calories($id, $calories) {
  global $mysql;
  $prepared = $mysql->prepare('UPDATE cupcakes SET calories = ? WHERE id = ?');
  $prepared->bind_param("ii", $calories, $id);
  $prepared->execute();
}

function get_cupcakes() {
  global $mysql;
  $prepared = $mysql->prepare('SELECT * FROM cupcakes');
  $prepared->execute();
  return $prepared->get_result();
}

function input($name) {
?>
<input name="<?= $name ?>" type="text" pattern="\w+">
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
}?>
<!DOCTYPE html>
<html>
    <head>
    <title>Enter New Food</title>
</head>
<form action="POST" method="function.php">
    
    Please search by food type or food name and if you cannot find it in our vast selection of foods,
    add it yourself.
    <table>
        <tr><td>
            Food Name(required):</td>
         <td>
            <input type="text" name="name" value="foodname" required></td>
          <tr><td>
            Serving Size:</td>
          <td>
            <input type="text" name="name" value="foodamt"></td>
          <tr><td>
            Calories (required):</td>
          <td>
            <input type="number" name="calories" value="calories" required></td>
             <tr><td>
            Food Type:</td>
          <td>
            <select>
                <option value="beverage">Beverage</option>
                <option value="dairy">Milk/Dairy</option>
                <option value="meat">Meat/fish</option>
                <option value="fruit">Fruit</option>
                <option value="veggies">Vegtables</option>
                <option value="bread">Bread/Grains</option>
                <option value="sweets">Dessert</option>
                <option value="other">Other</option>
            </select></td>
        </tr>
        <tr><td></td><td><input type="button" value="add new food"></td></tr>
    </table>
</form>