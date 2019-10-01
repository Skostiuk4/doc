<?php

	function file_get_content($path){
	  if (!file_exists($path)) {
	    return ("File not found!s");
	  } else {
	    return file_get_contents($path);
	  }
	}

	echo file_get_content("4.txt");



	function file_get ($files) {
		$files = array ('text1.txt','order.txt','sample.txt','demo.txt');
		if (!file_exists($files)) {
			return ("File not found!s");
		} else {
			return file_get_contents($files);
		}
	}
	echo file_get_content("text1.txt","order.txt","sample.txt","demo.txt");


