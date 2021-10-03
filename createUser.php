<?php
// Created by Professor Wergeles for CS2830 at the University of Missouri

	// Here we are using sessions to propagate the login
	// http://us3.php.net/manual/en/intro.session.php

    // HTTPS redirect
//     if ($_SERVER['HTTPS'] !== 'on') {
// 		$redirectURL = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
// 		header("Location: $redirectURL");
// 		exit;
// 	}
	
	// http://us3.php.net/manual/en/function.session-start.php
	 $username = empty($_COOKIE['username']) ? "" : $_COOKIE['username'];
    
    // If the user is logged in, redirect them home
    if ($username) {
        header("Location: private.php");
        exit;
    }
	
	
	$action = empty($_POST['action']) ? '' : $_POST['action'];
	
	if ($action == 'do_create') {
		create_user();
	} else {
		login_form();
	}
	
	function create_user() {
		$firstName = empty($_POST['firstName']) ? '' : $_POST['firstName'];
        $lastName = empty($_POST['lastName']) ? '' : $_POST['lastName'];
		$username = empty($_POST['username']) ? '' : $_POST['username'];
		$password = empty($_POST['password']) ? '' : $_POST['password'];
        $confirmPass = empty($_POST['confirmPass']) ? '' : $_POST['confirmPass'];
        $birthday = empty($_POST['birthday']) ? '' : $_POST['birthday'];
        $email = empty($_POST['email']) ? '' : $_POST['email'];
        
		
    
        
        if(strcmp($password, $confirmPass) == 0){
           // Require the credentials
            require_once 'db.conf';

            // Connect to the database
            $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

            // Check for errors
            if ($mysqli->connect_error) {
                $error = 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
                require "login_form.php";
                exit;
            }

            // http://php.net/manual/en/mysqli.real-escape-string.php
            $username = $mysqli->real_escape_string($username);
            $password = $mysqli->real_escape_string($password);
            
           // $password = sha1($password);

            // Build query
            $query = "INSERT INTO users (firstName, lastName, username, userPassword, email, birthday, addDate, changeDate) VALUES('$firstName', '$lastName', '$username', SHA1('$password'), '$email', STR_TO_DATE('$birthday', '%Y-%m-%d'), now(), now())";

            // Sometimes it's nice to print the query. That way you know what SQL you're working with.
//            print $query;
//            exit;
            
            if($mysqli->query($query) === TRUE)
            {
                $error = "New User Created Successfully";
                require "loginPage.php";
                exit;
            }
            else {
                $error = "Insert Error: " .$query . "<br>" .$msqli->error;
                require "creatUserPage.php";
                exit;
            }
            $mysqli->close();
        }
        // Else, there was no result
          else {
          $error = 'Login Error: Passwords do not match!';
          require "creatUserPage.php";
          exit;
        }
    }
	
	
	function login_form() {
		$username = "";
		$error = "";
		require "loginPage.php";
        exit;
	}
	
?>