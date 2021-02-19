<?php
$server = "localhost";
$username = "root";
$pass = "";
$db = "login";

$conn = mysqli_connect($server,$username,$pass,$db);

if(!$conn){
	die("Not connected".mysql_connect_error());
} 
?>