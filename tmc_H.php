<?php

class tmc_H{

	public static function wrap($tag, $str){
		if($str){
			return "n<$tag>$str</$tag>";
		}
	}


	public static function p($p){
		if (!$p){
			return '';
		}
		if (is_array($p)){
			$p=implode("\n\n",$p);
		}
		$p=htmlentities($p,ENT_QUOTES);
		$p=str_replace("\n\n","</p>\n<p>",$p);
		$p=nl2br($p);
		return "\n<p>$p</p>";
	}


	public static function options($options, $selected=array()) {
		$html='';
		if (is_string($selected)) {
			$selected = array($selected);
		}
		foreach($options AS $key => $value) {
			if (is_array($value)){
				$html.= "\n<optgroup label=\"$key\">";
				$html.= self::options($value);
				$html.= "\n</optgroup>";
			} else {
				$html.="\n<option value=\"$key\">$value</option>";
			}
		}
		foreach($selected AS $sel) {
			$html = str_replace("value=\"$sel\"", "value=\"$sel\" selected=\"selected\"", $html);
		}
		return $html;
	}

}