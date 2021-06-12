<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php  
function capital_letters($s){ //$s="Hello WORLd"
   
   // traverse all chars
   // ascii value for all chars
   //  we  need to check capital alphabets range(65-90) 
   $count=0;   
         for($i=0;$i<strlen($s);$i++){
         	// A=65 B=66 C=67 ----Z=90
         	// 65-90 
         	$g=ord($s[$i]); //H  e l l o 
         	if($g>=65 and $g<=90){
         		echo $s[$i]." is a capital letter";
         		echo "<br>";
         		$count=$count+1;
         	}
         }
         return $count;
}
function small_letters($s){ 
   
       $count=0;
         for($i=0;$i<strlen($s);$i++){

         	$g=ord($s[$i]); 
         	if($g>=97 and $g<=122){
         		echo $s[$i]." is a small letter";
         		echo "<br>";
         		$count=$count+1;
         	}
         }
        return $count;
}

$str="Hello WORLd";
$count_captal=capital_letters($str);//calling
echo "<br>";
echo $count_captal;
echo "<br>";
$str="Hello WORLd";
$count_small=small_letters($str);
echo $count_small;
?>
</body>
</html>