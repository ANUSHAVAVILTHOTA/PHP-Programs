<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 

// 1 to 10   sum
// 1 to 10 

$num=10;
$sum=0;
for($i=1;$i<=$num;$i++){
	$sum=$sum+$i;
}
echo $sum;

echo "<br/>";
$n=50; // 1-50
$cal=($n*($n+1))/2;   // n(n+1)/2
echo $cal;

// n+1
// n*(n+1)
// total/2

// 1-25
// 1^2+2^2----25^2
echo "<br/>";
$n=25; //sum of square natural numbers 
$result=($n*($n+1)*((2*$n)+1))/6;  //n(n+1)(2n+1)/6

// $n+1
// 2n+1
// $n* above 2 values
// total value/2
echo $result;
echo "<br/>";
//(n(n+1)/2) power 2  cube of natural numbers
$n=75;
$r=(($n*($n+1))/2)*(($n*($n+1))/2);

echo $r;


// 1^3+2^3+3^3====75^3

// 1 -10 
// 1-100 
// 1 to 25   sum of n natural numbers==n(n+1)/2
// 1+2+3+4+5+-----100  // 100(100+1)/2
// sum of square of natural numbers= n(n+1)(2n+1)/6
// 1^2 +2^2 +3^2 +4^2-----100  //   100(100+1)(2*100+1)/6
//sum of cube of a numbers = (n(n+1)/2) power 2
//1^3+2^3+3^3+4^3----50^3    (50(50+1)/2) power 2
?>
</body>
</html>