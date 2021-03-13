<?php
	session_start();
	require_once('../show_php_errors.php');

	require_once('../db_con_developer_quest.php');
	
	function is_username_valid( $username, $db_con ){
		
		if (preg_match('/^[a-zA-Z0-9-_]*$/', $username) ){
			$select_stmt = 'SELECT * FROM users WHERE username = "'.$username.'"';

			$result = mysqli_query($db_con, $select_stmt);

			if($result->num_rows){
				return false;
			}
			else{
				return true;
			}
		}
		else{
			return false;
		}
	}
	
	function getAllPlayers(){
		include('../db_con_developer_quest.php');
		
		$db_con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
		
		$select_stmt = 'SELECT * FROM users';
		
		$result = mysqli_query($db_con, $select_stmt);
		
		$all_players = mysqli_fetch_all($result, MYSQLI_ASSOC);
		
		return ['count'=>count($all_players), 'players'=>$all_players]; 
	}
	
	$db_con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	
	 if (!$db_con) {
		echo 'ERROR NO NO NO';
	 }
	 
	 if (!empty($_POST)){

		$username = $_POST['new_user'];	
		
		if(is_username_valid( $username, $db_con) ){
			$hashed_password = hash('sha512',$_POST['new_pw'] );
			$stmt = 'INSERT INTO users (
											username ,
											hashed_password
											) 
			VALUES (
				"'.$username.'" ,
				"'.$hashed_password.'" 
				)';
			
			if (mysqli_query($db_con, $stmt) ) {
				$_SESSION['username'] = $username;
				
				header('Location: mainUI.php');
			}
			else{
				echo 'ERROR, INVALID USERNAME';
			}
		}
		
	}
	 mysqli_close($db_con);