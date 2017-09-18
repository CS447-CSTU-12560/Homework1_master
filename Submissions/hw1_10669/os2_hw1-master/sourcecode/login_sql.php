<?php
session_start ();
$conn = new mysqli("localhost", "root", "" ,"os2_hw1");
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM user WHERE id = '".$_REQUEST ['Uid']."'
		and pass = '" .  $_REQUEST ['Upass']  . "'";
$result = $conn->query( $sql );
if ($result->num_rows <= 0) {
	$_SESSION["Fail"] = true;
	header("location:login.php");
} else {
	$temp = $result->fetch_assoc();
	$_SESSION["Uname"] = $temp['name'];
	$_SESSION["Uid"] = $temp['id'];
	$_SESSION["Fail"] = false;
	session_write_close();
	header("location:index.php");
}
$conn->close();
?>

