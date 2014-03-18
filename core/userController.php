<?php

	/**
	 * mPage UserController file
	 * Copyright (c) mtronics 2014
	 * In here, all the user related stuff happens.
	 * Do not modify or redistribute it in any way.
	 */
	
	include_once 'core.php';
	
	//Convenience method, returns the _SESSION variable
	function getSession() { return $_SESSION; }
	
	//Lets you sign in with your user credentials
	function signIn($username, $password) {
		
		$username = mysql_real_escape_string($username);
		$password = sha1($username . ":" . $password);
		
		establishMySqlConnection();
		
		$query = "
			SELECT *
			FROM users
			WHERE username = '$username' AND password = '$password';
		";
		
		$result = mysql_query($query);
		$result = mysql_fetch_array($result);
		
		//Failsafe
		if($result == FALSE) return FALSE;
		
		//Sets session variables
		$_SESSION['id'] = $result['id'];
		$_SESSION['username'] = $result['username'];
		$_SESSION['firstName'] = $result['firstName'];
		$_SESSION['lastName'] = $result['lastName'];
		$_SESSION['email'] = $result['email'];
		$_SESSION['profilePicture'] = $result['profilePicture'];
		$_SESSION['isAdmin'] = $result['isAdmin'];
		
		//Starts the session
		setcookie("userCredentials", $username . ":" . $password, 0);
		establishSession();
		
	}
	
	//Returns the user credentials from a cookie if available
	function getCookieCredentials() {
		
		$cookie = $_COOKIE['userCredentials'];
		$cookie = explode(":", $cookie);
		return $cookie;
		
	}
	
?>