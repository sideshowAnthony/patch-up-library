<?php

class tmc_Cookie{

	public function __get($name){
		return filter_input(INPUT_COOKIE, $name, 
			FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
	}
	
	// Set a cookie to expire at the end of the session
	public function __set($name, $value){
		setcookie($name, $value);
	}

	public function remove($name){
		unset($_COOKIE[$name]); // No longer available in code
		setcookie($name,'',9016230); // Expired 15/4/1970!
	}
	
	
}