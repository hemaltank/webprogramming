<html>
<body>
<form action="" method="post">
 
input year:<input type="text" name="year"/>
<input type="submit" name="submit"/>

</form>
</body>
</html>


<?php
$y=$_REQUEST['year'];

if ($y%4==0)
{
	echo "$y is leap year";
}
else
{
	echo "$y is not leap year";
}
?>