<?php
session_start ();
$conn = new mysqli ( "localhost", "root", "", "os2_hw1" );
if ($conn->connect_error) {
	die ( "Connection failed: " . $conn->connect_error );
}
$sql = "SELECT * FROM product WHERE name = '" . $_REQUEST ['name'] . "'";
$result = $conn->query ( $sql );
echo $result->num_rows;
if ($result->num_rows == 0) {
	$sql = "INSERT INTO `product`(`name`, `info`, `img`, `price`, `amount`) VALUES 
			('".$_REQUEST['name']."','".$_REQUEST['info']."','".$_REQUEST['url']."',".$_REQUEST['price'].",".$_REQUEST['amount'].")";
	if ($conn->query ( $sql ) === TRUE) {
		$conn->close ();
		$_SESSION["Fail"] = false;
		header ( "location:index.php" );
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
} else {
	$_SESSION["Fail"] = true;
	header ( "location:createproduct.php" );
}
$conn->close ();
?>