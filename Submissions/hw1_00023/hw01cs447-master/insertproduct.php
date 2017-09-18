<?php

	session_start();

	include("connect.php");

	/*$_REQUEST['nameproduct'];
	$_REQUEST[' imgproduct'];
	$_REQUEST['description'];
 	$_REQUEST['price'];
 	$_REQUEST['countproduct'];*/
	$sql = "INSERT INTO `lpstore`(`nameproduct`, `imgproduct`, `description`, `price`, `countproduct`) VALUES ('".$_REQUEST['nameproduct']."','".$_REQUEST['imgproduct']."','".$_REQUEST['description']."' ,'".$_REQUEST['price']."','".$_REQUEST['countproduct']."');";
	

	if(!$conn->query($sql)) {
		echo "Error:" . mysqli_error($conn);

		// echo "<script>
		// 		alert('Please check !!');
		// 	</script>";

	} else {

		header("location: main.php");

	}

?>