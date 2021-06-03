<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	<input type="number" name="f">
	<input type="submit" name="Submit">
</form>

<?php


// 0!=1
// 4!= 4*3*2*1=24
// 5!= 5*4*3*2*1=
// 8!= 8*7*6*5*4*3*2*1=40320
// 3! = 3*2*1;
//120*119*118------1
// 5 5*4*3*2*1
if($_POST){
$num=$_POST['f'];  // 20 20*19*18*17===1
$fact=1;// if we use 0 then total muti---- 0
for($x=$num;$x>=1;$x--){  
	// echo $x;  
	$fact=$fact*$x;       // $fact=1*4=4    //$fact=4*3=12    $fact=12*2=24    $fact=24*1=24
	// echo "<br/>";        // 3             // 2             1                // 0 // loop will stop
} 
echo $fact; 
} // 4*3*2*1
// 25 to 20
// $num=25;
// for($x=$num;$x>=20;$x--){
// 	echo $x;
// 	echo "<br/>";
// }
?>
</body>
</html>