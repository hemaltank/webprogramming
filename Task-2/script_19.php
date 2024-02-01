<html>
<body>
<form action="" method="post">
ENTER ANY NO:<input type="text" name="number"/><br>
<input type="submit" name="submit"/>
</form>
</body>
</html>


<?php
$num=$_REQUEST['number'];
$a=2;
	
	if($num%$a==0)
	{
	echo $num." number is not prime";
	}
	else
	{
	echo $num." number is prime";
	}
?>