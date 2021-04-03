<?php 
	session_start();

	if( !isset($_SESSION['username'] ) ){
		header('Location: login.php');
	}
	else{
		if($_SERVER['SCRIPT_NAME'] == '/DeveloperQuest/index.php'){
			header('Location: mainUI.php');
		}
		
	}
	
	
?>

<! DOCTYPE HTML>
<html>
	<head>
		<title>Developer Quest</title>
		<link type="text/css" rel="stylesheet" href="style.css">
	</head>
<body>