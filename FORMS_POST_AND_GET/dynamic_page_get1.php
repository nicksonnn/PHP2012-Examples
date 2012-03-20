<?php
require_once ("functions.php");

$imagesFolder = "images";
$imagePath = $imagesFolder . DIRECTORY_SEPARATOR . "php elephant.png";

$pageName = pageName();

// again, the same check if there's any data
if (isset($_GET["image"])) {
	$imagePath = $imagesFolder . DIRECTORY_SEPARATOR . $_GET["image"];
}
?>

<a href="<?php echo $pageName?>?image=rails.jpg">Rails!</a>
<br />
<a href="<?php echo $pageName?>?image=python.gif">Python!</a>
<br />
<a href="<?php echo $pageName?>?image=php elephant.png">PHP!</a>
<p>
	<strong>The image requested:</strong>
	<br />
	<img src="<?php echo $imagePath?>" />
</p>
