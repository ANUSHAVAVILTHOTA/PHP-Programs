<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
// get all alphabets in to an array 
$alphachr=range('A','Z');
print_r($alphachr);
echo "<br/>";
foreach ($alphachr as $x) {
	// code...
	echo $x;
	echo "<br/>";
}


$alphachr=range('a','z');
print_r($alphachr);
echo "<br/>";
foreach ($alphachr as $x) {
	// code...
	echo $x;
	echo "<br/>";
}

$alphachr=array_merge(range('A','Z'),range('a','z'));
print_r($alphachr);
echo "<br/>";
foreach ($alphachr as $x) {
	// code...
	echo $x;
	echo "<br/>";
}
?>
</body>
</html>