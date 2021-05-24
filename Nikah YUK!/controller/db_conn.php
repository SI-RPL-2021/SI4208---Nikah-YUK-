<?php  

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "nikah-yuk";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}