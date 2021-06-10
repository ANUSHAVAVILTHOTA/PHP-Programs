<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 



function primeCheck($number){  
	
	if($number==1){  //7===1
		return 0; // its not a prime 
	}  
	for($i=2;$i<$number;$i++){  
		if($number%$i==0){  
			
			return 0;  
		}
	}
	return 1; 


}
//even --- even b/n range , count,sum/product

$number=array(3,4,7,9,2,11);

// sum //print
$count=0;  //3*7*2=42

// 10 2-9
// 1-10
// 2-10
//1-9
// i<number/2 = time  half

for($i=0;$i<count($number);$i++){  //0-4

	$flag=primeCheck($number[$i]);

	if($flag==1){
		// echo "Prime number".$number[$i];
		// echo "<br>";
		$count=$count+1; //
	}


}  

echo $count;


?>
</body>
</html>