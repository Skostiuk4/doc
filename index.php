<?php

function file_get_content($path) {
	$f = fopen($path,'r');
	$length = filesize("text.txt");
	$str = fread($f, $length);
	fclose($f);
	return $str;

	$filename = ("text.txt"); 
	if (!file_exists ($path)): {
	 echo  ("File not found");
	}
	
	endif;

  
 }

 echo file_get_contents("text.txt");
 
?>