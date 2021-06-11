<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
// HelLoZ245  -display capital alphabets
function capital_letters($s){
   for($x=0;$x<strlen($s);$x++){  // H  e l  L o Z 2 4 5 
   	   $d=ord($s[$x]);  //  return ascii value A=65 B=66 D=68    65 90
   	   if($d>=65 && $d<=90){ // 65-90 ascii values
   	   	   echo $s[$x];
   	   }
   }
}

capital_letters("HelLoZ245");
?>
</body>
</html>