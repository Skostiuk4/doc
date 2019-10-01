<?php

function file_get_content($path) {
	if (!file_exists ($path)) {
	return  ("File not found");
	}
	else {
	return $f = file_get_contents("text.txt");
	}
 }
 echo file_get_content("text.txt");
 
?>
