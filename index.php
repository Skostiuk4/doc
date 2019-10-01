<?php

	function file_get_content($path){
	  if (!file_exists($path)) {
	    return ("File not found!s");
	  } else {
	    return file_get_contents($path);
	  }
	}

	echo file_get_content("4.txt");

?>
