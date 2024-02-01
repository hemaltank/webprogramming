<html>
<body>
<form>

input circle radius:<input type="text" name="radius"/>
<input type="submit" name="submit"/>

</form>
</body>
</html>

<?php
$r=$_REQUEST['radius'];
$pi=3.14;
$AOC=$pi*$r*$r;
echo "Area of circle : ".$AOC;
?>