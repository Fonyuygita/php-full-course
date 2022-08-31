<?php 


include "index.php";
include "server.php";



 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>contact page</title> 
 	<link rel="stylesheet" type="text/css" href="contact.css">
 </head>
 <body>

 <div class="contact-title">
 <h1>login  Now<span><a href="register.php"> Login</a></span></h1>
 <h2>Welcome</h2> 
 <div class="contact-form">
<form id="contact-form" method="post" >

<input type="email" name="email" class="form-control" required placeholder="your email">
<br>
<input type="password" name="password" placeholder="password" class="form-control">
<br>
<input type="password" name="password2" placeholder="Confirm password" class="form-control">

<br>
<input type="submit" name="login" class="form-control submit" value="Login" >

</form>


 </div>	
 </div>
 </body>
 </html>
 
  