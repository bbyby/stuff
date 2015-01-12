<?php
class Person {
	public 	$name      = "",
			$lastname  = "",
			$email     = "",
			$pass      = "",
			$birthday,
			$gender    = "не указан",
			$about 	   = "";
}

function cleanGarbige($ctrl_obj) {
	
	if (!empty($ctrl_obj)) {	
		$ctrl_obj = trim($ctrl_obj);
		$ctrl_obj = htmlspecialchars($ctrl_obj);
		$ctrl_obj = stripslashes($ctrl_obj);
		$ctrl_obj = strip_tags($ctrl_obj);		
		
		return $ctrl_obj;
	} else {
		//return "empty_err";
	}
}

function errHandler($err_number, $ctrl_obj) {
	
	/*switch $ctrl_obj:
		case "empty":
			
		case "empty":
		case "empty";
	*/
}
?>