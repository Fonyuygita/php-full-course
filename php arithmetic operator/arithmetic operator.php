<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body{
			color: white;
			background: #313131;
			font-size: 21px;
		}
		.head{

			justify-content: center;
			font-size: 35px;
			color: white;
			background:green;
			margin-left: 230px;
			font-weight: bold;
		}


	</style>
	<title>arithmetic operator in php</title>
</head>
<body>
	<div class="head">WELCOME TO PHP ARITHMETIC OPERATOR</div>
<?php 
//they arithmetic operator on more than one operant
$y=4;
$x=5;
echo $x+5;
echo "<br>";
echo $y-$x;0


echo "<br>";

$c=$x % $y;
echo "<br>";
echo $c;

// Assignment operator;(in php we have 5 assignment operator;which are);
//+=Add and assign;
//-=subtract and assign;
//*=multiply and assgn;
// /=divide and assign;
// .=concatenate and assign;

$x=5;
$x+=5;
echo "<br>";
echo $x;

$str=" Darry is an old man";
$str.= " becase he is 24 years old";
echo "<br>";
echo "$str"; 

//comparison operators include;
//<,>,==;

//lastly let us look at spaceship operator;
//-if he value on the left hand side is less than the value on the right hand side, the system returns -1;
//if the value  on the left hand side equals that on the right hand side the system returns 0;

//if the value on the left is greater than  the value on tghe right hand side the system returns 1;


//now let us talk about logical operators in php;
//eg--we can incrfimate and decrimate php operator

$x=10;
echo "<br>";
echo $x++;
echo "<br>";
 
echo $x;
echo "<br>";
echo $x;
echo $x;
echo $x;
echo "<br>";
echo "<br>";



$x=10;
$y=1;
if($x==$y xor "fonyuy"=="fonyuy"){
echo "true";
}
else{
	echo "false";
}

//php has 4 conditgional statedment; which include;
//the if statement;
// the switch stgatement;
//the else statement;
//and the else if statement;

//ket us write a program that takes in the age of the user and prinout an ero message if the user is less than 18 years old;
echo "<br>";

$age=10;

if($age>=20){
	echo "you are too young to access this side";

}
elseif ($age>40) {
	echo "you are too old to access this page";
}
//you can add as many ifelse statements as possible
elseif ($age<12) {
echo "you need to be sleeping";		# code...
	}	# code...

else{
	echo "welxcome to our website";
}

echo "<br>";
//let us ta;k about the switch statement
$role="welcome";


switch ($role) {
	case 'visitor':
		# code..
	echo "<br>";
	echo "welcomer visitor";
		break;
	case "manager":
	echo "we do not need a mananger for now";
	break;

	case 'school':
	echo "we want to go to school";

		# code...
		break;

		case 'coding':
		echo "i want to be a master corder";
			# code...
			
	default:
		# code..
	echo "not present at all";
		break;
}

//looping in php.
//we start from the  while loop;
//while loop dont know the number of iteration;

$x=0;
while ($x<10) {
	# code...e
	$x++;

	echo "<br>";
	echo ($x) ." my name is Fomonyuy";
}

//let us now checkout the do - while loop;

//with do while loop no curly braces are place between the while loop
echo "<br>";
echo "<br>";
echo "<br>";

$d=0;
do{
	echo "<br>";
	echo "i am learning how to code in php";

$d++;
}
while ($d <= 10)

//let us now look at the for loop
	echo "<br>";
	echo "<br>";
	


for($c=1;$c<=10;$c++){

	echo "<br>";

	echo " welcome to my php course  ". $c;
} 

//next we want to talk about functions in php

echo "<br>";
echo "<br>";
echo "<br>";
echo "<ul>";
echo "Functions in php";
//what is a function : a function is a block of code writen in a program to perfect some specific task

//two types of function which are;
//-build in function ;
//and user define function;
$num1=30;
$num2=23;
//question why will you use function?
//(1)Reusability;
//(2) Easy for error detection;
// (3) Easily maintained;
//let us try to creat a function with parameter and  see what we are going to output;
function myFunc($num1, $num2)//am using camel-case to writew my function()two joined words in which the first start with small lette

{
	$sum=$num1+$num2;

	return $sum;
}

echo "<br>";
echo " the sum of $num1 and $num2 is  ". myFunc($num1,$num2);
?>



</body>
</html>