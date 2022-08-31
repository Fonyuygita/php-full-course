<?php 



include "server.php";


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>contact page</title> 
	 <link rel="stylesheet" href="style.css">
	 <link rel="stylesheet" href="contact.css">
 	
 </head>
 <body>

 <div class="contact-title">
 <h1>Register Now<span><a href="login.php"> Login</a></span></h1>
 <h2>Welcome</h2> 
 <div class="contact-form">
<form id="contact-form" method="post" >

	<!--display validation errors here-->
	
	<?php include "errors.php" ?>
	
	
<input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $username; ?>" >
<br>
<input type="email" name="email" class="form-control" placeholder="your email" value="<?php echo $email;  ?>">
<br>
<input type="password" name="password" placeholder="password" class="form-control" >
<br>
<input type="password" name="password2" placeholder="Confirm password" class="form-control">

<br>
<input type="submit" name="submit" class="form-control submit" value="Register" >

</form>


 </div>	
 </div>
 </body>
 </html>
 
  