<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
// lower to upper case
$str="Hello World";
$from=range('a', 'z');
$to=range('A','Z');
$res=str_replace($from,$to,$str);

echo $res;
echo "<br>";

function upper1($str){
	$str="Hello World";
	$from=range('a', 'z');
	$to=range('A','Z');
	$res=str_replace($from,$to,$str);
	return $res;
}
$y=upper1("HelloWorld");
echo $y;
?>
</body>
</html>