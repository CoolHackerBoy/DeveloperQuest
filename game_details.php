<?php
	include('header.php');
	
	require_once('classes/Game.php');
	$game = new Game($_GET['game_id']);
?>
<h1><?php echo $game->title; ?></h1>
<a id="backToLibrary" class="button" href="library.php">Back to Library</a>
<?php
	include('footer.php');
?>