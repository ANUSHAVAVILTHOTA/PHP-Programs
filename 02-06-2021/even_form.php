<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- 
get  == we can able to see all the values in url

post == we cant able to see the values in url
 -->
<form method="post">
	Enter a Number
	<input type="number" name="num">
	<input type="submit" name="Submit">
</form>
<?php
// $_GET
if($_POST){
	$num=$_POST['num'];
	// if($num%2==0){
	// 	echo $num." is Even Number";
	// }
	// else{
	// 	echo $num." is Odd Number";
	// }
    $a=$num;
	for($i=1;$i<=10;$i=$i+1){
	$result=$a*$i; // 9*1 9*2 9*3  9*4
    // echo $result;
    // 9*25=value 
    echo "<br/>"; 
    echo $a." * ".$i." = ".$result;
	// print format 9*1 =9 

	echo "<br/>";
}

}

?>
</body>
</html>