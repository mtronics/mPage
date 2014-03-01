<?php
	
	/**
	 * mPage basePageComponents file
	 * Copyright (c) mtronics 2014
	 * Contains everything needed for the base structure of pages
	 * Do not modify or redistribute it in any way.
	 */
	 
	 include_once 'fileIO.php';
	 include_once 'filter.php';
	 
	 function getBaseStructure($manifest, $activePage, $section) {
	 	
		switch ($section) {
			
			case 'head':
				
				//Reading the head part and filling in all the variables
				$data = getFileContents("structure/head.structure");
				echo fillWithPageData($data, $manifest, $activePage);
				
				//Doing the same thing with the template head
				$template = getFileContents("templates/" . $manifest['template'] . "_head.template");
				echo fillWithPageData($template, $manifest, $activePage);
				break;
						
			case 'foot':
				
				//Reading the template foot and filling in all the variables
				$template = getFileContents("templates/" . $manifest['template'] . "_foot.template");
				echo fillWithPageData($template, $manifest, $activePage);
				break;
				
				//Doing the same thing with the foot part
				$data = getFileContents("structure/foot.structure");
				echo fillWithPageData($data, $manifest, $activePage);
				
		}
		
	 }
	
?>