<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>

<form method="post">
	<input type="text" name="str">
	<input type="submit" name="Submit">
</form>
<body>
<?php 

// 7
// 0 6

// 8
// 0-7
// 7 to 0

// 10
// 0 - 9
// based on index positions we need to run the loop
if($_POST){
	$str=$_POST['str'];// ABC
	//EDCBA
	$strreversed='';
	//ABCDE = 5
	// 0=A 1=B 2=C 3=D 4=E      4 to 0
	$length=strlen($str); //5

	// length =5-1 = 4  ending at 0
	for($i=$length-1;$i>=0;$i--){ // 4 3 2 1 0
	      $strreversed.=$str[$i]; // str[4]=E str[3]=D str[2]=C str[1]=B str[0]=A
	}// E.D.C.B.A
	echo $strreversed;

}
// ABCDE =5  starts from 1
// 0 to 4 
 

// print 0 -4
// reverse 4-0


// EDCBA

// length = 5chars  0-A 1=B 2-C 3-D 4=E
//  4 end 0

?>
</body>
</html>