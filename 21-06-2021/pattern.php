<?php

$n=5; //10 5 for forword // 5 is for reverse

for($i=1;$i<=$n;$i++){ // no or rows
	// 5 times
	// 1 2 3  4 5
	for($j=1;$j<=$i;$j++){ // 1  //2 * * //3 *** //4 **** // 5 *****
		echo "@ ";
	}
	echo "<br/>";
}
// reverse
// 5 4 3 2 1
for($i=0;$i<$n;$i++){  // 1-5 0-4=5
  //5 4 3 2 1
	// 5-0 =5   5-1=4 5-2=3 5-3=2 5-4=1  // 5 4 3 2 1
	for($j=$n-$i;$j>=1;$j--){// 5 4 3 2 1
		echo "@ "; // 5 ****    ***  ** *
	}
	echo "<br/>";

}


?>