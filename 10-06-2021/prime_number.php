<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 

// 1 , number itself = integral divisions == prime number

// 7
// 1 and 7 =prime
// 6
// 1,2,3,6 = other 2 factors which is 2 and 3 so its not a prime
// 8
// 1 2,4   8 =prime
// 11
// 1 11  =prime  1,number itself
//


// 13
// 1 and 13 prime number
// 2

// 2 factors one factor is =1
// second factor is number itself

function primeCheck($number){  // prime 1  if not 0
	//$number=7;//1
	if($number==1){  //7===1
		return 0; // its not a prime 
	} // 9  // 2 to 8  
	// 10  // 2 -9  // 
	for($i=2;$i<$number;$i++){  // 2 to 6
		if($number%$i==0){  // 7%2    7%3  7%4 7%5 7%6
			// 2 to 7
			// 8%2==0
			// we have any one factor in this loop then its not a prime
			return 0;  
		}
	}
	return 1;  // 1 means prime // 0 not a prime


}


$number=8;  //8
// 10  2- 9 excluding both 1 and number itself
// 5   2-4
//8    2-7

// 1and numbers its self we may have one or more factors so its not a prime
$flag=primeCheck($number);//7      //1  // not a prime 0

if($flag==1){
	echo "Prime number".$number;
}
else{
	echo "Not a Prime number";
}

// we need check whether number is one or not
// if 1 return 0  === its not a prime

// 10  -- 2 to 9 run the loop (exclude 1 and  number its self)
//  we need check is there any factor for number 10 b/n 2-9
// if we have factor ===its not a prime return 0

// its a prime

?>
</body>
</html>