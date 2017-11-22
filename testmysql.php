<?php 
$link = mysqli_connect('66.147.242.186','urcscon3_bronx','coffee1N'); 
if (!$link) { 
	die('Could not connect to MySQL: ' . mysqli_error()); 
} 
echo 'Connection OK'; mysqli_close($link); 
?> 