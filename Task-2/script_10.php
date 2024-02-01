//write a php script to calculate the area of a rectangle gives its length and width
<html>
<body>
<form method="post" >

input length of rectangle:<input type="text" name="length"/><br>
input width of rectangle:<input type="text" name="width"/><br>
<input type="submit" name="submit"/>

</form>
</body>
</html>

<?php
$rec_len=$_REQUEST['length'];
$rec_wid=$_REQUEST['width'];

$aor=$rec_len*$rec_wid;
echo "area of rectangle:".$aor;

?>