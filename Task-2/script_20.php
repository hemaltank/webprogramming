<html>
<body>
<form action="" method="post">

enter no:<input type="text" name="num"/>
<input type="submit" name="submit"/>

</form>
</body>
</html>

<?php
$n=$_REQUEST['num'];
$fact=1;

for($i=$n;$i>0;$i--)
{	
	$fact=$fact*$i;
}
echo "fact:".$fact; 

?>