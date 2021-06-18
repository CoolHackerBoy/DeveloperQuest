<?php
	require_once('Player.php');
	$localPlayerData = new PlayerData($_SESSION['user_id']);
?>
			
<script>
	var session_vars = {
		money: <?php echo $localPlayerData->money; ?>
	};
</script>