<?php

if (isset($_POST["input"])) {
	//$input = 
	// !!!! important - always escape user data ($_GET,$_POST, $_REQUEST)
	$_POST["input"] = htmlspecialchars($_POST["input"]);

	echo "<strong>Input : </strong>";
	echo $_POST["input"];
	echo "<br />";
}
?>
<html>
	<head>
		<title>Escaping HTML</title>
	</head>
	<body>
		<p>
			<form action="" method="post">
				<p>
					<label for="input">Input:</label>
					<input type="text" name="input" />
				</p>
				<input type="submit" value="Test" />
			</form>
		</p>
