<?php include('header_html.php'); ?>

<h1>Developer Quest</h1>
<h1>Register or Log in to get access!<h1>
<form method="post" action="login_process.php">
	<h2>Login</h2>
	<input placeholder="username" type="text" name="username">
	<br>
	<input placeholder="password" type="password" name="password">
	<br>
	<input type="submit" value="Log In">
</form>
<hr>
<form method="post" action="register_process.php">
	<h2>Create an Account</h2>
	<input 	
	<br>
	<input placeholder="password" type="password" name="new_pw">
	<br>
	<input type="submit" value="Register">
</form>

<?php include('footer.php'); ?>