<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
	Select a file to upload:
	<input type="file" name="fileUpload" id="fileUpload">
	<input type="submit" name="submit" value="Upload The File">
</form>
<?php 

if(isset($_POST['submit'])){
	$fileName=$_FILES['fileUpload']['tmp_name']; // info about files= uploaded files
	// echo $fileName; // path info
	$info=pathinfo($_FILES['fileUpload']['name']); 
	// base name ,ex,file name
	// print_r($info);
	//  fopen
	//  r=read w=write e=execute
	$file=fopen($fileName,'r'); // open the file
	$s=fgetcsv($file); // new line it will stop the execution
	// print_r($s);

	// fopen== to open the file
	// fgetcsv == to get the one line of data
	// ==TRUE
	//!=FALSE
//ABC -3
	//

	function startswith($string,$chr){
		$len=strlen($chr);//1 //AB
		return (substr($string,0,$len)===$chr);
		//  HELLO WORLD==ABCD
		// HELL==ABCD
        
	}
	$sum=0;
	$count=0;
	//sum of values
	if(($file=fopen($fileName,"r"))!==FALSE){//file open is success
		while(($column=fgetcsv($file))!=FALSE){
			// print_r($column);
			// echo $column[0];
            // echo $column[5];
            // AACG ,'A'

            // if(startswith($column[0],'AB')){
            // 	echo $column[0];
            // }

            // echo strtolower($column[0]);
            // if((float)$column[5]>=550){
            // 	echo $column[0];
            // 	echo "<br>";
            // }

            $s=(int)$column[5];
            if($s){
            	if($s%2==0){
            		echo $s;
            		echo "<br>";
            	}
            }
            if((float)$column[5]){ // float
 				$sum=$sum+$column[5];
 				$count=$count+1;
 				 //  here i want symbols starting with particular char
 				// A

            }

			

					}
	}
	echo $sum;
	echo $count;//4539

}
?>
</body>
</html>