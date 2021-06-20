<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php  
function mypattern($n){
     //. 5 times
	for($i=1;$i<=$n;$i++){  // 1<=5  2<=5
		 
		for($k=1;$k<=$i;$k++){ // 1<=1  1<=2  1<=3 4 5 
			echo "1 ";  
		}
		echo "<br>";
	}

}

$n=10;
mypattern($n);
// 5 rows
// 1 st row *
// 2nd row **
// 3rd row ***
// 4th row ****
// 5 th row *****

// inner loop
// *   //1
// * *  //2
// * * * //3
// * * * * //4
// * * * * * //5


?>
</body>
</html>