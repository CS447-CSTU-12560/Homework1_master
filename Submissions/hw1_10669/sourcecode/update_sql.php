<?php
session_start ();
$conn = new mysqli("localhost", "root", "" ,"os2_hw1");
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
if($_REQUEST['info']!=""){
	$sql = "UPDATE product SET info= '".$_REQUEST['info']."' WHERE name='".$_REQUEST ['pname']."'";
	if (!($conn->query ( $sql ))) {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
if($_REQUEST['price']!=""){
	$sql = "UPDATE product SET price= ".$_REQUEST['price']." WHERE name='".$_REQUEST ['pname']."'";
	if (!($conn->query ( $sql ))) {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
if($_REQUEST['amount']!=""){
	$sql = "UPDATE product SET amount= ".$_REQUEST['amount']." WHERE name='".$_REQUEST ['pname']."'";
	if (!($conn->query ( $sql ))) {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
if($_REQUEST['url']!=""){
	$sql = "UPDATE product SET img= '".$_REQUEST['url']."' WHERE name='".$_REQUEST ['pname']."'";
	if (!($conn->query ( $sql ))) {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
$conn->close();
header ( "location:index.php" );
?>

