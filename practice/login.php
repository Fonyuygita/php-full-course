<?php 

include "server.php";

 
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
		<h1>LOGIN, YOU ARE ALREADY A MEMBER</h1> <span>
			<h2>If Not registered already? <a href="registration.php">Register</a></h2>
				<form name="form" class="myform" method="post">
			
			
			<input type="text" name="email" placeholder="email">
			<br>
			<input type="password" name="password" placeholder="password" >
			<br>
			<input type="submit" name="submit" value="LOGIN" >



		</form>
	</div>


</div>

</body>
</html>