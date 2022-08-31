<!DOCTYPE html>
<html>
<head>
	<title>FILES SUPER GLOBAL IN PHP</title>
</head>
<body>

	<?php

//$_FILES superglobal in php;

	//here we use two methods to upload files;
	// (1)upload  it to the root;
	// (3) upload it to the data base;

	//but here we are going to be concerned with uploading it to the root;
//we are adding 2 or more curely brackets because a superglobal is mult-dimenonal array00000000
	echo $name=$_FILES['file']['name']."<br>";//THIS GIVES YOU THE NAME OF THE FILE YOU WANT TO UPLOAD
	echo $type=$_FILES['file']['type']."<br>";//THIS GIVES YOU THE TYPE OF THE FILE YOU WNT TO UPLOASD

	echo $tmp_locatio=$_FILES['file']['tmp_name']."<br>";//this gives you the temporal location of the file;

echo $error=$_FILES['file']['error'];//returns 0 if there is no erro and one if there is........
	?>	
<form action = "UPLOAD.php" method="post"  enctype="multipart/form-data"><!--the method  when you are working files upload is always post-->
<!--so we need to add another parameter here called enctype and set it to multipart/form-data which specify how the form data should be encoded-->

<input type="file" name="file">
<br>

<button type="submit">SUBMIT</button>
</form>
</body>
</html>
