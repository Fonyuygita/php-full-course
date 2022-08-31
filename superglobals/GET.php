<!DOCTYPE html>
<html>
<head>
	<title>GET SUPER GLOBAL VARIANLE</title>
</head>
<body>
	<?php 
//$_GET;
	//THE GET SUPER GLOBALIS USED TO COLLECT INFORMATION FROM THE HTML FORM AFTER SUBMITING IT,, BUT HERE THE   DATA WILL BE VISIBLE IN RTHE URL;

//ALWAYS USED WHEN YOU WANT TO SENT NON SENSITIVE INFORMATION;

	//DON'T USED THE GET METHOD IF YOU WANT TO SUBMITED A PASSWORD BECAUSE PASSWORD IS SENSITIVE INFORMATION;

//WE STILL NEED     TO CREAT A FORM OUTSIDE OF OUR PHP TASK TO SEE THIS;

	?>

<form action="GET.php"  method="get">
	
	PASSWORD:<input type="password" name="password">
	<br><br>
	AGE:<input type="text" name="age">
	<br>
	<br>
	CLICK:<button type="submit">Submit</button>
</form>

</body>
</html>