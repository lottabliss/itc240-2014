<!doctype html>
<html>
<body>
<h1>Stockings!</h1>
<a href="?show=picture">Picture view</a>
<a href="?show=all">List view</a>
<a href="?show=cat">View by catagory</a>
<div>
<?= count($stockings); ?> Stockings available
</div>
<ul>
<?php

foreach ($stockings as $stock) {
if ($show == "picture") {
include("picture.php");
}
else if{$show =="all"){
include("stock.php");
}
else{
	include("cat.php");
}
}

?>
</ul>
</body>
</html>