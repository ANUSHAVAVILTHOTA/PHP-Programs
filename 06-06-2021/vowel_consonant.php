<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<form method="post">
	<input type="text" name="char">
	<input type="submit" name="Submit">
</form>
<body>
<?php  
// A E I O U
// a e i o u== vowels
// remaining all chars == CONSONANTS
// 
if($_POST){
	$x=$_POST['char'];
	$lowercase_vowels=0;
	$uppercase_vowels=0;

	// A-z a-z  == ALPHA
	// 0-9 spl chars== NON-AL
	if($x and ctype_alpha($x)){ // we need to check whether it is alphabetic char or not

	    // vowel or CONSONANT
	    $lowercase_vowels= ($x=='a'|| $x=='e' || $x=='i' || $x=='o' || $x=='u'); // 0

	    $uppercase_vowels= ($x=='A'|| $x=='E' || $x=='I' || $x=='O' || $x=='U');  // E
	    
	    if($uppercase_vowels || $lowercase_vowels){ // (E || 0)  ( true || flase)
	    	echo $x."IS VoWEL";   // or case any one will be true== true
	    }
	    else{
	    	echo $x." IS A CONSONANT";
	    }

	}
	else{
		echo "Given Character is NOT AN Alphabetic please enter Alphabets";
	}

}
?>
</body>
</html>