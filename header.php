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
	
	include('header_html.php');
?>