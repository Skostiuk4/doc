<?php

function file_get_content($path) {
	$f = fopen($path,'r');
	$length = filesize("text.txt");
	$str = fread($f, $length);
	fclose($f);
	return $str;

 }

 echo file_get_contents("text.txt");