<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 

// 50 to 90 half even half odd 50 to 70 even 70 to 90 odd 
// even/odd sum =result

//  1 to 10 = cal product
// add result and product



// 1  to 50    -- even numbers sum
// 50 to 100 -- add numbers sum
//  even sum +odd sum

$even_sum=0;
for($i=1;$i<=50;$i++){
	if($i%2==0){
		$even_sum=$even_sum+$i; 
	}
}
$odd_sum=0;
for($j=50;$j<=100;$j++){
	if($j%2!=0){
		$odd_sum=$odd_sum+$j;
	}
}
$results=$even_sum+$odd_sum;
echo $results;
?>
</body>
</html>