<?php

function file_get_content($path) {
	if (!file_exists ($path)) {
	 echo  ("File not found");
	}
	else {
	 echo $f = file_get_contents("text.txt");
	return $str;
	}
 }
 echo file_get_content("text.txt");
 
?>
