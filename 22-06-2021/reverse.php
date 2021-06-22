<?php 

$n=5;
// 1- 5  5 times
// 5 -1 5 times
// 5 4 3 2 1 stop
for($i=$n;$i>=1;$i--){
	// 5  4 3 2 1 i values

	// 1 2 3 4 5
	//spaces

//spaces
   // 5 ,4 ,3,2,1 ==normal
	// 1,2,3,4,5=reverse
	for($k=$n;$k>=$i;$k--){
		// k=5   5>=5 1 times 1 space
		// k=5   5>=4 2 times 2 spaces
		//k=5    5>=3 3 times 3 spaces
		//k=5    5>=2 4 times 4 spaces
		//k=5   5>=1  5 times 5 spaces
		echo "&nbsp";

	}
	//stars
	// 1 2 3 4 5== normal
	// 5 4 3 2 1== reverse
	for($j=1;$j<=$i;$j++){
		// $i=5 5 times
		// $i=4  4 times
		// $i=3 3 times
		echo "*";
	}
	echo "<br/>";

}

?>