<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
// print all elements in the array
$list=array(6,4,7,2,1,8,9,5,0,3,12);
// 0 index to length   0-9 =10
// echo count($list); // 11
// echo "<br/>";
// for($i=0;$i<count($list);$i++){
// 	echo $list[$i]; // list[0] list[1]
// 	echo "<br/>";
// }

// total ele without using predefined function
// count()
// $count=0;
// foreach($list as $k){
// 	echo $k; //     6    4   7  2  1
// 	$count=$count+1; //1  2   3  4  5
// 	echo "<br/>";
// }
// echo "Total Elements".$count;
// sum of all ele in the array
$sum=0;
for($i=0;$i<count($list);$i++){
	$sum=$sum+$list[$i]; // sum=0+6+4+7+2+1+8+9+5+0+3+12
}
echo $sum; // sum
// product of array values
echo "<br/>";
$product=1;
for($i=0;$i<count($list);$i++){
	echo $list[$i];
	echo "<br/>";
	$product=$product*$list[$i];  //0
}
echo $product; //
// from the list of values we need to print even numbers
echo "<br/>";
for($i=0;$i<count($list);$i++){
	if($list[$i]%2==0){//even
		echo "Even Number".$list[$i];
		echo "<br/>";
	}
}
echo "<br/>";
for($i=0;$i<count($list);$i++){
	if($list[$i]%2!=0){//odd
		echo "Odd Number".$list[$i];
		echo "<br/>";
	}
}

// avg of array elements
// avg= sum(all ele)/total number of elements
$list=array(6,4,7,2,1,8,9,5,0,3,12);
$sum=0;
for($i=0;$i<count($list);$i++){
    $sum=$sum+$list[$i];
}
// total sum
$avg=$sum/count($list);
echo $avg;
?>


</body>
</html>