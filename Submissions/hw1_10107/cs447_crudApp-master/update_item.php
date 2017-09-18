<?php
	include("conn.php");

	$pId = $_REQUEST['id'];
	$pName = $_REQUEST['pName'];
	$pPrice = $_REQUEST['pPrice'];
	$pDescribtion = $_REQUEST['pDescription'];
	$pAmount = $_REQUEST['pAmount'];

	// insert new item
	$sql_update = 'UPDATE `goods` SET `Name`= "'.mysqli_real_escape_string($conn, $pName).'",`Price`= "'.mysqli_real_escape_string($conn, $pPrice).'",`Describtion`= "'.mysqli_real_escape_string($conn, $pDescribtion).'",`Amount`="'.mysqli_real_escape_string($conn, $pAmount).'" WHERE ID = "'.mysqli_real_escape_string($conn, $pId).'";';

	'INSERT INTO `goods`(`Name`, `Price`, `Describtion`, `Amount`) VALUES (,
	,,
	);';
	$query = mysqli_query($conn, $sql_update);
	if(!$query){
		echo "fail";
	}else{
		//$pId = $conn->insert_id;
		echo '<script> alert("Uptate item successfully!");
		window.location.replace("/ppstorage/home.php"); </script>';
	}
?>