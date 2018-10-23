<?php

$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="colorcontrol";



$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
?>