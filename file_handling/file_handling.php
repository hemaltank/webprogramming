<?php

//open file
//$myfile=fopen("myfile.txt","rw");

//read file
//echo fgets($myfile);

//add contenct
/*$myfile=fopen("myfile.txt","rw");
$add="hello student..!";
fwrite($myfile,$add);
echo fgets($myfile);

//append 
$new_content="append content";
file_put_contents("myfile.txt",$new_content,FILE_APPEND);*/

//file exist or not
if(file_exists("myfile2.txt"))
{
	echo "This file is exist";
}
else
{
	echo "This file is not exist";
}
//close file
//fclose($myfile);


?>