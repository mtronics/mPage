<?php
	
	/**
	 * mPage Pages file
	 * Copyright (c) mtronics 2014
	 * Contains functions associated with custom pages
	 * Do not modify or redistribute it in any way.
	 */
	 
	 include_once 'fileIO.php';
	 
	//Get an array of all page names
	function getPages() {
		
		$pages = scandir("pages");
		$output = Array();
		$count = 0;
		
		foreach($pages as $page) {
				
			if($page != ".." and $page != ".") {
					
				$output[$count] = $page;
				$count++;
				
			}
			
		}
		
		return $output;
		
	}
	
	function getCustomTab($isActive, $link, $content, $template)
	{
		
		$tab = getFileContents("templates/" . $template . "/navs.template");
		
		$tab = str_replace("%page%", $link, $tab);
		$tab = str_replace("%pageName%", $content, $tab);
		if($isActive) $tab = str_replace("%active%", 'class="active"', $tab);
		else $tab = str_replace("%active%", "", $tab);
		
		return $tab;
		
	}
	
	//Gets a template-based list of pages
	function getNavTabs($manifest, $activePage) {
		
		$navTabs = "";
		
		foreach(getPages() as $page) {
			
			$tab = getFileContents("templates/" . $manifest['template'] . "/navs.template");
			
			$tab = str_replace("%page%", "index.php?page=" . $page, $tab);
			$tab = str_replace("%pageName%", $page, $tab);
			if($page == $activePage) $tab = str_replace("%active%", 'class="active"', $tab);
			else $tab = str_replace("%active%", "", $tab);
			
			$navTabs .= $tab;
			
		}
		
		return $navTabs;
		
	}
	
?>