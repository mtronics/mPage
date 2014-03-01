<?php
	
	/**
	 * mPage Index file
	 * Copyright (c) mtronics 2014
	 * This is the page that is displayed all the time
	 * Do not modify or redistribute it in any way.
	 */
	 
	 $currentPage = "Test page";
	 if(isset($_GET['page'])) $currentPage = $_GET['page'];
	 
	 //Includes the core files (everything that's needed)
	 include_once 'core/core.php';
	 include_once 'core/basePageComponents.php';
	 
	 include_once "pages/" . $currentPage . "/page.php";
	 
	 getBaseStructure($manifest, "Home", "head");
	 getContents();
	 getBaseStructure($manifest, "Home", "foot");
	
?>