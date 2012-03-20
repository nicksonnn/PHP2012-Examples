<doctype !html>
<html>
<head>
<title>Array test</title>
</head>

<body>

<form action="" method="post">

<?php
for ($i=0;$i<5;$i++)
{
?>
		<p>
		<label for="customer<?php echo $i; ?>">Customer <?php echo $i;?></label>
		<input type="text" name="customer[]" id="customer<?php echo $i; ?>"/>
		</p>
<?php
}
?>

<input type="Submit" name="Submit" value="Debug"/>

</form>

</body>
</html>


<?php
	require_once("functions.php");
	debug($_POST);
	if (isset($_POST["Submit"]))
	{
		for ($i = 0; $i < 5; $i ++)
		{
			if (isset($_POST["customer"][$i]))
				echo "Customer $i: {$_POST["customer"][$i]}<br/>";
		}
	}