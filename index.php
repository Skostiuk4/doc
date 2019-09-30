<?php

function file_get_content($path) {
	if (!file_exists ($path)) {
	 echo  ("File not found");
	}
	$f = fopen($path,'r');
	$length = filesize("text.txt");
	$str = fread($f, $length);
	fclose($f);
	return $str;
 }
 echo file_get_content("text.txt");
 
?>