<?php
	
	/**
	 * mPage page contents
	 * Copyright (c) mtronics 2014
	 * This file stores the contents of a custom page.
	 * Do not modify or redistribute it in any way.
	 */
	 
	 include_once 'manifest.php';
	 include_once 'core/pageComponents.php';
	 
	 function getContents() {
	 	
		echo "<h1>It works!</h1>";
		glyphIcon("cloud");
		glyphIcon("heart");
		glyphIcon("pencil");
		glyphIcon("eye-open");
		glyphIcon("globe");
		glyphIcon("sound-5-1");
		
	 }
	
?>