<?php

// Use to declare the template filepaths

class tmc_Template{

	protected $directory;
	protected $filenames;
	
	public function __construct($directory){
		$this->directory=$directory;
	}
	
	public function __get($name){
		return $this->directory.$this->filenames[$name];
	}
	
	public function __set($name,$value){
		$this->filenames[$name]=$value;
	}
	
	public function exists($name){
		return array_key_exists($name,$this->filenames);
	}
}