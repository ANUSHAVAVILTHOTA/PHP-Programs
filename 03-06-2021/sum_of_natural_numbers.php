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

if($_POST){
     
    $num=$_POST['f'];   // 5  1+2+3+4+5 // 3 =1+2+3 // 4=1+2+3+4
    $sum=0;  //sum=0 mul=1
    for($x=1;$x<=$num;$x++){
        // echo $x;
        $sum=$sum+$x; //0+1=1  1+2=3   $sum=3+3=6 $sum=6+4=10
        // echo "<br/>";
    }
    echo $sum;
} 
?>
</body>
</html>