<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "password";
$dbname = "banking-system";
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("Failed to connect!");
}
?>