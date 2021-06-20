<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php  
function mypattern($n){
    
// 65-90 ==symbols--- small alpha bets
	// 97 122
	 //A asci value

// first where we need to declare 
// where we need to increment

	$num=65;
	for($i=1;$i<=$n;$i++){  //rows
          // each row starting with char A num=65;  // each row starting with char A  // 66-B 67-C
	   for($k=1;$k<=$i;$k++){  // columns    
	   		    echo chr($num)." ";  //A  B B  //C C C //D D D D
	   		    
	   }
	   $num=$num+1; //B //c //D
	   echo "<br/>";
	}

}

$n=8;
mypattern($n);



?>
</body>
</html>