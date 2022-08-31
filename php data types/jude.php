<?php 

//here we are going to review multidimednsional array
//here we are going to look array that can store marks of three students in an array
$marks=array(


	"jude"=>array(
"physics"=>13,
"math"=>12,
"chemistry"=>15


	),
	"leonard"=>array(
"physics"=>13,
"math"=>15,
"chem"=>17
	),
"stan"=>array(
	"physics"=>12,
	"math"=>19,
	"chem"=>12
)

);
echo "the marks of jude in physics is:" ."<br>";
echo $marks['jude']['physics']."br";
echo "the marks of jude in math is:".$marks['jude']['math']."<br>";
echo "the marks of ledonard in physics is".$marks['leonard']['physics']."<br>";
echo "the marks of ledonard in maths is".$marks['leonard']['math']."<br>";
echo "the marks of ledonard in chemistry is".$marks['leonard']['chem']."<br>";
echo "the marks of stan in physics is".$marks['stan']['physics']."<br>";
echo "the marks of ledonard in math is".$marks['stan']['math'];




?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="">
</head>

<body>

</body>
</html>