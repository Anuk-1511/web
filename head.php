<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    
}
?>
<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Jobs</title>
	<link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	
		
		  