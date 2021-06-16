<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BASIC CALCULATOR</title>
</head>
<body>

<form method="post">
	<input type="text" name="numb1">
	<!-- 10 -->
	<input type="text" name="numb2">
	<!-- 20 -->
	<select name="operator">
		<!-- Add -->
		<option>None</option>
		<option>Add</option>
		<option>Substract</option>
		<option>Multiply</option>
		<option>Divide</option>
		<option>Power</option>
	</select>
	<button type="submit" name="submit" value="submit">Calculate</button>
</form>

<?php 
// when user clicks on this button we will moving inside the if condition
if(isset($_POST['submit'])){
    $result1=$_POST['numb1']; //10
    $result2=$_POST['numb2'];//20

    $operator=$_POST['operator'];//Add

    switch ($operator) {
    	case 'None':
    		echo "you need to select any operator";
    		break;
    	case 'Add':
    		echo $result1+$result2;
    		break;
    	case 'Substract':
    		echo $result1-$result2;
    		break;
    	case 'Multiply':
    		echo $result1*$result2;
    		break;
    	case 'Divide':
    		echo $result1/$result2;
    		break;
    	case 'Power':
    		echo $result1**$result2;
    		break;
    }

}

?>
</body>
</html>