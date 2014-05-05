

<?php
//index.php
$stockings = [
[ "Item" => "Les Stockings", "Designer" => "Dior" , "picture" =>"dior2.jpg", "price"=>"50.00","catagory"=> "hose"],
[ "Item" => "Thights", "Designer" => "Yves Saint Laurent", "picture" =>"chanel.jpg", "price"=>"20.00","catagory"=> "socks"],
[ "Item" => "Lacey Ones", "Designer" => "Chanel","picture" =>"lace.jpg", "price"=>"150.00","catagory"=> "hose"],
[ "Item" => "Ankle socks", "Designer" => "Chanel","picture" =>"dior.jpg", "price"=>"42.00","catagory"=> "socks"],
[ "Item" => "Support hose", "Designer" => "Fruit of the Loom","picture" =>"dior.jpg", "price"=>"10.00","catagory"=> "hose"],
];

//code saved for later if I want to add an item
//$stockings[] = [ "Item" => "Leggings", "Designer" => "MaryLou"];

$show = "all";
if (isset($_REQUEST["show"])) {
$show = $_REQUEST["show"];
}

shuffle($stockings);

?>
<?php include 'stockings.php';?>  
<?php include 'sort.php';?> 