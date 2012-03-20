<?php
// http://www.php.net/manual/en/function.import-request-variables.php
import_request_variables("gp"/*get-post vars*/, "phpcourse_");
echo isset($phpcourse_name) ? $phpcourse_name : "";
?>
<html>
	<head>
		<title>Import vars example</title>
	</head>
	<body>
		<form action="" method="get">
			<label for="name">Enter name:</label>
			<input type="text" name="name" />
			<input type="submit" value="Debug" />
		</form>
	</body>
</html>
