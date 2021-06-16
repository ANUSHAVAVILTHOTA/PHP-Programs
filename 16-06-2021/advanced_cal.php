<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Advance Calculator</title>
	<!-- BS CDN Links -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="background-color: purple;">
<!-- 

row
12

6 6
12
4 4 4
3 3 3 3
 -->
<div class="container">
	<div class="bg-white rounded mt-5">
		<h1><center>ADVANCED CALCULATOR</center></h1>
		<form method="post">
			<div class="row">
				 <div class="col-12">
				 	<center>
				 	<input type="text" name="num1" class="form-control" placeholder="Enter Number1"><br>
				 	<input type="text" name="num2" class="form-control" placeholder="Enter Number2"><br>
				 	<b>For sqrt & cube root ,sign cos......etc you can just enter Number1</b><br><br>
				 	<button type="submit" class="btn btn-warning" name="add">Add</button>
				 	<button type="submit" class="btn btn-danger" name="sub">Sub</button>
				 	<button type="submit" class="btn btn-primary" name="mul">mul</button>
				 	<button type="submit" class="btn btn-success" name="div">Div</button>
				 	<button type="submit" class="btn btn-dark" name="mod">Mod</button>

				 	    <button type="submit" class="btn btn-primary" name="exp">Exp</button>

				    <button type="submit" class="btn btn-primary" name="pow">pow</button>

				 	


				 	</center>
				 </div>
			</div>

			<div class="row mt-3 mb-2">
				 <div class="col-12">

				 <center>
				 	<button type="submit" class="btn btn-primary" name="square-root">Sqrt</button>

				 	<button type="submit" class="btn btn-primary" name="sin">Sin</button>

				 	<button type="submit" class="btn btn-primary" name="sinh">Sinh</button>

				 	<button type="submit" class="btn btn-primary" name="cos">Cos</button>
				 	
				 	<button type="submit" class="btn btn-primary" name="cosh">Cosh</button>
				 	<button type="submit" class="btn btn-primary" name="tan">Tan</button>
				 	<button type="submit" class="btn btn-primary" name="tanh">Tanh</button>

				    <button type="submit" class="btn btn-primary" name="log">Log</button>
				    <button type="submit" class="btn btn-primary" name="log10">Log10</button>
				

				    <button type="submit" class="btn btn-primary" name="decbin">DEC-BIN</button>

				    <button type="submit" class="btn btn-primary" name="dechex">DEC-HEX</button>

				    <button type="submit" class="btn btn-primary" name="dechex">DEC-OCT</button>

				    <button type="submit" class="btn btn-primary" name="hexdec">Hex-Dec</button>

				    <button type="submit" class="btn btn-primary" name="octdec">OCT-Dec</button>



				 </center>
		         </div>
		     </div>
			
		</form>
		<?php 
            if(isset($_POST['add'])){ //button name
                 $num1=(float)$_POST['num1'];
                 $num2=(float)$_POST['num2'];
                 $add=$num1+$num2;
                 echo "<b>Output:".$add."</b>";// thick font
            }
            else if(isset($_POST['sub'])){
            	$num1=(float)$_POST['num1'];
                 $num2=(float)$_POST['num2'];
                 $sub=$num1-$num2;
                 echo "<b>Output:".$sub."</b>";
            }
            else if(isset($_POST['mul'])){
            	$num1=(float)$_POST['num1'];
                 $num2=(float)$_POST['num2'];
                 $mul=$num1*$num2;
                 echo "<b>Output:".$mul."</b>";
            }
            else if(isset($_POST['div'])){
            	$num1=(float)$_POST['num1'];
                 $num2=(float)$_POST['num2'];
                 $div=$num1/$num2;  //2 10/5 ==Q
                 echo "<b>Output:".$div."</b>";
            }
            else if(isset($_POST['mod'])){
            	$num1=(float)$_POST['num1'];
                 $num2=(float)$_POST['num2'];
                 $mod=$num1%$num2;  //rem 10%5=0
                 echo "<b>Output:".$mod."</b>";//0
            }
            else if(isset($_POST['square-root'])){
            	 $num1=(float)$_POST['num1'];
                 $output=sqrt($num1);
                 echo "<b>Output:".$output."</b>";//0
            }
            else if(isset($_POST['sin'])){
            	 $num1=(float)$_POST['num1'];
                 $output=sin($num1);
                 echo "<b>Output:".$output."</b>";//0
            }
            else if(isset($_POST['sinh'])){
            	 $num1=(float)$_POST['num1'];
                 $output=sinh($num1);
                 echo "<b>Output:".$output."</b>";//0
            }
            else if(isset($_POST['cos'])){
            	 $num1=(float)$_POST['num1'];
                 $output=cos($num1);
                 echo "<b>Output:".$output."</b>";//0
            }
            else if(isset($_POST['cosh'])){
            	 $num1=(float)$_POST['num1'];
                 $output=cosh($num1);
                 echo "<b>Output:".$output."</b>";//0
            }
            else if(isset($_POST['tan'])){
            	 $num1=(float)$_POST['num1'];
                 $output=tan($num1);
                 echo "<b>Output:".$output."</b>";//0
            }
            else if(isset($_POST['tanh'])){
            	 $num1=(float)$_POST['num1'];
                 $output=tanh($num1);
                 echo "<b>Output:".$output."</b>";//0
            }
            else if(isset($_POST['log'])){
            	 $num1=(float)$_POST['num1'];
                 $output=log($num1);
                 echo "<b>Output:".$output."</b>";//0
            }
            else if(isset($_POST['log10'])){
            	 $num1=(float)$_POST['num1'];
                 $output=log10($num1);
                 echo "<b>Output:".$output."</b>";//0
            }
            else if(isset($_POST['exp'])){
            	 $num1=(float)$_POST['num1'];
                 $output=exp($num1);
                 echo "<b>Output:".$output."</b>";//0
            }
            else if(isset($_POST['pow'])){
            	 $num1=(float)$_POST['num1'];
            	 $num2=(float)$_POST['num2'];
                 $output=pow($num1,$num2);
                 echo "<b>Output:".$output."</b>";//0
            }
            else if(isset($_POST['decbin'])){
            	 $num1=(float)$_POST['num1'];
                 $output=decbin($num1);
                 echo "<b>Output:".$output."</b>";//0
            }
            else if(isset($_POST['dechex'])){
            	 $num1=(float)$_POST['num1'];
                 $output=dechex($num1);
                 echo "<b>Output:".$output."</b>";//0
            }

            else if(isset($_POST['decoct'])){
            	 $num1=(float)$_POST['num1'];
                 $output=decoct($num1);
                 echo "<b>Output:".$output."</b>";//0
            }
            else if(isset($_POST['hexdec'])){
            	 $num1=(float)$_POST['num1'];
                 $output=hexdec($num1);
                 echo "<b>Output:".$output."</b>";//0
            }
            else if(isset($_POST['octdec'])){
            	 $num1=(float)$_POST['num1'];
                 $output=octdec($num1);
                 echo "<b>Output:".$output."</b>";//0
            }

		?>
	</div>
</div>

</body>
</html>