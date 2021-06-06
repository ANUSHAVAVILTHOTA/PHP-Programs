<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 

$x='90';
// a-z     or A-Z alphabet
// not a alphabet
if( ($x>='a' && $x<='z') || ($x>='A' && $x<='Z') ){
	echo $x." is an alphabet character";
}
else{
	echo $x." is not an alphabet character";
}

// strrev
// ctype_alpha
// condition ? exp1:exp2 
// if condition is true it will execute exp1
// if condition is false i will execute exp2
echo "<br/>";
$c=($x>='a' && $x<='z') || ($x>='A' && $x<='Z') ? 1:0;
if($c==1){
	echo $x." is an alphabet character";
}
else{
	echo $x." is not an alphabet character";
}
?>
</body>
</html>