<?php

$n=6; //10 5 for forword // 5 is for reverse
// 65-90
//97-122
for($i=1;$i<=$n;$i++){ 
	$c=65;  // start=====> same in all rows
	for($j=1;$j<=$i;$j++){ 
		echo chr($c); // 65-A 66-B
		$c++;//$c=$c+1;
	}
	echo "<br/>";
}

// 6 == 6 times

// 5-0 =5   ==> start at 1  =====> 5-1=4 5-2=3 5-3=2 5-4=1 
for($i=1;$i<$n;$i++){
	$c=97;
	for($j=$n-$i;$j>=1;$j--){
		echo chr($c); 
		$c++;
	}
	echo "<br/>";

}


?>