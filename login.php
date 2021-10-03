<?php
// Created by Professor Wergeles for CS2830 at the University of Missouri

	/*
		This script does one of 3 things:
			1. If the user is visiting for their first time, present a login form
			2. If the login was submitted, process the credentials (username/password)
				Success = Set a cookie and redirect to page1.php
				Failure = Present the login form again with an error
			3. If the user is already logged in, redirect them to page1.php
	*/

    $username = empty($_COOKIE['username']) ? "" : $_COOKIE['username'];
    
    // If the user is logged in, redirect them home
    if ($username) {
        header("Location: private.php");
        exit;
    }
    
    // Pull out "action" value from $_POST
    $action = empty($_POST['action']) ? '' : $_POST['action'];
    
    if ($action == 'do_login') {
        // If the action is "do_login", then the form was submitted
        handle_login();
    } else {
        // Else, the form wasn't submitted, so present the login
        login_form();
    }
    
    function handle_login() {
        $username = empty($_POST['username']) ? "" : $_POST['username'];
        $password = empty($_POST['password']) ? "" : $_POST['password'];
        
        $dbhost = "localhost";
        $dbuser = "ec2-user";
        $dbpass = "ben";
        $dbname = "CS2830";
        
        
        
        // Connect to the database
 		$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        
        // Check for errors
 		if ($mysqli->connect_error) {
 		   	$error = 'Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
 			require "loginPage.php";
 		   	exit;
 		}
        $username = $mysqli->real_escape_string($username);
        $password = $mysqli->real_escape_string($password);
        $password = sha1($password);
        
        
        $query = "SELECT id FROM users WHERE username = '$username' AND userPassword = '$password'";
        
        $result = $mysqli->query($query);
 		if($result){
             
             $match = $result->num_rows;
             $result->close();
             $mysqli->close();
            
            
             if($match == 1){
                 setcookie("username", $username);
                 header("Location: private.php"); 
                 exit; 
             }
             else {
                 $error = "Error: Incorrect username or password"; 
                 require "loginPage.php"; 
                 exit; 
             }
        } 
        else {
          $error = 'Login Error: Please contact the system administrator.';
          require "loginPage.php";
          exit;
        }
        
    }
    
    function login_form() {
        $username = "";
        $error = "";
        require "index.php";
    }
?>
