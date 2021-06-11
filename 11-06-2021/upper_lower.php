<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
// lower case
$str=strtolower("hello WORLD");
echo $str;
echo "<br>";

// upper case
$str=strtoupper("Hello World");
echo $str;
echo "<br>";

// without using above functions

$str="Hello World";

$from=range('A','Z'); // [A,B,C-----Z]
$to=range('a','z'); //[a,b,c----z]
$result=str_replace($from, $to, $str); //H h
// which chars we want to replace
// new chars to replace
echo $result;

function myfun($str){ ///$str="Hello World"
    $from=range('A','Z'); // [A,B,C-----Z]
	$to=range('a','z'); //[a,b,c----z]
	$result=str_replace($from, $to, $str); //H h
	return $result;// hello world
}

$x=myfun("Hello World");
echo $x;
?>
</body>
</html>