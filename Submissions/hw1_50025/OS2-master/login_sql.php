<?php
session_start ();
$conn = new mysqli("localhost", "root", "" ,"os2");
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM account WHERE username = '".$_REQUEST ['uname']."'
		and password = '" .  $_REQUEST ['psw']  . "'";
$result = $conn->query( $sql );
if ($result->num_rows <= 0) {
	
	header("location:login.html");
} else {
	$temp = $result->fetch_assoc();
	$_SESSION["user"] = $temp['username'];
	session_write_close();
	header("location:food.php");
}
$conn->close();
?>

