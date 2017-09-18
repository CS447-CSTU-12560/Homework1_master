<?php
	include("conn.php");
	$id = $_REQUEST['id'];
	$sqldelete = 'DELETE FROM `goods` WHERE ID = "'.mysqli_real_escape_string($conn, $id).'";';

	//$query = mysqli_query($conn, $sqldelete);

	if($query = mysqli_query($conn, $sqldelete)){
		echo '<script> alert("Delete Item Successfully!); 
				window.location.replace("/ppstorage/home.php"); </script>';
	}else{
		echo '<script> alert("Delete Item Failed!); </script>';
	}

	$conn->close();

?>