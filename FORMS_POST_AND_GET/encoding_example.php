<?php

	$param = $_GET["toencode"];

	echo "<strong>Normal string : </strong>" .  $param . "<br />";
	echo "<strong>url-encoded string : </strong>" .  urlencode($param) . "<br />";
	echo "<strong>raw url-encoded string : </strong>" .  rawurlencode($param) . "<br />";

	$data = "edno dve tri @@@!";
	echo '<a href="encoding_example.php?toencode=' . urlencode($data) . '">Test</a>';

?>
