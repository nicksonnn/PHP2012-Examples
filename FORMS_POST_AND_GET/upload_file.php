<?php
require_once ("functions.php");
$uploadFolder = "uploads";

debug($_FILES);


$limit = 300000; // bytes

if ($_FILES["file"]["size"] < $limit) {
	if ($_FILES["file"]["error"] > 0) {
		echo "Error :" . $_FILES["file"]["error"] . "<br />";
	} else {
		$fileTmpName = $_FILES["file"]["tmp_name"];
		$fileName = $_FILES["file"]["name"];
		$filePath = $uploadFolder . DIRECTORY_SEPARATOR . $fileName;
		if (file_exists($filePath)) {
			echo $fileName . " already exists. ";
		} else {
			// chmod 0777
			// chown
			if (move_uploaded_file($fileTmpName, $filePath)) {
				echo "File saved in " . $filePath;
			} else {
				// fallback
			}

		}
	}
} else {
	echo "File too big";
}
?>
