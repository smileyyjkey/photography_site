<?php  

$sname = "localhost:81";
$uname = "root";

$password = "";

$db_name = "signup";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}