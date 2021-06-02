<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
//2,4,6,8,10--even
//1,3,7,9,11---odd

//Logic
//1.Divide the number by 2
//  if the reminder is zero then number is even

$a=17;
if($a%2==0){
	echo $a."is Even Number";
}
else{
	echo $a."Is Odd Number";
}

// 149128
//1+4+9+1+2+8=
//Logic

//1.We need to divide by 10
//  we need to add reminder to a variable
// we need to repeat the process untill reminder is zero
//149128=divide 14912
//149128=modulus= 8
echo "<br/>";
// calculate sum of digits of given number
$num=149128;  // 1+4+9+1+2+8=25
$sum=0;   // 8+2+1+9+4+1=25
$rem=0;
echo strlen($num); //6
echo  "<br/>";
for($i=0;$i<strlen($num);$i++){  //8 2 1 9 4 1
	// when we divide any number with 10 
	// we we get all the digits without last digit
	// 149128/10 == 14912
	// 23456/10 == 2345
	// 78965/10 == 7896
	// 345678/10 == 34567

	// when we do modulus we will get only the last digit
	//149128%10 ==8
	//23456%10=6
	//789655%10=5
// 8   2  1 9 4 1
	$rem=$num%10;  // 149128%10=8 
	$sum=$sum+$rem; // sum=0+8=8
	$num=$num/10;   //num=149128/10=14912
}
// 2nd time loop
// 14912%10=2
//sum=8+2=10
//num=14912/10 =1491

// sum from previous step --- rem from current step

// 3 rd time loop
//1491%10=1
// sum=10+1=11
// num=1491/10=149

// 4th step
//149%10=9
//sum=11+9=20
// num=149/10=14

// 5th step
//14%10=4
//sum=20+4=24
// num = 14/10 =1

// a%b a<b  always reminder is a

// 1%10 1<10  always reminder is a that is 1

// 6th step
// 1%10=1
//sum=24+1=25
// 1/10 =0.
// loop will stop
echo $sum;
?>
</body>
</html>