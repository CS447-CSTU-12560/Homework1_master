<?php
session_start ();
$conn = new mysqli ( "localhost", "root", "", "os2_hw1" );
if ($conn->connect_error) {
	die ( "Connection failed: " . $conn->connect_error );
}
$sql = "DELETE FROM `product` WHERE name = '".$_REQUEST['pname']."'";
if ($conn->query ( $sql ) === TRUE) {
	$conn->close ();
	header ( "location:allProductList.php" );
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close ();
?>