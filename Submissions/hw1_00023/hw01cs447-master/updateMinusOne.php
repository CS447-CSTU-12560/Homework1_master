<?php

	session_start();

	include("connect.php");


	$idproduct = $_REQUEST['idproduct'];
$query = mysqli_query($conn, "SELECT countproduct FROM lpstore WHERE idproduct = $idproduct;");
$product = mysqli_fetch_array($query);

$new_value = $product['countproduct'] -= 1;

$sql = 'UPDATE `lpstore` SET `countproduct` = "'.$new_value.'" WHERE `idproduct` = "'.$idproduct.'" ';

if (mysqli_query($conn, $sql)) {
    		echo "<script>
				alert('แก้ไขรายการสำเร็จ ');
				window.location='main.php';
			</script>";

} else {
printf( "<script>
				alert('ไม่สามารถทำรายการได้ %s');
				window.location='main.php';
			</script>", $product);
}

mysqli_close($conn);


	


?>