<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post">
		Enter a first value:
		<input type="number" name="a1"> 
		

		<input type="submit" name="submit">
	</form>
	<!-- 
	POST===Will hide the form values
	GET == it will show all the form values on the url -->
<?php
if($_POST){
	$a=$_POST['a1'];
	$results=$a*$a*$a; //

	echo "Cube of ".$a." = ".$results;

    $res=sqrt($a);
    echo "<br/>";
	echo "square root of".$a."=".$res;

	// square  // 34 cm
	// area== side*side
	//perimeter=4*side

	$area=$a*$a; // area of a square
	$perimeter=4*$a;
        echo "<br/>";
	echo "Area =".$area." Perimeter=".$perimeter;



}

?>
</body>
</html>