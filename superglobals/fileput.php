<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

//so we want see how ytou can creat your own file  by coding in php. so we are going to see functions like fopen(),. fclosed(), fwrite()....


//first we crea a function that will locate your file
if (isset($_POST['submit'])) {
	
	$myfile=fopen("uploads/file.txt", "a");

	//let us now creat a function that will write something to the file

	$txt="my age is " . $_POST['age']."\n";

	fwrite($myfile, $txt);



	fclose($myfile);


}
	
//how to read everything on our file.txt inside the browser;

	?>

<form action="fileput.php" method="post">
	
<input type="text" name="age">
<input type="submit" name="submit">

</form>

</body>
</html>