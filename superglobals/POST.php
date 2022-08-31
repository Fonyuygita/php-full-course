<!DOCTYPE html>
<html>
<head>
	<title>POST METHOD</title>
</head>
<body>

	<?php
//THE POST METHOD COLLECTS DATA FROM THE HTML FORM WHICH IS INVISIBLE;


//GO OUT OF OUR PHP TAGS AND CREAT A FORM IN HTML WITH METHOD POST TO TEST THIS OUT;


//so we use a function called isset to see whether our input have really been taken;
// ISSET FUNCTION IS USED TO CHECK WHETHER A VARIABLE IS SET OR NOT;

		if(isset($_POST)){

			echo $_POST['name'] . "  are you prety sure that is your age";//noticeed that the form has been submited because my post name is past through the form;
			echo "<br>";

			print_r($_POST);//this is showing that the post super global stores infprmation as an array;
		}

	?>

<form action="POST.php" method="post">
	NAME:<input type="text" name="name">
	<br>
	AGE<input type="text" name="age">
	<br>
	<button type="submit">SUBMIT</button>

<!--atfter submiting this form nothing has happened to our url you never know whether the inputs have been taken or not . so we need to do some coding in php-->

</form>
</body>
</html>