<!DOCTYPE html>
<html>
<head>

	<style type="text/css">
		
		body{
			background: #323232;
			color: white;
			font-size: 25px;

		}
		.advance{
			font-size: 34px;
			color: white;
			background: green;
			text-align: center;
			justify-content: center;
		}
	</style>
	<title>superglobals in php</title>
</head>
<body>
	<div class="advance">A MORE ADVANCE TOPIC IN PHP <br> USED TO STORE AND GET INFORMATION FROM ONE PAGE TO ANOTHER</div>
<br>
<br>
<br>

	<?php
	//MORE ADVANCE TOPICS IN PHP;
//a super global are basically variables that are available from any part of your code;
	// example  cookie and insertion are use to store information for later use;
	//a superglobal is mainly used to store  and get information from one page to another;
	//e.g

	/*
GLOBALS;
$_POST;
$_GET;
$_SERVER;
$_COOKIE;
$_SESSION;
$_FILES;


	*/

//LET US START WITH A 'GLOOBAL':WHICH IS USE TO ACCESS GLOBAL VARIABLES ;
//EXAMPLE;
//a variable that access all the global variable is called a super global;
$x=2;
$y=7;
function add(){
	//noticed that we past no parameters since we are dealong with GLOBALS;
	$GLOBALS['z']=$GLOBALS['x'] + $GLOBALS['y'];
}
add();
echo $z;




//let us now discuss more about the $_POST-method
//what is does is that it collect data from the HTML form (invisible);
//lets us work out of our html task and creat a form to work this out;

echo "<br>";
echo "<br>";
echo "<br>";

	?>
<!--let us creeat two inputs fields in our html task REMEMBER THAT IT SHOULD BE INSIDE THE FORM TAG-->
<form action="superglobal.php" method="post">
NAME:<input type="text" name="name">
<br><br>
AGE:<input type="text" name="age"><br>
<button type="submit">submit</button>
<!--after submiting noticed that nothing has happpened inthe url, but the form is submited-->
</form>
</body>
</html>