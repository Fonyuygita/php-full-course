<!-- <!DOCTYPE html>
<html>
<head>
	<title>SESSION SUPER GLOBAL</title>
</head>
<body>

	<?php
//session is used to store sensitive in formation;
	//session xist as long as the browser is on

//to creat our session we start with a function called sessiion_start in php;

session_start(); 
	//you do not need to past in any parameter;
	//storing information right now;

	$_SESSION['name']="jude";
	$_SESSION['age']=20;

	//session super global is also an array so what we are basically doing is creating an array of name and age that has a value of "jude" and 20;;


	echo " hello " .$_SESSION['name'];


	?> -->
<!-- 
</body>
</html> -->
<!DOCTYPE html>
<html>
<head>
	<title>php session overview</title>
</head>
<body>
	<form method="post" action="GET.php">
		<input type="text" name="name" placeholder="name">

<br>
<input type="text" name="email" placeholder="email">
<br>
<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>
<?php 
if(isset($_POST['submit'])){
	session_start();
	//now we are going to take the post values and put them into session variables
	$_SESSION['name']=htmlentities($_POST['name']);
	$_SESSION['email']=htmlentities($_POST['email']);
	
}



?>