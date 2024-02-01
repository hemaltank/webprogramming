<html>
<body>
<form>

enter number (1-10):<input type="text" name="number"/>
<input type="submit" name="submit"/>

</form>
</body>
</html>

<?php
$n=$_REQUEST['number'];
echo "guess no is: ".$n;
echo "<br>";

$a=rand(1,10);
echo "random number is: ",$a;
echo "<br>";

if($n==$a)
{
	echo "guess number and random number is same";
}
else
{
	echo "guess number and random nubmer is not same";
}

?>