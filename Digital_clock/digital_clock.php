<html>
<head>
<meta http-equiv="refresh" content="1">
<style>
td
{
	color:red;
	background-color: black;
	font-face: “serif”; font-size:30px; line-height:30px; font-weight:normal; color:#70F503;
   
}
</style>
</head>
</html>
<?php
echo "<table border=1>"; 
echo "<tr>";
echo "<td>";
$a=date("d:m:y");
echo $a;
echo "</td></tr>";
echo "<tr><td>";
date_default_timezone_set('Asia/Kolkata');
echo date("h:i:s A");
echo "</td>";
echo "</tr>";
echo "</table>";
?>