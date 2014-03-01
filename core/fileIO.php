<?php
	
	/**
	 * mPage fileIO
	 * Copyright (c) mtronics 2014
	 * fileIO enables you to read and write files.
	 * Do not modify or redistribute it in any way.
	 */
	 
	 //Returns a string with the contents of the desired file
	 function getFileContents($fileName) {
	 	
		$lines = file($fileName);
		return implode("", $lines);
		
	 }
	
?>