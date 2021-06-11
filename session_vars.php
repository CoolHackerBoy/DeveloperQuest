<?php
	require_once('database_API.php');
	$localPlayerData = new PlayerData($_SESSION['user_id']);
?>
			
<script>
	var session_vars = {
		money: <?php echo $localPlayerData->money; ?>
	};
</script>