<?php
	
	/**
	 * mPage Core file
	 * Copyright (c) mtronics 2014
	 * The brain behind mPage
	 * Do not modify or redistribute it in any way.
	 */
	 
	 //Includes all the data stored in data.php
	 include_once 'data.php';
	 include_once 'userController.php';
	 
	 $sessionData = Array("name" => "Sign in", "description" => "You can sign in here.");
	 
	 //Connects to the specified mySQL database
	 function establishMySqlConnection() {
		
		global $mySqlData;
		
	 	mysql_connect($mySqlData['host'], $mySqlData['userName'], $mySqlData['passWord']);
	 	mysql_select_db($mySqlData['dataBase']);
	 	
	 }
	 
	 //Continues the last session if possible
	 function establishSession() {
	 	
		global $sessionData;
		if(isset($sessionData['id'])) {
				
			session_start();
			$sessionData['name'] = $sessionData['firstName'];
			$sessionData['description'] = "You are logged in as " 
				. $sessionData['firstName'] 
				. " " 
				. $sessionData['lastName']
				. " ("
				. $sessionData['username']
				. ")";
					
		}
		else {
				
			$sessionData['name'] = "Sign in"; 
			$sessionData['description'] = "You can sign in here.";
		
		}
		
	 }
	
?>