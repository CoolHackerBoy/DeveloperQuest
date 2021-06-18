<?php
	session_start();
	if (!empty($_POST) ){
		require_once('Player.php');
		$localPlayerData = new PlayerData($_SESSION['user_id']);
		
		if ($_POST['action'] == 'buyComputer'){
			$localPlayerData->buyComputer();
			
			echo 'You bought a computer.';
		}
		
		if ($_POST['action'] == 'makeGame'){
			$localPlayerData->createGame('Battle Royal');
			
			echo 'You made a game';
		}
	}
	else{
		echo 'No action was taken.';
	}
	
?>