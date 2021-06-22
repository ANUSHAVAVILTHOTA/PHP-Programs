<?php  

$n=5;
// no of rows =5
$num=70;
for($i=1;$i<=$n;$i++){  //1-5

	// 4 3 2 1 0 ==spaces
	// A=65 B=66 c=67 D=68 E=69 F=70--------------Z=90
	// a=97 b=98 =------------z=122
	
	for($k=$n;$k>=$i;$k--){  //5>=1=5  5>=2=4   5>=3=3 5>=4=2 5>=5=1 stop
       echo "&nbsp";// " "
	}
	// 1 2 3 4 5  == 
	for($j=1;$j<=$i;$j++){  // $i=1 loop=1  $i=2 loop=2 $i=3 loop=3 $i=4 loop4 $i=5 loop 5
		echo chr($num);// chr will convert ascii value to chars
		$num++;
	}
	echo "<br/>";
}
?>