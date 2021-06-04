<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<form method="post">
	<input type="number" name="a"> 
	<input type="number" name="b">
    <input type="number" name="c">
	<input type="submit" name="Submit">
</form>
<body>
<?php



if($_POST){

	$x=$_POST['a']; //78
	$y=$_POST['b']; //65
    $z=$_POST['c'];  //45

//$x  y and z
// y   x and z
    // z    y and x
    // biggest number should be greater than other 2 numbers
    if($x>$y and $x>$z){
        echo $x."is the largest number";
    }
    else if($y>$x and $y>$z){
        echo $y."is the biggest number";
    }
    else if($z>$x and $z>$y){
        echo $z." is the biggest number";
    }
    
    // smallest number among three

    if($x<$y and $x<$z){
        echo $x." is the smallest number";

    }
    else if($y<$x and $y<$z){
        echo $y."is the smallest number";
    }
    else if($z<$x and $z<$y){
        echo $z." is the smallest number";
    }



}
?>
</body>
</html>