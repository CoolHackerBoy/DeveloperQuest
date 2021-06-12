<?php
	session_start();
	if (!empty($_POST) ){
		require_once('database_API.php');
		$localPlayerData = new PlayerData($_SESSION['user_id']);
		
		if ($_POST['action'] == 'buyComputer'){
			$localPlayerData->updateMoney(-80);
			echo 'You bought a computer.';
		}
		
		if ($_POST['action'] == 'makeGame'){
			echo 'You made a game';
		}
	}
	else{
		echo 'No action was taken.';
	}
	
?>