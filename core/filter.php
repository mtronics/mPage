<?php
	
	/**
	 * mPage Filter file
	 * Copyright (c) mtronics 2014
	 * Strings and other variables can be modified with different filters
	 * Do not modify or redistribute it in any way.
	 */
	 
	 include_once 'pages.php';
	 
	 //Replaces %variables% in strings with variables in mPage
	 function fillWithPageData($input, $manifest, $activePage) {
	 	
		$input = str_replace("%globalUri%", $GLOBALS['globalData']['uri'], $input);
		$input = str_replace("%globalName%", $GLOBALS['globalData']['name'], $input);
		$input = str_replace("%globalAuthor%", $GLOBALS['globalData']['author'], $input);
		$input = str_replace("%globalDescription%", $GLOBALS['globalData']['description'], $input);
		$input = str_replace("%globalKeywords%", $GLOBALS['globalData']['keywords'], $input);
		$input = str_replace("%globalDateOfCreation%", $GLOBALS['globalData']['dateOfCreation'], $input);
		
		$input = str_replace("%localName%", $manifest['name'], $input);
		$input = str_replace("%localAuthor%", $manifest['author'], $input);
		$input = str_replace("%localDescription%", $manifest['description'], $input);
		$input = str_replace("%localKeywords%", $manifest['keywords'], $input);
		
		$input = str_replace("%currentDate%", date("Y"), $input);
		$input = str_replace("%navTabs%", getNavTabs($manifest, $activePage), $input);
		
		return $input;
		
	 }
	
?>