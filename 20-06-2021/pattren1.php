<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php  
function mypattern($n){
     //. 5 times ==loop will run
     // $a=1;
	$a=10; 
	for($i=1;$i<=$n;$i++){   // 1- 10  4 th time
          
	   for($k=1;$k<=$i;$k++){    //  3  3 4   3 4 5 3456 34567   
	   		echo $a."  ";           
	   		$a=$a+1;           
	   }
	   echo "<br/>";
	}

}

$n=10;
mypattern($n);



?>
</body>
</html>