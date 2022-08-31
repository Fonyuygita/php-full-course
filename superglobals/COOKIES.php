<!DOCTYPE html>
<html>
<head>
	<title>cookies in php </title>
</head>
<body>

	<?php
//cookies are small files that the webserver stores on the clients computer;


	//to creat a cookie we must start with the functin setcookie() and it should be at the top of your document,

	//A COOKIE HAS 6 ARGUMENT WHICH ARE;
	//name;
	//value;
	//expire;//cookie will be removed whenever the expired date is reached;
	//path; use to specify the path on the server for which the cookie sha;ll be available;

	//domain:use to specify the domain for which the cookie is available;
	//security:used to show that the cookie is send only to the specify http location;\
	$time=time() - 86400*30;

	setcookie("name","jude",$time);//let us add three parameters and see;
//note that here the name and value param are cumpulsory parameters +  date;


//noticed that instead of adding time to current time if will instead subtract the cookie will be available only for that moment;

print_r($_COOKIE);
echo $_COOKIE[$time];
//THEY IS NO FUNCTION IN PHP TO REMOVE A COOKIE .
//UNLLIKE SESSION WE USE ;
//session_destroy();
//there is no cookie_destroy

	?>

</body>
</html>