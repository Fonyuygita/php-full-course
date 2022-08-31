<?php
if(isset($_POST['submit'])){


$file=$_FILES['file'];
$name=$_FILES['file']['name'];
$size=$_FILES['file']['size'];
$error=$_FILES['file']['error'];
$tmp_name=$_FILES['file']['tmp_name'];






$tmpExtension=explode('.', $name);

$fileExtension=strtolower(end($tmpExtension));



$isAllowed=array('jpg','jpeg', 'pdf', 'png');


if(in_array($fileExtension, $isAllowed)){
//
	if($error===0){

if($size<300000){

$newFilename=uniqid("", true). "." . $fileExtension;

$fileDestination="uploads/".$newFilename;

move_uploaded_file($tmp_name, $fileDestination);

header("location : FILE.php?uploadedsuccess");


}

else{
	echo "your file size is too big";
}
	}

	else{
		echo "there, awas an error try it again";
	}
}




else{

	echo "sorry, your file type is not accepted";
}

   }
?>