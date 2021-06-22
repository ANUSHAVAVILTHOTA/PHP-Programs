<?php  

$n=5;
// no of rows =5
for($i=1;$i<=$n;$i++){  //1-5

   // spaces ----- stars
	// 4 3 2 1 0 ==spaces
	for($k=$n;$k>=$i;$k--){  //5>=1=5  5>=2=4   5>=3=3 5>=4=2 5>=5=1 stop
       echo "&nbsp";// " "
	}
	// 1 2 3 4 5  == 
	for($j=1;$j<=$i;$j++){  // $i=1 loop=1  $i=2 loop=2 $i=3 loop=3 $i=4 loop4 $i=5 loop 5
		echo "@";
	}
	echo "<br/>";
}
?>