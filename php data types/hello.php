<!DOCTYPE html>
<html>
<head>

	<title>hello world</title>
	<style type="text/css">
		.main{
			color:white;
			background: green;
			font-weight: bold;
			font-style: italic;
			font-size: 40px;
			margin-left: 200px;
		}

		body{
			background: #323232;
			color: white;
		}


	</style>
</head>
<body>

	<h class="main">welcome to my php course</h><br>

<?php

$name="dary";
//VARIABLE
// a variable is a symbol or name that stand for a value;
//use in storing values llike char string numb and other data types so that they can be used in any part of the program
echo "my name is $name <br>";
echo $name . " is 25 years old" . "<br>";
echo "$name";
//DATA types in php;

//let us start with int data types


$age=24;
echo "$age";
echo "<br>";

echo "my name is fomonyuy i am " . $age . " years old";


$x=null;

echo "$x";

//let us now look at a very important concept in php which is using arrays in your php codes(a very very very very important concept in php)

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$car1="BMW";
$car2="Audi";
$car3="Mercedes";

echo "I love $car1 car" ;


//all of this above can be stored in one variable;

$cars = array( "BMW", "Audi", "Mercedes" );

echo "<br>";

echo "$cars[1]";
//now let us see how we can access various data types from our array using php
//here we are going to use a build in function in php called a var_dump(variable name);

echo "<br>";
echo "<br>";
$mycar=array("Audi", 2015, 3467.34, true); 
var_dump($mycar);
//or we use print_r();
print_r($mycar);


//now let us see how to merge arrays in javacript and to that we need to use build in function in javascript called merge;
//so let us creat a new array called cars2;

$cars2=array("vovle", "chevy" , "volsvagen");

//let us see how to  add cars2 information inside cars

echo "<br>";

$cars=array_merge($cars, $cars2);
echo "
<br>";

var_dump($cars);

//let us now iscuss about associative arrays

//an associative array helps yhou to attach a non string value to a string :for example consider the example below;
echo "<br>";
echo "<br>";


$sandals=array("saint paul"=>5000.0, "our lady of lourde"=>6000.0, "sac"=> 5500.0);

echo "<br>";



echo "<br>";
echo "<br>";

$sandals["sac"]=5500.0;
echo $sandals["sac"];
echo "<br>";
foreach ($sandals as $key => $value) {
	echo  $key . " has "  .$value . " of pricing their school sandals <br>" ;


	# code...
}




/*next we are going to be talking about multi dimensional arrrays*/
$names=array("first3"=>array("marion","adela","jude"), 

	"last3"=>array("paul","mark","john"));

echo "br";

echo "br";
echo "br";

echo $names[first3][2];
//exercises on javascript
//exercises on pp data types
echo "<br>";
echo "<br>";
echo "<br>";
//exercise 1

$x=34;
$y=23;
$z=($x+$y)*5;

echo "The sum of $x and  $y is $z";


//exercise 2
#vallue added tax
$price=300;
$vat=0.2;
$totalPrice=($price*$vat)+$price;

echo "price is <br> " .$price;
echo "<br>";
echo "<br>" ;

echo "And vat is" .$vat;
echo "<br>" ;
echo "<br>" ;

echo "then total price will be" . $totalPrice;

echo "<br>" ;





?>
</body>
</html>