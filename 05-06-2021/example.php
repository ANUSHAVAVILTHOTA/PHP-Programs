<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

//  even digits sum

$x=156924;
$sum=0;
while($x>0){ 
 
	$m=$x%10;  // 4 2 9 6 5 1  
	$m=intval($m); 
	$x=$x/10;   
	$x=intval($x); 

	if($m%2==0){ // digit is even or not 6 2 4 =12
		$sum=$sum+$m;
	}
    

}
echo $sum;
echo "<br/>";

// sum of odd digits
$x=156924;
$sum=0;
while($x>0){ 
 
	$m=$x%10;  // 4 2 9 6 5 1  
	$m=intval($m); 
	$x=$x/10;   
	$x=intval($x); 

	if($m%2!=0){ // digit is even or not 6 2 4 =12
		$sum=$sum+$m;
	}
    

}
echo $sum; // 9 5 1 =15
?>
</body>
</html>