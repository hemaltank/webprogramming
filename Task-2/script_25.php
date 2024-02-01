<?php 
$a=1;
$b=5;
echo "Before swapping: "."<br>"."A:".$a."<br>"."B:".$b."<br><br>";
$a=$a+$b;
$b=$a-$b;
$a=$a-$b;
echo "After swapping: "."<br>"."A:".$a."<br>"."B:".$b;

?>