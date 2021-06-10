<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
// for every char/number/spl char === ascii values
//chr  == ascii values to char
// ord == chr ==  ascii
echo chr(65);

echo "<br/>";

echo ord('A');

// ascii values of a char / string (word) /sent
echo "<br/>";
echo ord("Apple");  // Ascii value for the first char only

echo "<br/>";

$str="Hello World";
$list=str_split($str); // [H,e,l,l,o, ,W,o,r,l,d]
print_r($list);
echo "<br/>";
for($i=0;$i<count($list);$i++){
	echo "Ascii value of ".$list[$i]."=".ord($list[$i]); // ord(H) ord(e) ord(l) ord(l)
	// ord(o) ord(' ') ord(W) ord(o) ord(r) ord(l) ord(d)
	echo "<br/>";
}
?>
</body>
</html>