<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php  
function mypattern($n){
    
    $c=1;
	for($i=0;$i<$n;$i++){  //1-5=5 0-4=5 2-6=5
        // num of rows 
        // this will be same for forward and reverse pattern
        //5  ==0     1          2         3          4
           // $j=5-0=5  $j=5-1=4   $j=5-2=3  $j=5-3=2   $j=5-4=1

           // j =5 to 1   4 to 1  3 to 1  2 to 1   1 to 1=1
		// $x=$i+1;
        for($j=$n-$i;$j>=1;$j--){  // higher to lower
        	 echo $c." ";
        	 $c++;
        }
        echo "<br/>";
	  
	 }

}

$n=10;
mypattern($n);



?>
</body>
</html>