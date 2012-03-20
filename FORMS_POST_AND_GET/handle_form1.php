<?php
// typical checking if something is POST-ed to the script
if (isset($_POST["numbers"])) {
	$numbers = explode(",", $_POST["numbers"]);
	sort($numbers);
	echo implode(",", $numbers);
} else {
	echo "Nothing was posted";
}
