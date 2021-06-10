<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
$a=5;
$b=6;

// b=5 a=6 swap 2 values
// $c=$a; //c=5
// $a=$b;//a=6
// $b=$c;// b=5

// //a =6 b=5
// echo $a; //6
// echo $b;//5
echo "before swaping a=".$a;
echo "<br/>";
echo "before swaping b=".$b;
echo "<br/>";
$a=$a+$b; // a= 5+6=11  //a=11
$b=$a-$b; // b= 11-6 =5  //b=5
$a=$a-$b; //  a= 11-5=6   //a=6

echo "a=".$a;
echo "<br/>";
echo "b=".$b;
echo "<br/>";


// b power x
// 8 power 5 = 8*8*8*8*8
// 6 power 3=  6*6*6
// 9 power 4 = 9*9*9*9   
// 25 power 30

$b=8; //base
$x=5; // power value n

$product=1;
// x times  1-x
for($i=1;$i<=$x;$i++){  
    $product=$product*$b;// p=1*8=8   p=8*8=64 p=64*8=512 p=512*8=4096 p=4096*8=32768

}
echo $product; // 32768


?>
</body>
</html>