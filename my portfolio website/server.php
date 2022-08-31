<?php 
 
session_start();
//here we are going to do our registration here
$username="";
$email="";
$error=array();
//let us connect to our database;
$db=mysqli_connect('localhost','root','','practice');
//if the r egister button is clicked

if(isset($_POST['submit'])){
	$username=mysqli_real_escape_string($db, $_POST['username']);
	$email=mysqli_real_escape_string($db, $_POST['email']);
	$password=mysqli_real_escape_string($db, $_POST['password']);
	$password2=mysqli_real_escape_string($db, $_POST['password2']);

	
	//ensure that form fields are fill properly;
	if(empty($username)){
		array_push($error, "username is required");

	}

	if(empty($email)){
		array_push($error, "email is required");

	}
	
	if(empty($password)){
		array_push($error, "password is required");

	}

	if($password != $password2){
		array_push($error, "the two password do not match");

	}
	//if there are no errors save user to the database;
	if(count($error)==0){
		$password=md5($password);//encrypt the passwor before storing into database
		$sql="INSERT INTO registration (username, email,password ) VALUES('$username', '$email','$password')";
		mysqli_query($db,$sql);


$_SESSION['username']=$username;
$_SESSION['success']='You are now a new customer in BH';
header('location:index.php');


	}
	//let us log the user in
	if(isset($_POST['login'])){
	$username=mysqli_real_escape_string($db, $_POST['username']);


$password=mysqli_real_escape_string($db, $_POST['password']);
	$password2=mysqli_real_escape_string($db, $_POST['password2']);

	//ensure that form fields are fill properly;
	if(empty($username)){
		array_push($error, "username is required");
}
	if(empty($password)){
		array_push($error, "password is required");

	}

	if($password != $password2){
		array_push($error, "the two password do not match");
}
if(count($error)==0){
	md5($password);
	$sql="SELECT * FROM registration WHERE username='$username' AND password='$password'";
$result=mysql_query($db,$sql);
if(mysqli_num_rows($result)==1){
	$_SESSION['username']=$username;
	$_SESSION['success']='YOU ARE LOGGED IN SUCCESFULLY';
	header('location:index.php');



}
else{
	array_push($error, 'wrong password and username combination');
	header('location:login.php');
}
}


	}

if(isset($_GET['logout'])) {
    session_start();
    unset($_SESSION['username']);
    session_destroy();
    header('location: index.php');
}

}

 ?>
