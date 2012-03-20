<?php

ob_start();
require_once ("functions.php");
if (isset($_POST["submit"])) {

	if (isset($_POST["keep"]) && $_POST["keep"] === "on") {
		$cookieValue = urlencode($_POST["name"]) . "&" . urlencode($_POST["password"]);
		//$_COOKIE["userInfo"]
		setcookie("userInfo", $cookieValue, time() + 3600);
		header("Location: get_cookies_example.php");
		ob_end_flush();
	}
}
?>
<html>
	<head>
		<title>Cookies example</title>
	</head>
	<body>
		<p>
			<form action="" method="post">
				<p>
					<label for="name">Enter name:</label>
					<input type="text" name="name" />
				</p>
				<p>
					<label for="password">Enter password:</label>
					<input type="password" name="password" />
				</p>
				<p>
					<input type="checkbox" name="keep">
					Keep me logged in</input>
				</p>
				<input type="submit" name="submit" value="Debug" />
			</form>
		</p>
