<?php

class tmc_Model{

	protected $data;

	public function __construct($data=array()){
		$this->data = $data;
	}

	public function __get($name){
		return $this->data[$name];
	}
	
	public function __set($name,$value){
		$this->data[$name]=$value;
	}
	
	public function getArray($keys=null){
		if (is_null($keys))
			return $this->data;
		if (!is_array($keys))
			$keys=explode(',',$keys);
		$arr = array();
		foreach($keys AS $key){
			$arr[$key]=$this->data[$key];
		}			
	}
}
