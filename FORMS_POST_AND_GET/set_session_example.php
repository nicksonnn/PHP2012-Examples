<?php
session_start();
$count = 1;
if (isset($_SESSION["count"])) {
	$_SESSION["count"]++;
	$count = $_SESSION["count"];
} else {
	$_SESSION["count"] = 1;
}

echo "You are visiting this page for " . $count . " time.";
