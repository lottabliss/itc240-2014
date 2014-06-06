<?php
include ("passwords.php");
$mysql = new mysqli ("localhost", "cquinn03",$mysql_password,"cquinn03");

if(isset($_COOKIE["sort"])) {
$sort = $_COOKIE["sort"];
}

if (isset($_REQUEST["sort"])) {
$sort = $_REQUEST["sort"];
setcookie("sort",$sort,time() + 60*5,"/");
}
/*now here are the only values you the user can put in. Also look
above - if you put $sort=calories it will sort by calories*/
$sortWhitelist = [
"title" =>true,
"author" =>true]
;
//if $sort is not set in $sortWhiteList
if(!isset($sortWhitelist[$sort])){
$sort = "title";
}
//ok, we just said that IF (those two options now called SORTWHITELIST, can be selected. if nothing
//is selected then just choose flavor.




$myQuery = $mysql->prepare("Select * from cqbooks order by $sort desc;");

$myQuery->execute();
$cqResult = $myQuery->get_result();
//print_r($cupcakeQuery);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Book Emporium of Skaggway</title>
	<style>
body{
		background-color:black;
		font-family:Tahoma;
	}
		#bandy{
			background:black;
			color:white;
			margin-bottom:20px;
			padding-bottom:10px;
			width:100%;
		}
		#one{
			max-width:16.5%;
			min-width:16.5%;		
			background: linear-gradient(45deg,#cedce7,#596a72);
			background:-moz-linear-gradient(45deg,#cedce7,#596a72);
			float:left;
		}
		#thumb{
			max-width:125px;
			max-height:175px;
			
		}
		#tiny{
			font-size:x-small
		}
		#signin{
			background-color:white;
			color:black;
			float:right;
			padding:30px;
			min-width:300px;
			max-width:300px;
			
		}
form{background-color:blue;}
		h1{
			text-align:center;
			font-family:Tahoma;
			font-size:20px;
			font-weight: bold;
			font-color:black;
			background-color:white;
			border-radius:300px;
			border:10px solid black;
			padding:5px;
			
			}
				#footer{
		 	position:absolute;
			top:92%;
		}
		.clear{
			clear:all;
		}
	@media only screen and (max-width: 480px) {
			thumb{
				max-width:50px;
				max-height:70px;
				
			}
	}		</style>
		</head>
		<body>

	</style>
	
	</head>
<body>
<h1>Book Emporium of Skaggway
<br><!--<form>
<input type="radio" name="sort" value="title">Sort by Title<br>
<input type="radio" name="sort" value="author">Sort by Author
<input type="button" value="submit">
</form>doesnto work-->
<a href="?sort=title">Sort by Title</a><br>
<a href="?sort=author">Sort by Author</a>
</h1>
<form>
<input type="radio" name="sort" value="cover">Show cover<br>
<input type="radio" name="sort" value="nocover">do not show cover
<input type="button" value="submit">
</form>




<?php
foreach ($cqResult as $item){
?>

		<div id="one"><div id="box"><img src="images/<?= $item["image"] ?>">
			<br>
		<?= $item["author"] ?><br><b><?=$item["title"]?></b></div><?=$item["reviewcq"] ?></div>

<?php
}
?>

</html>