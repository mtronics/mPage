<?php
	
	/**
	 * mPage Index file
	 * Copyright (c) mtronics 2014
	 * This is the page that is displayed all the time
	 * Do not modify or redistribute it in any way.
	 */
	 
	 //Sets the current page to home and overwrites it if the URL parameter is set
	 $currentPage = "Home";
	 if(isset($_GET['page'])) $currentPage = $_GET['page'];
	 
	 //Includes the core files (everything that's needed)
	 include_once 'core/core.php';
	 include_once 'core/basePageComponents.php';
	 include_once 'core/userController.php';
	 
	 //Includes the current page
	 include_once "pages/" . $currentPage . "/page.php";
	 
	 //Base structure & contents (the whole page) are printed
	 getBaseStructure($manifest, $currentPage, "head");
	 getContents();
	 signIn("mtronics", "test");
	 print_r($_SESSION);
	 getBaseStructure($manifest, $currentPage, "foot");
	
?>