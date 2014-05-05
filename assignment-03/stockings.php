<!doctype html>
<html>
<body>
<h1>Stockings!</h1>
<a href="?show=picture">Picture view</a>
<a href="?show=all">List view</a>
<div>
<?=count($stockings);?> Stockings available

</div>
<ul>
<?php

foreach ($stockings as $stock) {
if ($show == "picture") {
include("picture.php");
} else {
include("stock.php");
}
}

?>
</ul>
</body>
</html>