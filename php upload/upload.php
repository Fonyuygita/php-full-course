<!DOCTYPE html>
<html>
<head>
	<title>php upload system</title>
</head>
<body>
	<?php
if(isset($_POST['submit'])){

	$file=$_FILES['file'];
	$fileName=$_FILES['file']['name'];
	$filetmpName=$_FILES['file']['tmp_name'];
	$fileType=$_FILES['file']['type'];
	$filesize=$_FILES['file']['size'];
	$fileError=$_FILES['file']['error'];

$fileExt=explode('.', $fileName);
$actualFileExt=strtolower(end($fileExt));

//specify the files you want to upload

$isAllowed=array('jpg','mpeg','pdf','png');

if(in_array($actualFileExt, $isAllowed)){

if($fileError===0){

if($filesize<1000000){
$NewFileName=uniqid('', true). '.' . $actualFileExt;
$filedestination='upload/'.$NewFileName;
move_uploaded_file($filetmpName, $filedestination);
header('location:index.php?uploaded');
}
echo "file size is too big";
}
echo "error";
}
else{
	echo "you file type is not accepted";
}



}


	?>

</body>
</html>