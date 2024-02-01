<html>
<body>
<form action="" method="post">
Input number<input type="text" name="num"/><br>
<input type="submit" name="submit"/><br>
<body>
</html>

<?php
$number=$_REQUEST['num'];
echo sqrt($number);
?>