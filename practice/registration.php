<?php

require_once "server.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>registration page</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<div class="container">
	<div class="header">
		<h1>REGISTER TO BE A MEMBER</h1> <span>
			<h2>Already registered? <a href="login.php">Login</a></h2>
				<form name="form" class="myform" method="post" action="index.php">
					<?php include "errors.php"?>
			<input type="text" name="username" placeholder="username" >
			<br>
			<input type="text" name="email" placeholder="email">
			<br>
			<input type="password" name="password" placeholder="password" >

			<br>

			<input type="password" name="password2" placeholder="Confirm password" >
			<br>
			<input type="submit" name="submit" value="REGISTER NOW" >



		</form>
	</div>


</div>

</body>
</html>