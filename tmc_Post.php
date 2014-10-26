<?php

// Convenient and safe access to $_POST

class tmc_Post{

	public function __get($name){
		return filter_input(INPUT_POST, $name, 
			FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
	}

	public static function get($name){
		return filter_input(INPUT_POST, $name, 
			FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
	}
	
	public static function getByFilter($name, $filter){
		return filter_input(INPUT_POST, $name, $filter);
	}

	public function getArray($keys=null){
		$arr = array();
		if (is_string($keys)){
			$keys = explode(',', $keys);
		}
		foreach($_POST AS $k => $v){
			if (is_null($keys) || in_array($k, $keys)){
				$arr[$k] = filter_input(INPUT_POST, $k,  
					FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
			} 
		}
		return $arr;
	}
}