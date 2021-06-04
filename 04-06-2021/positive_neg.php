<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<form method="post">
	<input type="number" name="num"> 
	<!-- 45 -->
	<input type="submit" name="Submit">
</form>
<body>
<?php

// +ve or -ve or zero

if($_POST){

	$number=$_POST['num']; //45

// 1,2,3,4,5,6,7,8---inf -       +ve numbers
// -1 ,-2 ,-3 ,-4 -5 --- -inf    -ve numbers
	// 0     zero

	if($number>0){ //45>0
		echo $number." is positive";
	}
	else if($number<0){  // -45<0   
		echo $number." is -ve";
	}
	else{
		echo $number." is Zero";
	}

	// 365 ==== 25 ,28,31
	// -98 === 28
	// 0 ==31

}
?>
</body>
</html>