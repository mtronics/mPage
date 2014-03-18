<?php
	
	/**
	 * mPage PageComponents file
	 * Copyright (c) mtronics 2014
	 * Contains all sorts of useful components for custom pages
	 * Do not modify or redistribute it in any way.
	 */
	 
	//Prints the desired glyphicon
	function glyphIcon($glyph) {
	 	
		echo '<span class="glyphicon glyphicon-' . $glyph . '"></span>';
		
	 }
	
	//Prints a colored box with text in it. Valid types: success, warning, danger, info
	function alert($message, $type, $dismissable = true) {
	 	
		if($dismissable) {
			
			echo '<div class="alert alert-' . $type . ' ' . $dismissable . '">'
			. '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
			. $message . '</div>';
			
		}
		else {
			
			echo '<div class="alert alert-' . $type . '">' . $message . '</div>';
			
		}
		
	 }
	
	//Prints a colored label with text in it. Valid types: (none), primary, success, warning, danger, info
	function label($message, $type = "default") {
		
		echo '<span class="label label-' . $type . '">' . $message . '</span>';
		
	}
	
	
	
?>