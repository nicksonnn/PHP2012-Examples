<?php
if(isset($_COOKIE["userInfo"])) {
	echo "User is logged in";
} else {
	echo "User is not logged in";
}

require_once ("functions.php");
//setcookie("userInfo", "", time() - 3600);
debug($_COOKIE);
