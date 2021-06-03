<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post">
		Enter a first value:
		<input type="number" name="a1"> 
		Enter second value:
		<input type="number" name="b1">

		<input type="submit" name="submit">
	</form>
<?php

// $x=15;
// $y=30;
// $z=$x+$y;
// echo $z;
// +,-,*,/,% ++ --

if($_POST){
	$x=$_POST['a1']; //120
	$y=$_POST['b1']; //80
	$z=$x-$y;
	echo "Diff =".$z;
}
?>
</body>
</html>