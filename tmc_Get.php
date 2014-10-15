<?php

class tmc_Get{

	public function __get($name){
		return filter_input(INPUT_GET, $name, 
			FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
	}
	
	public function get($name, $filter){
		return filter_input(INPUT_GET, $name, $filter);
	}

	public function getArray($keys=null){
		$arr = array();
		if (is_string($keys)){
			$keys = explode(',', $keys);
		}
		foreach($_GET AS $k => $v){
			if (is_null($keys) || in_array($k, $keys)){
				$arr[$k] = filter_input(INPUT_GET, $k,  
					FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
			} 
		
		}
		return $arr;
	}

}