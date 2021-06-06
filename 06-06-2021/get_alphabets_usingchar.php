<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 

$array=array();
// A-Z 65 90
for($i=65;$i<=90;$i++){
	$array[]=chr($i); //A B chr(68)C
}
print_r($array);


$array=array();
// A-Z 65 90
for($i=97;$i<=122;$i++){
	$array[]=chr($i); //A B chr(68)C
}
print_r($array);
?>
?>


</body>
</html>