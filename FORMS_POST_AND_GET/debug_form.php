<html>
	<head>
		<title>Superglobals GET,POST,REQUEST</title>
	</head>
	<body>
		<p>
			<form action="" method="post">
				<p>
					<label for="name">Enter name:</label>
					<input type="text" name="nameInput" />
				</p>
				<p>
					<label for="password">Enter password:</label>
					<input type="password" name="passwordInput" />
				</p>
				<p>
					<label for="email">Enter email:</label>
					<input type="text" name="email" />
				</p>
				<p>
					<input type="checkbox" name="language[]" value="PHP">
					PHP</input>
					<input type="checkbox" name="language[]" value="Python">
					Python</input>
					<input type="checkbox" name="language[]" value="Ruby">
					Ruby</input>
					<input type="checkbox" name="language[]" value="Java">
					Java</input>
				</p>
				<p>
					<input type="radio" name="radioGroup" value="PHP">
					PHP</input>
					<input type="radio" name="radioGroup" value="Python">
					Python</input>
					<input type="radio" name="radioGroup" value="Ruby">
					Ruby</input>
					<input type="radio" name="radioGroup" value="Java">
					Java</input>
				</p>
				<select name="select[]" width="200" multiple="yes">
					<option value="opt1">Option1</option>
					<option value="opt2">Option2</option>
					<option value="opt3">Option3</option>
					<option value="opt4">Option4</option>
					<option value="opt5">Option5</option>
				</select>
				<input type="submit" value="Debug" />
			</form>
		</p>
		<?php
		require_once ("functions.php");

		echo "<strong>POST:</strong><br />";
		debug($_POST);
		//
		echo "<strong>GET:</strong><br />";
		debug($_GET);
		//
		echo "<strong>REQUEST:</strong><br />";
		debug($_REQUEST);

		//echo $_POST["nameInput"];
		?>
	</body>
</html>
