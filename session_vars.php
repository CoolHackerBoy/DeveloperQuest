<?php
	require_once('Player.php');
	$localPlayerData = new PlayerData($_SESSION['user_id']);
	
?>
			
<script>
	var games_json = '<?php echo $localPlayerData->games_json; ?>';
	var gamesArrayFromPhp = JSON.parse(games_json);

	var session_vars = {
		games: gamesArrayFromPhp,
		money: <?php echo $localPlayerData->money; ?>
	};
</script>