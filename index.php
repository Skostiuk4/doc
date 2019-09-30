<?php

function file_get_content($path) {
	$f = fopen($path,'r');
	$length = filesize("text.txt");
	$str = fread($f, $length);
	fclose($f);
	$filename = ("text.txt"); 
	if (!file_exists ($path)): {
	 echo  ("File not found");
	}
	
	endif;
	return $str;
  
 }

 echo file_get_content("text.txt");
 
?>