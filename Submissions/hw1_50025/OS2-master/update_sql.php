<?php
session_start ();
$conn = new mysqli("localhost", "root", "" ,"os2");
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE `product` SET `description`= '".$_REQUEST ['des']."',`picture`= '".$_REQUEST ['pic']."',`price`= ".$_REQUEST ['price'].",`amount`= "
		.$_REQUEST ['amount']." WHERE productname = '".$_REQUEST ['pname']."'";
if($conn->query($sql)){
	header ( "location:food.php" );
}else{
	echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>

