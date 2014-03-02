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
	
?>