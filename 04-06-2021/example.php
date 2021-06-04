<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form method="post">
	<input type="number" name="a"> 
	<input type="number" name="b">
	<input type="submit" name="Submit">
</form>
<?php

// 45 34
// 45+35=80
// 45-35=10
// 45*35=1575
// 45/35 =1.2...

// 80+10+1575+1.2.. ==total value
if($_POST){
	$x=$_POST['a'];
	$y=$_POST['b'];

	$r=$x+$y;
	$r1=$x-$y;
	$r2=$x*$y;
	$r3=$x/$y;

	$sum=$r+$r1+$r2+$r3;

	$sum1=($x+$y)+($x-$y)+($x*$y)+($x/$y);

	echo $sum;
    echo "<br/>";
	echo $sum;
}

//  first number multiply with 2 
// second number multiply with 5
// add both the results
// remove -5 from the value

//  $t=2*$a
//   $t1=5*$b
//   $r=$t+$t1
//  $result=$r-5;
$x=6+7*9/90-56+(67+90)/100;  // operators pri----



?>
</body>
</html>