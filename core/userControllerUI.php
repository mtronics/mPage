<?php
	
	/**
	 * mPage UserControllerUI
	 * Copyright (c) mtronics 2014
	 * The UI for the user management system
	 * Do not modify or redistribute it in any way.
	 */ 
	
	include_once 'core.php';
	include_once 'userController.php';
	include_once 'pageComponents.php';
	
	$manifest = Array(
	 	'template' => 'navbar-fixed-top',
	 	'name' => $sessionData['name'],
	 	'author' => 'mtronics',
	 	'description' => $sessionData['description'],
	 	'keywords' => 'home, page'
	 );
	
	function getContents() {
	 	
		echo "<h1>UMS</h1>";
		glyphIcon("cloud");
		glyphIcon("heart");
		glyphIcon("pencil");
		glyphIcon("eye-open");
		glyphIcon("globe");
		glyphIcon("sound-5-1");
		
	 }
	
?>