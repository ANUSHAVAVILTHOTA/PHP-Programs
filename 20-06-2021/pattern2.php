<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php  
function mypattern($n){
    

	for($i=1;$i<=$n;$i++){  
        
	   for($k=1;$k<=$i;$k++){     
	   		echo $i;        
	   }
	   echo "<br/>";
	}

}

$n=10;
mypattern($n);



?>
</body>
</html>