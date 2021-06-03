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
	$results=$a*$a; //

	echo "Square of ".$a." = ".$results;
}

?>
</body>
</html>