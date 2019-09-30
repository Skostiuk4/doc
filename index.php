<?php

function file_get_content($path) {
	$f = fopen($path,'r');
	$length = filesize("text.txt");
	$str = fread($f, $length);
	fclose($f);
	return $str;

	$filename = "file.txt";
	if (!file_exists ($filename)):
	 echo  ("File not found");
	endif;
  
 }

 echo file_get_contents("text.txt");
 
