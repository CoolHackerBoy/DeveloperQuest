<?php include('header.php'); ?>

<div id="titalContainer">
	<h1>Developer Quest</h1>
	<button id="startGame">Start Game</button>
</div>

<div id="usernameContainer">
	
	<?php

		if( !isset($_SESSION['username'] ) ){
			include('login.php');
		}
		else{
			include('mainUI.php');
		}
	?>
	
</div>

<?php include('footer.php'); ?>