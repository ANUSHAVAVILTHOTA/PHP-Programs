<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<form method="post">
	<input type="number" name="a"> 
	<input type="number" name="b">
	<input type="submit" name="Submit">
</form>
<body>
<?php


// smallest of 2 number
// largest among 2
if($_POST){

	$x=$_POST['a']; //78
	$y=$_POST['b']; //65
    
    // if($x<$y){  // 78<65
    // 	echo $x."is the smallest number";
    // }
    // else{
    // 	echo $y." IS the smallest number";
    // }

    if($x>$y){
    	echo $x." Is the largest number";
    }
    else{
    	echo $y." is the largest number";
    }




}
?>
</body>
</html>