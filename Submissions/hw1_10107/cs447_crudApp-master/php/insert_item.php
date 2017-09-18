<?php
	include("conn.php");

	$pName = $_REQUEST['pName'];
	$pPrice = $_REQUEST['pPrice'];
	$pDescribtion = $_REQUEST['pDescription'];
	$pAmount = $_REQUEST['pAmount'];
	$img = $_REQUEST['imgPath'];

	// insert new item
	$sql_insert = 'INSERT INTO `goods`(`Name`, `Price`, `Describtion`, `Amount`,  `Image`) VALUES ("'.mysqli_real_escape_string($conn, $pName).'",
	"'.mysqli_real_escape_string($conn, $pPrice).'","'.mysqli_real_escape_string($conn, $pDescribtion).'",
	"'.mysqli_real_escape_string($conn, $pAmount).'", "'.mysqli_real_escape_string($conn, $img).'");';
	$query = mysqli_query($conn, $sql_insert);
	
	if(!$query){
		echo "fail";
	}else{
		echo '<script> alert("Add new item successfully!"); window.location.replace("/ppstorage/home.php"); </script>';
	}
?>