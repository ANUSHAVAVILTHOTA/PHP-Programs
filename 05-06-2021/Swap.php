<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$x=15;
$y=25;

$temp=$x; //  temp=15   we are storing the x value
$x=$y; // $x=25  // change x value into y
$y=$temp;  // $y=15 // $y value from temp variable

echo "X value is".$x;

echo "<br/>";

echo "Y value is".$y;


// we need to print all the digits from a number

$x=156924;

// 1 5 6 9 2 4 
$s=array();
while($x>0){ // run up to value become zero
  // % == 
	// 156924 %10 == 4
	// 123%10 ==3
	// 3456%10 =6

	// 156924/10 == 15692 except last digit
	// 2345/10 == 234
	// 56789/10 =5678
 
	$m=$x%10;   // 156924%10 = 4   15692%10=2     1569%10=9  6  5  1
	$m=intval($m);  // 4           //2

	$x=$x/10;   // 156924/10 = 15692  //15692/10=1569
	$x=intval($x);  //15692            1569
    array_push($s,$m); // 4,2,9,6,5,1 

}
echo "<br/>";
print_r($s);
echo "<br/>";
$s=array_reverse($s); // 1,5,6,9,2,4
echo "<br/>";
// 
for($i=0;$i<count($s);$i++){
	if($s[$i]%2==0){ 
		echo "Even".$s[$i];
		echo "<br/>";
	}
	if($s[$i]%2!=0){
		echo "Odd".$s[$i];
		echo "<br/>";
	}
}

// even digits from a given number
// odd digits from a given number

?>
</body>
</html>