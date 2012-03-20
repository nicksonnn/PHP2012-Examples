<?php

	// if we have array [e1,e2,e3..eN] and function f(x)
	// the result of map is the array [f(e1),f(e2),f(e3)..f(eN)]
	// as of PHP version >= 5.3, there's array_map function
	function map($array, $functionName) {
		foreach($array as &$element) {
			$element = call_user_func($functionName, $element);
		}
		return $array;
	}

	// gets just the page name
	function pageName() {
 		return substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"],"/") + 1);
	}

	function wrap_isset($what) {
		return isset($what);
	}
	
	function wrap_empty($what) {
		return empty($what);
	}

	function validate($array /*assoc array, i.e $_GET, $_POST*/, $fields /*array*/, $functions /*assoc array of boolean functions and the desired result*/) {
	
		foreach($fields as $field) {
			foreach($functions as $function => $result) {
				$res = $function($array[$field]);
				if($res != $result) {
					return false;
				}
			}
		}
		
		return true;
	}


	function debug($var) {
		$dumped = var_export($var, true);
		file_put_contents("dump.txt", $dumped);
		echo "<pre>";
		var_dump($var);
		echo "</pre>";
	}
