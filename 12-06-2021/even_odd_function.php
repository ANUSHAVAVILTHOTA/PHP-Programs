<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
// 1 -75 //

function even_cal($start,$end){
	$even_list=array();
   // i=20  // 75 also;
	$product=1;
	for($i=$start;$i<=$end;$i++){
		if($i%2!=0){
			array_push($even_list, $i); //
			echo $i;
			echo "<br/>";
			$product=$product*$i;
		}  //20,21,22,23,24,25 ,26,27 28......75
	}
	// return $even_list;
	// echo $product;
	return $product;
}
echo "<br/>";
$total=even_cal(20,75);//all even numbers
echo $total;
echo "<br/>";

?>
</body>
</html>