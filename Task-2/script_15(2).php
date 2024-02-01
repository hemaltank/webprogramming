<?php
$v1=$_REQUEST['v_a'];
$v2=$_REQUEST['v_b'];
$v3=$_REQUEST['v_c'];

if ($v1>$v2 && $v1>$v3)
{
	echo "a is largest";
}
else if ($v2>$v1 && $v2>$v3)
{
	echo "b is largest";
}
else
{
	echo "c is largest";
}
?>