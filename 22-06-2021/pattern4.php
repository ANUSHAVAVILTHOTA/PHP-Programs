<?php  

$n=5;

for($i=1;$i<=$n;$i++){  //no of rows 1-5
	for($k=$n;$k>=$i;$k--){ // 5,4,3,2,1  
      echo "&nbsp"; // $n & $i    5>=1=>5 5>=2==>4 5>=3==>3  5>=4==>2  5>=5 =>1
	}
	 // up to i times 1,2,3,4,5,
	for($j=1;$j<=$i;$j++){  // 1 2 3 4 5// *  //** //*** //****/*****
		echo "* ";
	}
	echo "<br/>";
}

// both the cases for the stars we can access the values from $i

// for spaces we need to combine both $n & $i
// we need to use both the values
for($i=$n-1;$i>=1;$i--){  // 5 -1

	for($k=$n;$k>=$i;$k--){ // 1,2,3,4,5
		
		echo "&nbsp";

	}
	
	for($j=1;$j<=$i;$j++){  // 5=***** 4=**** 3 2 1
		
		echo "* ";
	}
	echo "<br/>";
}
?>