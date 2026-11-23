<!DOCTYPE html>
<html>
<head>
<title>Factorial</title> 
</head> 
<body>
<h2>Factorial of a Number</h2>

<form method="POST"> 
Enter a Number: 
<input type="number" name="num" required> 
<input type="submit" name="submit" value="calculate"> </form>
<?php if(isset($_POST['submit'])) 
{ 
$num = $_POST['num']; 
$fact = 1; for($i = 1; $i <= $num; $i++) 
{ 
$fact = $fact * $i; 
} 
echo "Factorial of $num is $fact"; } 
?>
</body> 
</html>

