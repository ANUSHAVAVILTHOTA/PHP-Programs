<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
// numbers b/n range
// sum of numbers b/n range
// even numbers b/n range
// sum of even numbers b/n range
//  same case for odd numbers

// product of all numbers b/n range
// product of all even numbers b/n range
// product of all odd numbers b/n range

// 1 -100 include 100 also -- print all even number b/n this range
$sum=0;
for($x=1;$x<=100;$x++){

	if($x%2==0){
		// echo $x;
		$sum=$sum+$x; // 2+4+6+8+10....
		// echo "<br/>";
	}
}
echo $sum;
echo "<br/>";
// odd numbers b/n 1 to 100  150 to 200
//$sum=0; 
// multi =1
$product=1;
for($x=1;$x<=100;$x++){

	if($x%2!=0){
		// echo $x;
		// echo "<br/>";
		//$sum=$sum+$x;
		$product=$product*$x;
	}
}
echo $product;
?>
</body>
</html>