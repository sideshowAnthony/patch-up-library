<?php

require_once dirname(__FILE__).'/tmc_ServerVars.php';

class tmc_FlatUrl{

	public static function parse($dir_pages){
		$sv = new tmc_ServerVars;
		$url = trim($sv->REDIRECT_URL); // "/product/12/shoe/"
		if (substr($url,-1)==='/') $url = substr($url,0,-1); // "/product/12/shoe"
		$url_parts = explode('/', $url);
		array_shift($url_parts); // array("product","12","shoe")
		$cls = array_shift($url_parts);
		if (!$cls){
			$class_name = 'page_index';
		}else{
			$class_name = 'page_err404'; // Until proven otherwise
			$cls = 'page_'.preg_replace('/[^a-z]/', '_', $cls);
			$file_path = $dir_pages.$cls.'.php';
			if (file_exists($file_path)){
				require_once $file_path;
				if (class_exists($cls)) $class_name = $cls;
			}
		}
		$argc = count($url_parts);
		$argv = $url_parts;
		return array($class_name, $argc, $argv);
	}
}