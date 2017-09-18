<?php
session_start ();
$conn = new mysqli("localhost", "root", "" ,"os2");
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO `product`(`productname`, `description`, `picture`, `price`, `amount`) VALUES ('".$_REQUEST['productname']."','".$_REQUEST ['des']."',
'".$_REQUEST ['pic']."',".$_REQUEST ['price'].",".$_REQUEST ['amount'].")";
		if($conn->query($sql)){
			header ( "location:food.php" );
		}else{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
		
		?>

