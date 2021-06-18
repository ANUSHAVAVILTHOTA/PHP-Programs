<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form</title>
</head>
<body>

<form method="post">
	Enter First Name: 
	<!--  all number and alphabets -->
	<input type="text" name="fname"><br><br>

	Enter Last Name:
	<!--  all number and alphabets -->
	<input type="text" name="lname"><br><br>

	Message:
	<!--  all number and alphabets -->
	<textarea name="message"></textarea><br><br>

    Fav Color:
    <!--  we can tick the boxes  
    	user can able to select multiple options-->
    Red <input type="checkbox" name="color[]" value="red">
    Green<input type="checkbox" name="color[]" value="green">
    Blue<input type="checkbox" name="color[]" value="blue">
    Black<input type="checkbox" name="color[]" value="black">
    Purple<input type="checkbox" name="color[]" value="purple">
    <br><br>

    Choose Known Lan:
    English:
    <input type="checkbox" name="lang[]" value="English">
    Hindi:
    <input type="checkbox" name="lang[]" value="Hindi">
    Telugu:
    <input type="checkbox" name="lang[]" value="Telugu">
     <br><br>


     <!-- One Option -->
     Gender:
     Female:
     <!--  M-S  7 -->
     <input type="radio" name="gender" value="FAMALE">
     Male:
     <input type="radio" name="gender" value="Male">  <br><br>

     Date:
     <input type="date" name="date1"><br><br>

     Password:
     <!-- type=password hide the for -->
     <input type="password" name="password"><br><br>

     Fav Number:
     <input type="number" name="num" ><br><br>

     Url
     <input type="url" name="url"><br><br>

     WeeK:
     <input type="weeK" name="week"><br><br>

     Date Time Local:
     <input type="datetime-local" name="datetime"><br><br>

<!-- 
check box
radio
dropdown


remaining all same ==just we need is name attribute
 -->
   Month
   <input type="month" name="month"><br><br>

   Search
   <input type="search" name="search"><br><br>

  Tel
   <input type="tel" name="tel"><br><br>


   Select A Tech:
   <select name="tech">
   	<!-- if we dont have value attribute then it will consider text inside the option tag as a value like HTML,CSS,JS,PHP,MYSQL

    if we have a attribute called option
   	html5,Css,Javascript,php,Mysql -->
   		<option value="html5">HTML</option>
   		<option value="Css">CSS</option>
   		<option value="Javascript">JS</option>
   		<option value="php">PHP</option>
   		<option value="Mysql">MYSQL</option>
   </select>

   <br><br>

	<input type="submit" name="formvalues" value="Submit">

</form>
<?php  
// user clicks that button or not
if(isset($_POST['formvalues'])){
	// if true iside the if condition
	$message='';

	$message.="First Name=".$_POST['fname']."<br>";

	$message.="Last Name=".$_POST['lname']."<br>";

	$message.="Message From USer=".$_POST['message']."<br>";

    $message.="Fav Color Are:";
	foreach ($_POST['color'] as $x) {//
		$message.=$x.",";
	}
	$message.="<br>";

    $message.="Gender=".$_POST['gender']."<br>";
//  attribute name from the tag
    $message.="Date=".$_POST['date1']."<br>";

    $message.="PAssword=".$_POST['password']."<br>";

    $message.="Fav Number=".$_POST['num']."<br>";

    $message.="Url=".$_POST['url']."<br>";

    $message.="Week=".$_POST['week']."<br>";

     $message.="Date Time Local=".$_POST['datetime']."<br>";

     $message.="Month=".$_POST['month']."<br>";

     $message.="Search=".$_POST['search']."<br>";

     $message.="Tel=".$_POST['tel']."<br>";


     $message.="Tech=".$_POST['tech']."<br>";

	echo $message;

// D


}
?>
</body>
</html>