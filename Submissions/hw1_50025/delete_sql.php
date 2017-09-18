<?php
session_start ();
$conn = new mysqli("localhost", "root", "" ,"os2");
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$sql = "DELETE FROM `product` WHERE productname = '".$_REQUEST ['pname']."'";
		if($conn->query($sql)){
			header ( "location:food.php" );
		}else{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
		
		?>
