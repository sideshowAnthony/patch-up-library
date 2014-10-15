<?php

class tmc_Session {

	public function __get($name){
		if(array_key_exists($name,$_SESSION)){
			return $_SESSION[$name];
		}
		return null;
	}

	public function __set($name, $value){
		if(array_key_exists($name,$_SESSION)){
			$_SESSION[$name]=$value;
		}
	}

}
