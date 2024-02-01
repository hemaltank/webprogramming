<html>
<body>
<form action="" method="post">
Input number<input type="text" name="num"/><br>
<input type="submit" name="submit"/><br>
<body>
</html>

<?php
$number=$_REQUEST['num'];
//$number=121;
$revers;
$revers=strrev($number);

if($number == $revers)
{
	echo $number." number is palindrome";
}
else
{
	echo $number." number is not palindrome";
}
?>