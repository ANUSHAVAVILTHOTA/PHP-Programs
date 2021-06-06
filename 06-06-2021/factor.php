<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 


// factor   == the factors will divide the number exactly == whole number

//12
//  1,2 ,3,4,6,12== factors for number 12
// 12/1 12/2 12/3 12/4 12/6 12/12 ==whole number

// 12   6     4  3   2  1 = 
// q
// R=0

// 6
// 1,2,3,6  6/1 6/2 6/3 6/6 =whole

$num=12; // 1 -12
// 12%1 12%2 12%3 12%4 12%5 12%6----------12%12 
// if rem==0
// 2,11
// 1 numer itself
for($i=2;$i<$num;$i++){
	if($num%$i==0){  // 12%1 =0  12%2=0 12%3=0  12%4=0 12%5!=0   12%6=0 12%7!=0 12%12=0
		echo $i;
		echo "<br/>";
	}
}
?>
</body>
</html>