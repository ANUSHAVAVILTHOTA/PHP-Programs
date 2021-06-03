<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	<input type="number" name="f">
	<input type="submit" name="Submit">
</form>

<?php
// 4!= 4*3*2*1

//4!= 4*3*2*1=24 DESC

// 4 = 1*2*3*4=24 ASC

// 5  1*2*3*4*5
if($_POST){
     
    $num=$_POST['f']; // 4   1<=4  2<=4 3<=4 4<=4 5<=4 stop 
    $f=1;
    for($x=1;$x<=$num;$x++){
    	// echo $x;  // 1 2  3 4 5 6 7---10
    	$f=$f*$x; // 1*1=1  1*2=2   2*3=6  6*4=24 then loop will stop
    	// echo "<br/>";
    }
    echo $f;
} 
?>
</body>
</html>