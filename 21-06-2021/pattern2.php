<?php

$n=5; 
 // we need to declare out side of the for loop
for($i=1;$i<=$n;$i++){ 

	// all rows we need to run n times
   //1  //2 
	$c=65;
	for($j=1;$j<=$n;$j++){ // 1 == 5 times 2==5 times // 3 ===5 times  //4 5 times // 5 5 times
		echo chr($c)." ";
		$c++;

	}
	echo "<br>";
}

?>