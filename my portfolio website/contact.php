<?php 


include "index.php";


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>contact page</title> 
 	<link rel="stylesheet" type="text/css" href="contact.css">
 </head>
 <body>

 <div class="contact-title">
 <h1>COMMENT <span>PLEASE!</span></h1>
 <h2>Bring your deals </h2> 
 <div class="contact-form">
<form id="contact-form" method="post">
<input type="text" name="name" class="form-control" placeholder="Username" required>
<br>
<input type="email" name="email" class="form-control" required placeholder="your email">
<br>
<textarea name="message" class="form-control message" placeholder="message"></textarea>
<br>
<input type="submit" name="submit" class="form-control submit" value="COMMENT" >

</form>


 </div>	
 </div>
 </body>
 </html>
 <<?php 
//script for me to receive user messages
 	if(isset($_POST['submit'])){
 		$name=trim($_POST['name']);
 		$message=trim($_POST['message']);
 		$email=trim($_POST['email']);


 		//define the other variables tobe included in  the function mail
 		$myEmail="judebh@email.com";
 		$header="from ". $email;
 		$message2="Jude you have received a message from " . $name . ".\n\n" . $message;
$subject="welcoe to jude's world";
mail($myEmail, $subject, $message2, $header);

	# codeech
	
	header("location:contact.php?emailSend");


header("location:contact.php?emailSend");
 	}


  ?>