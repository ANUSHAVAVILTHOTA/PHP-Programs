<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php  
// add /sub/mul/div/modu
// add all results
// echo the total/return the total

function arithmetic_cal($a,$b){
   // $a=120 $b=150
	$c=$a+$b;  //+,-*/% operators // a b c ==operends
	$d=$a-$b;   //arithmetic calculations
	$e=$a*$b;
	$f=$a/$b;
	$g=$a%$b;
	$total=$c+$d+$e+$f+$g;

	echo $total;
	echo "<br/>";

	return $total;

}

$sum=arithmetic_cal(120,150);
echo $sum;
//array
// sum
//pro
// total=sum+product
echo "<br/>";
function mycal($x){//x=(1,34,2,6,9,8,4,5) //0 1 2 3 4 5---
	$product=0;
	$sum=1;
	for($i=0;$i<count($x);$i++){
		$sum=$sum+$x[$i];
		$product=$product*$x[$i];
	}
    $total=$sum+$product;
    return $total;  //29
}
//1,34,2,6,9,8,4,5=sum
//1,34,2,6,9,8,4,5=product
// sum+product =
$a=array(1,34,2,6,9,8,4,5); 
$result=mycal($a);
echo $result;

// // array values  8 random values
//  first half of the values  addition
// secong half of the values  product
$product=0;
$sum=1;
$x=array(1,34,2,6,9,8,4,5); 
for($i=0;$i<count($x)/2;$i++){
		$sum=$sum+$x[$i];
		
}
for($i=count($x)/2;$i<count($x);$i++){
		$product=$product*$x[$i];
		
}

$total=$sum+$product;




?>
</body>
</html>