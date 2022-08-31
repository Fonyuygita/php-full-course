<?php

?>
<?php 
session_start();
if(isset($_SESSION['username'])){
	$_SESSION['msg']='you are now logged in';
	header("location:;login.php");


}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location:login.php");
}



 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>home page</title>
 </head>
 <body>
 	<h1>THIS IS THE HOME PAGE</h1>
 	<?php  
  if (isset($_SESSION['success'])) :?>
  	<div>
  		<h3>
  		<?php
echo $_SESSION['success'];


  		?>
  	</div>
  	</h3>

  <?php endif ?>
  <!--if the user log in print information abou him;-->
  <?php if(isset($_SESSION['username'])):?>
  	<h3>Welcome <strong><?php echo $_SESSION['username']; ?></strong>
  	</h3>
<button><a href="index.php?logout='1'"></a></button>
<<?php endif  ?>
 
 </body>
 </html>