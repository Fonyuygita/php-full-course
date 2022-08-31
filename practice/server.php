<?php 


session_start();//when you log into a webpage we arwe going to like to track you and  we always do this by using session variables;  
$username='';
$email='';


$error=array();
//connect to the base
$conn=mysqli_connect('localhost','root', '', 'practice' ) or die("could  not connect to database");
//let us retrieve what is writen in our php script;
//so nelow we are going to use a function calle mysqli_real_escape_string

$username=mysqli_real_escape_string($conn, $_POST['username']);
$email=mysql_real_escape_string($conn, $_POST['email']);

$password=mysql_real_escape_string($conn, $_POST['password']);
$password2=mysql_real_escape_string($conn, $_POST['password2']);

//now let us dovalidation;
if(empty($username)){
	array_push($error, 'username is required');

}

if(empty($email)){
	array_push($error, 'Email is required');

}
if(empty($password)){
	array_push($error, 'password is required');
}
if($password=!$password2){
	array_push($error, 'password do not match');
}
 
 //now the next level of code is to ensure that the user should not register 2 times with the same username;
//check for existing username;

$user_check_query="SELECT * FROM register WHERE username='$username' or email='$email' LIMIT 1 ";
  
//NOW LET US CHECK FOR EXISTING USERNAME;
$results=mysqli_query($conn, $user_check_query); //the resultf will be gotten like this and stored into the variable result;

$user=mysqli_fetch_assoc($results);//store your fetch result as associative array
if($user){
	
	if($user['username']===$username){
			array_push($error, 'username already exist');

	}

	if($user['email']===$email){
		array_push($error, 'email already exist'); 
	}
}

if(count($error)==0){
	$pass=md5($password);//this will encrypt our password;
	//and i will run a new querry with the encrypted password;
	$query="INSERT INTO register(username, email, password) VALUES ('$username', '$email', '$pass')";
	//for which after yoyu run the query;

	mysqli_query($conn, $query);
	$_SESSION['username']=$username;
	$_SESSION['success']='you are now log in';
	header("location:index.php");


}

 ?>


