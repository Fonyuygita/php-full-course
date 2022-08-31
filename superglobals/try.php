<!DOCTYPE html>
<html>
<head>
	<title>try to corrrect your mistakes in uploads</title>
</head>
<body>

	<?php
if(isset($_POST['submit'])){
$file=$_FILES['file'];
$name=$_FILES['file']['name'];
$tmp_name=['file']['tmp_name'];
$error=$_FILES['file']['error'];
$size=$_FILES['file']['size'];


$tmpExtension=explode(".", $name);

$fileExtension=strtolower(end($tmpExtension));//always converrt the . png. jpeg, to lower case


$Isallowed=array("png"."jpg","pdf","jpeg");



if(in_array($fileExtension, $Isallowed)){

	if($error===0){

if($size<30000){

//inside the file size we nee to  specify the location  and do some core error handling
$newFileName=uniqid("",true). "." .$fileExtension;
$fileDestination="uploads/".$newFileName;

move_uploaded_file($tmp_name, $fileDestination);
header("location:FILE.php?uploadedsucccess");
}

else{
	echo "your file is too big";
}
	}

	else{
		echo "Sorry, there was an error try it again";
	}

}


else{



	echo "yhour file type is  not allowed";


}
}












	?>

</body>
</html>