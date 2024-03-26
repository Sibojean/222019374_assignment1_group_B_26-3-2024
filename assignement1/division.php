
<!DOCTYPE html>
<html>
<head>
	<body bgcolor="skyblue" style="color:;font white:Times New Roman ;font-size:20 ;margin-top: 20;margin-bottom: 20;margin-left: 20;margin-right: 20;">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Results</title>
</head>
<body>
<h1> the division of two number </h1>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$sum=$num1/$num2;
	echo "<p> the division of $num1 / $num2 is : $sum <p>";
}
?>
<a href="division.html">division</a>
</body>
<center> 
<h2>THANK YOU FOR YOUR  ACTION</h2></center>
</html>