<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
$numbers=array(12,10,80,67,5,89,91,56,45,130,95,85);
// biggest number inside the array
$max=$numbers[0]; //  max=12

//max($aray name)
for($i=1;$i<count($numbers);$i++){ // 10 - 85
	if($numbers[$i]>$max){ //  10>12  80>12     67>80  5>80  89>80    $91>89   56>91  45>91
       $max=$numbers[$i];  //         $max=80                $max=89   $max=91   
  // biggest number

       // 130>91    95>130  85>130  // stop
       // max=130
	}
}
echo $max; // 130

echo "<br/>";
$num=array(4,6,8,3,9,2);
$max=$num[0];// max=4 
// 0 or 1 both will work
// but when we use the 1 it will reduce the time
for($i=1;$i<count($num);$i++){ 
	if($num[$i]>$max){ // 6>4   8>6     3>8  9>8     2>9
		$max=$num[$i];// max=6   max=8       max=9  
	}
}
echo $max;//9


$num2=array(4,16,18,23,9,2);
//num2[0]=4 num2[1]=16
$max=$num2[0];// max=4  
for($i=1;$i<count($num2);$i++){ 
	if($num2[$i]>$max){ // 16>4    18>16      23>18    9>23     2>23
		$max=$num2[$i]; //max=16   $max=18  $max=23
	}
}
echo $max;//23
echo "<br/>";
$num2=array(41,26,18,63,19,12,22); 
//num2[0]=41  num2[1]=26 num2[3]=18 ........
$max=$num2[0]; // 41
for($i=1;$i<count($num2);$i++){ 
	if($num2[$i]>$max){   // 26>41     18>41  63>41    19>63   12>63    22>63 
		$max=$num2[$i];  // false      false  $max=63  false   false    false
	}
}
echo $max;

echo "<br/>";
$num2=array(41,26,18,63,19,12,22); 

$min=$num2[0]; 
for($i=1;$i<count($num2);$i++){ 
	if($num2[$i]<$min){  
		$min=$num2[$i];  
	}
}
echo $min;
//(41,26,18,63,19,12,22)
?>
</body>
</html>