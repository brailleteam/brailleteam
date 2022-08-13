<?php
$host='localhost';
$user='root';
$password='';
$db_name='braille';
$con=mysqli_connect($host,$user,$password,$db_name);
if(!$con)
die("Error: Failed to connect to database!");
?>