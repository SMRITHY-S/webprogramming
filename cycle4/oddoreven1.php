<!DOCTYPE html>
<html>
<head>
<title>Odd or Even</title>
</head>
<body>
<h2>Check Odd or Even</title>
<form method="GET">
Enter  a number:
<input type="number" name="num" required>
<input type="submit" name="submit" value="check">
</form>

<?php
if(isset($_GET['submit']))
{
$num=$_GET['num'];
if($num % 2 == 0)
{
echo "$num is  Even";
}
else
{
echo "$num is Odd";
}
}
?>
</body>
</html>
