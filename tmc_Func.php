<?php

class tmc_Func{

	// Converts foo-bar-%-2 to FooBar2
	public static function stringToName($str) {
    
		$words = preg_replace('/[^a-zA-Z0-9]/', ' ', $str);
		$ucWords = ucwords($words);
		$ucName = str_replace(' ','', $ucWords);
		return $ucName;
	}
  
}