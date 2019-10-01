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
		foreach ($files as $file) {
			$content = file_get_contents($files);

		if (file_exists($files)) {
			return ($content);
		}	else {
			return  ($content);
		}


		}
	}
	echo file_get ("text1.txt");


