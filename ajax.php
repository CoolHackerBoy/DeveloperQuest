<?php
	session_start();
	if (!empty($_POST) ){
		require_once('classes/Player.php');
		require_once('classes/Game.php');
		$localPlayerData = new Player($_SESSION['user_id']);
		
		if ($_POST['action'] == 'buyComputer'){
			$localPlayerData->buyComputer();
			
			echo 'You bought a computer.';
		}
		
		if ($_POST['action'] == 'makeGame'){
			$game_id = $localPlayerData->createGame($_POST);
			echo $game_id;
		}
	}
	else{
		echo 'No action was taken.';
	}
	
?>