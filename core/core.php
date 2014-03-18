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
	 
	 //Connects to the specified mySQL database
	 function establishMySqlConnection() {
		
		global $mySqlData;
		
	 	mysql_connect($mySqlData['host'], $mySqlData['userName'], $mySqlData['passWord']);
	 	mysql_select_db($mySqlData['dataBase']);
	 	
	 }
	 
	 //Continues the last session if possible
	 function establishSession() {
	 	
		$cookieCredentials = getCookieCredentials();
		if($cookieCredentials[0] != NULL && $_SESSION['id'] != NULL) {
			
			session_start();
			$_SESSION['isActive'] = TRUE;
			
		}
		
	 }
	
?>