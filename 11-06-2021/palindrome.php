<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
// check string palindrome
// string==reverse(string)  both are same
// MOM  == MOM  
// SAPAS  ==  SAPAS  == palindrome
// RATOTAR  == RATOTAR ==palindrome
// RED ==DER ==its not a palindrome

// take a string
// reverse a string
// if both are same then its a palindrome

// POKOP = POKOP =palindrome
//  KLMNMLK = KLMNMLK =palindrome

$original="RED";
if(strrev($original)==$original){
	echo $original." is a Palindrome";
}
else{
	echo $original." is Not a Palindrome";
}
echo "<br>";

$str="RER"; 
 //0=P 1=O 2=K 3=O 4=P
$str_reverse='';

$length=strlen($str);//5
// 5  0-4  ==>rev 4-0
// end ---start
for($i=$length-1;$i>=0;$i--){
	$str_reverse.=$str[$i];// str[4]=P str[3]=O str[2]=K str[1]=O str[0]=P
   // =POKOP
}
//POKOP==POKOP
//RER==RER
if($str==$str_reverse){
	echo $str." IS a PALINDROME";
}
else{
	echo $str." IS NOT A PALINDROME";
}
?>
</body>
</html>