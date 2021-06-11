<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 

$palindrome=array("MOM","KOPOK","RED","MLKLM","APPLE");


//5 0-4    <5  

function check_palindrome($original){
	if(strrev($original)==$original){
		return 1;
	}
	return 0;
}
$count=0;
for($i=0;$i<count($palindrome);$i++){
    $x=check_palindrome($palindrome[$i]);
    if($x==1){
    	$count=$count+1;
    	echo $palindrome[$i]." IS A PALINDROME";
    	echo "<br/>";
    }
}
echo $count;
?>
</body>
</html>