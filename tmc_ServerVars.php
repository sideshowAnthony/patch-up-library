<?php

class tmc_ServerVars{

	public function __get($name){
		return filter_input(INPUT_SERVER, $name, 
			FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
	}

}