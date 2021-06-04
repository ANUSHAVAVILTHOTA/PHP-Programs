<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		Side1:
		<input type="number" name="side1">
		<br>
		Side2:
		<input type="number" name="side2">
		<br>
		Side3:
		<input type="number" name="side3">
		<br>
		<input type="submit" name="submit">
	</form>

<?php

if($_POST){
	$a=$_POST['side1'];
	$b=$_POST['side2'];
	$c=$_POST['side3'];

// control stms
	echo " Given Sides are ".$a." ".$b." ".$c;
	echo "<br/>";

	if(($a*$a)+($b*$b)==($c*$c)||($b*$b)+($c*$c)==($a*$a)|| ($c*$c)+($a*$a)==($b*$b)){
		echo "Right angled triangle";
	} 
	else if(($a==$b) && ($b==$c)){
		echo "Equilateral triangle";
	}
	else if(($a==$b) || ($b==$c) || ($c==$a)){
		echo "Isosceles triangle";
	}
	else if($a!=$b && $b!=$c && $c!=$a){  //
		echo "Scalene ";
	}


}


// we will get only one == if else if

// they want more than one -- right angle ,equi  == if if if

// only when above condition is false
// if() -false
// else if()  -false
// else if()  -false
// else if() -true -stop -- only one block 
// else if() -wont execute
// else()  -wont execute


// if()
// if() // 57 will execute either 56 may false or true
// if()
// if() -true
// if()-true
// if()-

?>
</body>
</html>