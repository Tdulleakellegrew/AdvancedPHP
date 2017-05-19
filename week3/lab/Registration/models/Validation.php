<?php
class Validation{
	
	function passwordsMatch($password, $confirmPassword){
		if($password == $confirmPassword){
			return true;
		}
		return false;
	}

	function isValidEmail($email){
		if(filter_var($email, FILTER_VALIDATE_EMAIL) !== false){
			return true;
		}
		return false;
	}
	
	function isValidZip($zip){
		$zipRegex = '/^[0-9]{5}$/';
		if(!preg_match($zipRegex, $zip)){
			return false;
		}
		return true;
	}
	
	function isValidDate($date){
		return (bool)strtotime($date);
	}

}