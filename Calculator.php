<!DOCTYPE html PUBLIC "-//W3C//DTD//XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtmll/DTD/xhtmll-tansitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Tyoe" content="text/html; charset=utf-8"/>
<title>Employee Info</title>
<link href="bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>
			<?php

			if(isset($_POST['btn'])){
			$num1=$_POST["n1"];
			$num2=$_POST["n2"];
			$o=$_POST["op"];

			if($o=='+'){
			$Result=$num1+$num2;
			}
			elseif($o=='-'){
			$Result=$num1-$num2;
			}
			elseif($o=='*'){
			$Result=$num1*$num2;
			}
			elseif($o=='/'){
			$Result=$num1/$num2;
			}
			else{
			$Result="Error";
		}
		}
			?>
	<form method="post" action="Calculator.php">
		<table class="table table-bordered">
			<tr>
				<td><input type="text" placeholder="Enter a Number" class="form-control" name="n1"></td>
			</tr>
			<tr>
				<td><input type="text" placeholder="Enter another Number" class="form-control" name="n2"></td>
			</tr>
			<tr>
				<td><input type="radio" name="op" value="+"><span>+</span>
				<input type="radio" name="op" value="-"><span>-</span>
				<input type="radio" name="op" value="*"><span>X</span>
				<input type="radio" name="op" value="/"><span>/</span></td>
			</tr>
			<tr>
				<td><input type="Submit" name="btn"></td>
			</tr>
			<tr>
				<td align="center"><?php  if(isset($_POST['btn'])){echo $Result."<br/>";} ?></td>
			</tr>


		</table>
	</form>
</body>